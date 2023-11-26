<?php
session_start();
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalles</title>
    <script src="public/js/login.js"></script>
    <link rel="stylesheet" href="style/detail.css">
    <link rel="stylesheet" href="style/css.css">
    <script src="public\js\search.js"></script>
    <script src="public/js/related.js"></script>
    <script src="public/js/login.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@200&family=Quicksand:wght@300;500;700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <?php
    require "templates/login.php";
    ?>
    <div class="compras hidden">
        <div class="in">
            <h3 class="total">Total = 0 </h3>
        </div>
    </div>
    <header>
        <div class="container">

            <div class="texto">
                <a href="main.php">
                    <div class="si"><img width="100%" src="img/logo.png" alt=""></div>
                </a>
            </div>
            <div class="buscar">
                <input class="barra-buscar" type="text" placeholder="Buscar algo">
                <span class="search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path
                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                        <path
                            d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
                        </path>
                    </svg></span>
                <div class="resultados-busqueda hidden">
                    <div class="usuarios">
                        <div class="close">
                            <div class="rojos ">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="real-user">
                <div class="nombre">
                    <?php
                             				require "templates/welcomeloginlogout.php";
                             				echo $dataLogin;
                             				?>
                </div>
            </div>


            <div class="img">
                <div class="shop"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAeJJREFUSEvFlr1SFEEUhc8hB/EJhNBIjAx1fQJ8AjBhi0hDiYRIQ40oSYAn0Cdgl5BsiQiVJxA191BnvbPVtTU/PVuzTldt1W5PT3997z3n9hI9DfbERf9gSRsAHhUZIHm5zGzMIpZ0COB9ArsDMCA5WcYB6sDmjUkOlg12qv3x2AbwJr476nHX8FJxSVoH8DNg5yR3/wvYEElnAHYC+KID8K9UL5V2kmTYqANgusUrkt88UetjSVb0kw7hr0k6k41g1/Y0wEdW+QKHsE2fx3sPSdqmjWCL7AeAB4tYq06kjS1T0qfEWpskfZCsISnN2Ky+jRGHuu3t70H6TPJtFvWfMwqN3JIsesT09caIA+7auk6uj6Oe1qluRO+vPHAu2J3sa4BmymwA15YoCxxRu7a+vSYkn2ZEXKy/Jrk1v74NOL29LJo6kRnkiD1KM9QGnPbvpoDT5zPvppPZ4Eh3WrcceKULWoEDnn1h1F2ni4D3ADjtxyT/zIctaRXAvq1H8qQqLa3Akj4AeBebjUi+LAFf+C9TzH8keVAGbwtONxXJlRLw36QxlR4uu3MVm0tymr/E7xOSwxKwn3udx7Aq3a0iDnE9BrBG8qqqfpKeAfhN8qaTGuf4J3dN64hzN25a1xv4Hsq9sx9QXqmgAAAAAElFTkSuQmCC" />
                </div>
            </div>
        </div>
        </div>

    </header>


    <main>
        <div class="product-list">
            <?php
		echo $layerDetailprducts;
				?>
        </div>
    </main>
    <section class="ralated">
        <div class="slider-container">
            <h1 class="h1black hidden"> Productos relacionados</h1>
            <div class="slider hidden">

            </div>
        </div>

        </div>
    </section>
    <footer>
        <secction class="contacto">
            <h3>Contact us</h3>
            <nav>
                <a class="link-redes" href="#"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABYdJREFUaEPtmWmsXlMUhp/XPCXaENRQNZTGD/2BGiJaRIVKUVNVYypBCGoIadLSIhKhNBJDRSlBY64pZlURTRsVYoihhkpNoVQ6iGLJe+3TnHvu+c53vva7lSZ3/Tx777X2u+a1j1jHSev4/ekB8H9bsMcC65wFImJ7YBQwDNgV6LuGIL4FFgDPAw9L+q4VfrVdKCI2BSYBY4H1WxHSwt6/gduA8ZJW1DlXC0BEHArcB+xch2kb9nwDnCXpjWa8mgKIiMHArAKjX4GngPnA58CfzQQ1WLdV9wIOAo4ENi/sGyLpzSrelQCS23wM9EtMfgYul/TAal644bGI2AK41vxzm742wCp3agZgcvJ583RwDZK0qN2Xz/OLiP2BOblvt0q6rJHMhgAiYidgYe7gYXV8shVwEbEVcGbKaO8CEyUtjYhrkjUydv0kOS66UBWAc4Gp6cRcSdZMWykiLgJuzzGdLKnDhSLC7mqApgsk3dUqgHuBs9Oh6yWNb/X2EeEAXSnJgd6FIuJG4OrcwhxJByYATwLHp7Vpksa0CsCZxxnIdLKkx5oBiIhNAPvrEGA/oFc646w1D3jNeV5SR9aKCBfEh3J8J0i6Lq1NBCaktdclHd4qgK9y2WewpNlVACJiH2AGsHsToJ8Cp0h6P110NDAwJYkZkr5P388DMrdZIKmUb1UMLAZ6p8sMlPRBo4tFhLV+M9Ruz11xnY6nVPA81a1FWl8sKYuHTkeqAERuZ8MsEBEuQm8XLjIdeBZ4C9gYcAI4FrC2MzL/AyTNLQMRESOAJ9LaMkmuE12oLoDtJP1YPB0RmwEfArukNdeK0Y3SbUQcATwIbJv2O7j3lvRHCW8HsAPZtFxSsUp3LNQFsLWkX0qEOIe7R8roYElFa3Q6FhEOxldzH0dJeqS7AfSW9FuJkPuBM9L3uyWdX2bmknPT3Kyl71MlOWCLQNtqgS0l/V4ixG61Tfo+VNIrNQEck2LE27+Q1L+E93GpYfTSCkl21y5U14X6SPohfzoidrPw3LdekpbUBOChKN9TlfH3wPRcxk9S6V3rAuiShSJiAPBJ7sKlblYGKCL6pLyfLe9RrNYp4F/Ond9AktNvJ6oLoK8kj36rKCLWA5w9NlwNF8prt9Q9ImIo8FK3WcCMI+Id5/Ik5HFJJ9V0oRfTAOPtsyVlLUteQUenObnjW9tdKAG4E8hnnqYtd0S4oD2dAzpF0qVF4BExHJiZvrsh3KhMOavtQgnAnsB7gEdDkwvZ6ZLctHWh5BYuZFnmWpYK2ZclAPKVeI2zUFUrcSJQ7FTdSnhmtou5ldgXOAE4rXDR4ZLccpSBHQlkBW6JpKyz7bS3ygLLc5rtLymfMjsxiYirAPf2TR8J0kH3QVdKuqVRzESEC6QLpWmRpB1bdSGPkx4rTYdIcmPWkFpop62IkZI8QlbxOwe4J21YKKn0SafKAu4SPZSY3L8/WiXQa2mguQnwqFjk/Q/g9nlcWfNW5B0RHmY81JjmS/K80YWqAORHukmSPGjXoohwbXC1dddpd/nJAS5pZS0G/ynDceX4Ms2U5NaiJQCXpGc+H5onaVBd4e3YVxjqx0ryk2NLAPyY5bEyoxGSnFm6nSJiHHBDTtCukvJ3WbXU7GHLPntx2u1mztloaXciiAjPvh8BWeG6Q9KFjWQ2A+AC9RmQpTBrwZqZLumvdgJJ052VdUXuPcgd64AqpTXN2xFxFPBC4bIebhzkftw1wNrBWeCTf9x181ace4dJKsruxKIpAO+OCHePfuIoLSbttETiZQWNkZTNxA1F1AKQQHiodl5249VdPzgsyu9PrjudBqjVioGyQxGxgysp4LGwXb+YHFuuzLMkPdOKRWtboBWma3NvD4C1qe0yWT0W6LHAGmrgXxQ2IE+9qBF6AAAAAElFTkSuQmCC" /></a>
                <a class="link-redes" href="#"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAA+NJREFUaEPtmFuoVlUQx3//eshEKdGkNDAvvWRBZJggWaCQhBlKFIRgYFAaYVaKogbZBRIvEVZEZYEIhiAhGkKFEV56UXwyEbsI3VMUL+hTExP7xHfO2ZfZa+8POeC8few1l9+a+daaNWKAiwZ4/FwFuNIZbC0DZnYrMBN4AHgQ8N+d8gvwDbAX2CPptzbgGwGY2RjgReBhYELNgI4DXwDrJTlckiQBmNlgYBWwIslrf6XVkl5PsVUbwMweBd4HbklxWKJzElgg6es6dsMA2a5vBp6o4yBh7QeSno3qhQDMbATwJXB31HDDdf5nnyXpYpWdSgAzux7YB9xTZazl775hMyX9U2Y3ArAdeKyl4Pzo/AHwoIYB1wB3ltheJ2lpMoCZvQBsbBi87+Qa4IikC31tmdntgB+pRfKIpF1FHwszYGZ+yvhueQmliAf7tKTPypTN7Gbg95I1/m2cpMt5a8oAtgDzUiLPdGZEjsQAgJtbJemNMECW1mNZjaYw7JTk90WlBAHOAKMlXeprMDcDZvYusKjSe2LddqoFAVzlOUnvVQJkx+ZfwJAGAEOKznAzezUrzXE17R+WNCkC4Kn/vKbxzuWnJN2Up29m3ju92cC2l1GvLrZfCZnZBmBJAycnJd1WAHCo4YU4T9LWTtt5AN8C93cJ4CcgFy7ob4Okl6oA/ga890mVsgz8DPgbIlV2S5pVBWCp1jO9bgIclTRxIAOck3RDFcD5GkfoIUn3NsmYmXnv7w+kiFyU1Ot4z/sTe/8TPaPbAHgbWByJ3nszSb3e3nkAB4EpQYNtAOwBHgr6OyBpalUJ7QDmBA22AfAjMDbob7ukx6sAfEyyPmiwEYCZXQfktskF/hdLeqcKoOqB0anvD5Fn+ji7LOm7vADMzEtzUMc3vxM+DW6WLxsrye+S/6WoGz0BjK9huHNpt+6B7yXd0TemIoCVQNKgCegWwMuS+pV2EcBQ4M/E52Q3AM4Co8IPGk+Tma0DejVOwZLqBsBrkl7J81/2Jh4JHAWGBwPvWdY2wK/AXZL8WdlPSudCZjYd+OoKAvj8aJqk/UUxRAZbbwHLakC0mYHCaURPPBGAa4FtNaZzbQH4INnnSqXtfSVA9od2CG8xZgcy0QZAKHiPJQTQE7SZfQI8VQHRFGCTpOcDG/XfkloAWTbmAh8DNxY4SQXwUc58Sd6dhqU2QAbh80y/FZ/M8ZQC8BGwXNLpcOTZwiSAjpLyNni57xzgnaVLFMCHvx8CayX9UTfw8CkUMZxN8yYD92Ud48I8PTPz0aCPVvxhUni2R3y2ClDHYdtrG5VQ28Gk2LsKkLJrber8C6BYg0Dcp5vHAAAAAElFTkSuQmCC" /></a>
                <a class="link-redes" href="#"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABWVJREFUaEPtmQvMlmMYx3//GZNzTJZDGDGE2UiFMgsjWbXRHEtOGyPnNeTQMJSRwzCMhGJojZWxQhjFKIcZQmtp5MzmMJu/Xbmf9nxvz/e8z/O+35B91/bu3fs89/2/r/993fd1esU6LlrH9aebwL9twW4L/G8sYHsT4CRgFLAt0BPYEugBfAV8B3wDvAQ8K2lRV5Bv+wjZ3g+4BDixpkJB5lZJN9Sc12F4ywRs7w9MAo5qRwHgM+AiSbNbwWmJgO0pwMUFC74HPAq8DHwNrJL0s+0+wNZAX+AI4Jj0Ow8xXdKpdUnUImB7I2AGcGzDQg8Bt0h6v6oCtk8Hbk73JJu2MLAlraqKU5dALNA/B/4MMF7S51UXzI+zvQVwZ7r82asvgAGSVlTBrEzA9kxgdAL9E5jY7gXMFLR9FXBtTuHFwCBJvzYjUYmA7fOA23NgoyTNagZe573tOP/TcnNmSQqXXCpNCdjeEfgEWD8hXSMpv1vN1qj83nZ4tYm5CWMkPVwGUIXAE8BxCWSupKMbAW2Hd9kOWCLp+8oaFwy0/VQKhvF2haQdWiZgOy5sXNxM+kpa2nARHwDGpWf3SzqzTQJxsZcBmyecCyXd1hlmqQVsPw4cnybfIen8BuUbz2287inphzZJXAFclzCWSdq5NgHbkcNEMNo4Td5NUtyFNWI7vMW+DeBnSbqvTQJbpbwpg+kn6YMizE4tYHsk8HSatFRSnPMOYjvc3IYNjwvH1iVkex5wWJo3QdJNdQmE2wz3GTJV0gUFBOLCxpltlB6SfqurdIN1zwHuSs+elJQ5kg6wZRbIB66xkvI+ejVIwy5lwG0foYQdyeKbCfR1SYPqWiBvwmGS5hRY4Awgf95nSxrRzs5nc22H+1yefi+XFPFoLSmzwBJgnzSjv6RsNzqA2I48aKf08EdgT0kru4iEMxxJhbqWEXgX2DsBDJb0SpFSBbFinqSh/wUCC4BDkiLjJD3YmVK2I7WIhCyTuyXFJWxZUgoTAS1kpaSI9LWOUD6IXS/pyjJtbD8GnJAbE0XNyMbUwvZ04A8gMD8t2ZSDgFfT+0WSDqxL4PJYJE2aIalpzWs74kbEj0y+BaZIujEe2I7oGlF2jaWSi/6oUTnb44EshZgpKb85a4aX3YGodTPPE6XhNlXOQ9rhkxvGRnESFomuRZHs2mgN2/kjXOjGA6iMQETYaIdsllbsFKRg96LKOrcK4TSmt6Qvs/G2e6W1s0e9JEVas5Y0S+bCx4evD1ksKVoolcR2WPBeoDQdTj2i4XlQ2/ks4DVJB3e2aDMCewH5Qr1Td1q0gO2w4qXAGGCXgjHzgRHRucjtfuRcH+fGjpYUNUmhVClool+TdSFajrS2g8BgIIuosbMvFBy/6NwNSc8XShpQZvIqBO4Bzk4gkyVdVukMtTDI9lQgX3MMlPRGuwTyqcJQSZEjdbnYjvbk5BxwuN84fqXS7A7kz+PvUeZJiu8uE9sbABHl83EmAtgQSdG+aYtAPiefI2lY7rJFB/rIyBhbtYrtgclTZTlXwEd0PqBqc6CZBfIX+Gogep+HA4cCe+S25sPUYXtE0k/Nds12eLcJQGPAi/M+XFJ0ritJMwKhzKaVkP4eFFXYc8Db0WIB3gECI9LyfqktGVbrXYAZ5E+psdbqoWWROFxehP8yiRgRirUjseuTJM1tBaSMQCRykdDlJboQ4bsjAC2Q9Ivt3VPtfBoQ3esqEm2XsNQ0SfHdspQReCsV7M8DLwJRqMTfRIViO47a2GSRSB/isz2wHhDNsPjEXZkvqZllKxMqI9BHUlaTVgb8pwc2jcT/tEJ11+smUHfHunp8twW6ekfr4v0FdV3sQMye7PwAAAAASUVORK5CYII=" /></a>
            </nav>
        </secction>
        <section class="feedback">
            <div class="texto-img"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                    <path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z">
                    </path>
                </svg>
                <h2>Deja tu pregunta</h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                    <path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z">
                    </path>
                </svg>
            </div>
            <form action="#" method="post">

                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user_name">

                <label for="mail">Correo electrónico:</label>
                <input type="email" id="mail" name="user_mail">

                <label for="msg">Mensaje:</label>
                <textarea id="msg" name="user_message"></textarea>

                <input type="submit" value="enviar">
            </form>

        </section>
    </footer>
</body>

</html>