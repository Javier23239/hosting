<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
</head>
<style>
    body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #1f1c2c, #928dab);
    margin: 0;
    padding: 0;
    color: #f5f5f5;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    width: 100%;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 15px;
}

nav ul li a {
    color: #f5f5f5;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background: rgba(255, 255, 255, 0.2);
}

.container {
    background: rgba(0, 0, 0, 0.8);
    border-radius: 15px;
    padding: 30px;
    max-width: 600px;
    margin: 50px auto;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
    width: 90%;
}

h1 {
    font-size: 2rem;
    color: #ff512f;
    margin-bottom: 20px;
}

p {
    font-size: 1.2rem;
    color: #f5f5f5;
    margin-bottom: 30px;
}

a {
    color: #fff;
    text-decoration: none;
    background: linear-gradient(135deg, #ff512f, #dd2476);
    padding: 10px 20px;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.3s ease;
}

a:hover {
    background: linear-gradient(135deg, #dd2476, #ff512f);
    box-shadow: 0 5px 15px rgba(255, 81, 47, 0.5);
}
p {
    font-size: 1.2rem;
    color: #f5f5f5;
    margin-bottom: 30px;
}

</style>
<body>
<form method="POST" action="pedido.php" style="max-width: 600px; margin: 0 auto; background: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 15px; color: #f5f5f5;">
    <h1 style="text-align: center; color: #ff512f;">Selecciona tu Plan</h1>

    <!-- Plan Básico -->
    <div style="margin-bottom: 20px; padding: 15px; border: 1px solid #ff512f; border-radius: 10px;">
        <input type="radio" name="plan" id="basico" value="basico" style="margin-right: 10px;">
        <label for="basico">
            <strong>Plan Básico - $100.00 MXN</strong><br>
            <span>Acceso a herramientas esenciales para dibujar figuras geométricas simples.</span>
        </label>
    </div>

    <!-- Plan Avanzado -->
    <div style="margin-bottom: 20px; padding: 15px; border: 1px solid #dd2476; border-radius: 10px;">
        <input type="radio" name="plan" id="avanzado" value="avanzado" style="margin-right: 10px;">
        <label for="avanzado">
            <strong>Plan Avanzado - $200.00 MXN</strong><br>
            <span>Incluye herramientas avanzadas y opciones para crear diseños personalizados.</span>
        </label>
    </div>

    <!-- Plan Premium -->
    <div style="margin-bottom: 20px; padding: 15px; border: 1px solid #1f1c2c; border-radius: 10px;">
        <input type="radio" name="plan" id="premium" value="premium" style="margin-right: 10px;">
        <label for="premium">
            <strong>Plan Premium - $300.00 MXN</strong><br>
            <span>Acceso completo a todas las herramientas, plantillas exclusivas y soporte personalizado.</span>
        </label>
    </div>

    <button type="submit" style="display: block; width: 100%; padding: 10px; background: linear-gradient(135deg, #ff512f, #dd2476); color: #fff; border: none; border-radius: 5px; text-transform: uppercase; font-weight: bold; cursor: pointer; transition: background 0.3s;">
        Continuar
    </button>
</form>

</body>
</html>