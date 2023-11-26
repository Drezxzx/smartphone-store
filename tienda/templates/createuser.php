
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/createuser.css">
    <script src="../public/js/createuser.js"></script>
</head>

<body>

    <div class="login">
        <div class="contenido">
            <div class="form-container">
                <div class="no"><img width="100%" src="../img/logo.png" alt=""></div>
                <h1 class="titulo">Crear Cuenta</h1>
                <p class="subtitulo">Ingrese contraseña y usuario</p>
                <a href="../main.php" class="cuenta-nueva">Iniciar Sección</a>
                <form action="../main.php?islogin=true" class="form">
                    <label for="usuario" class="label">Usuario</label>
                    <input type="text" name="usuario" id="usuario" placeholder="" class="input">
                    <label for="re-password" class="label">Contraseña</label>
                    <input type="password" name="password" id="re-password" placeholder="********" class="input">
                    <input type="button" class="boton-primario" value="Confirmar">
                </form>
                <div class="mensaje"></div>
            </div>
        </div>
    </div>
</body>

</html>