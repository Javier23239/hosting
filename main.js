document.addEventListener("DOMContentLoaded", function() {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const form = document.getElementById("figuraForm");

    // Función para dibujar la figura paso a paso
    function dibujarFigura(vertices) {
        const radio = 150;  // Radio del círculo circunscrito
        const centroX = canvas.width / 2;  // Centro en el eje X
        const centroY = canvas.height / 2;  // Centro en el eje Y
        const anguloIncremento = (2 * Math.PI) / vertices;  // Ángulo entre cada vértice
        const puntos = [];

        // Calcular las coordenadas de cada vértice
        for (let i = 0; i < vertices; i++) {
            const angulo = i * anguloIncremento;
            const x = centroX + radio * Math.cos(angulo);  // Coordenada X
            const y = centroY + radio * Math.sin(angulo);  // Coordenada Y
            puntos.push({ x, y });
        }

        // Dibujar la figura paso a paso
        let index = 0;
        ctx.clearRect(0, 0, canvas.width, canvas.height);  // Limpiar el lienzo antes de dibujar

        // Dibujar el círculo circunscrito
        ctx.beginPath();
        ctx.arc(centroX, centroY, radio, 0, 2 * Math.PI);
        ctx.strokeStyle = "#f5f5f5";  // Color de la línea del círculo
        ctx.lineWidth = 1;  // Grosor de la línea del círculo
        ctx.stroke();
        ctx.closePath();

        // Dibujar los vértices y las líneas entre ellos
        function trazar() {
            if (index < puntos.length) {
                const punto = puntos[index];
                if (index === 0) {
                    ctx.moveTo(punto.x, punto.y);  // Mover el lápiz al primer vértice
                } else {
                    ctx.lineTo(punto.x, punto.y);  // Dibujar una línea hacia el siguiente vértice
                }
                ctx.strokeStyle = "#f5f5f5";  // Color de la línea de la figura
                ctx.lineWidth = 2;  // Grosor de la línea de la figura
                ctx.stroke();
                index++;
                setTimeout(trazar, 200);  // Retraso de 200ms antes de trazar el siguiente vértice
            } else {
                // Cerrar la figura
                ctx.closePath();
                ctx.stroke();
            }
        }

        trazar();  // Iniciar el trazado paso a paso
    }

    // Cuando el formulario se envíe, obtener el número de vértices y dibujar la figura
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const vertices = parseInt(document.getElementById("vertices").value);  // Obtener el número de vértices
        dibujarFigura(vertices);  // Llamar a la función para dibujar la figura
    });
});
