<link rel="stylesheet" href="style/css.css">
<div class="login hidden ">
    <div class="contenido">
        <div class="form-container">
            <div class="close-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(103, 6, 6, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg></div>
            <div class="no"><img width="100%" src="img\logo.png" alt=""></div>
            <h1 class="titulo">Iniciar Seccion</h1>
            <p class="subtitulo">Ingrese contraseña y usuario</p>
            <a href="templates/createuser.php" class="cuenta-nueva">¿No tienes cuenta?</a>
            <form action="mainuser.php" class="form">
                <label for="usuario" class="label">Usuario</label>
                <input type="text" name="usuario" id="usuario"  class="input">
                <label for="re-password" class="label">Contraseña</label>
                <input type="password" name="password" id="re-password"  class="input">
                <input type="button" class="boton-primario" value="Confirmar">
                <div class="mensaje"></div>
            </form>
        </div>
    </div>
</div>