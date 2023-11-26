window.addEventListener("load", function () {
    console.log("Tienes acceso a todos los recursos.");
    const nodeButtonLogin = document.querySelector(".boton-primario")
    const nodeLogin = document.querySelector(".name")
    const logOut = document.querySelector(".logout")
    nodeButtonLogin.addEventListener("click", login);
    if (nodeLogin) {
        nodeLogin.addEventListener("click", showFormLogin)
    }
    if (logOut) {
        logOut.addEventListener("click", logout)
    }
});

function showFormLogin(event) {
    event.preventDefault();
    const nodeWrapperWelcomeLogin = document.querySelector(".login")
    nodeWrapperWelcomeLogin.classList.remove("hidden")
}
function hola(){
    let node, nodes, form, title
    title = document.querySelector(".subtitulo")
    form = document.querySelector(".form")
    nodes = document.getElementById("re-password")
    node=document.getElementById("usuario")

   if (nodes.value === "" && node.value === ""){
       title.innerHTML= "Ingresar nombre de usuario y contraseña"
       node.classList.add("rojo")
       nodes.classList.add("rojo")
       return false;
    }else if (nodes.value === "")  {
        title.innerHTML= "Ingresar contraseña"
        node.classList.remove("rojo")
        nodes.classList.add("rojo")
        return false;
    }else if (node.value === "")  {
        title.innerHTML= "Ingresar nombre de usuario"
        node.classList.add("rojo")
        nodes.classList.remove("rojo")
        return false;
    }else{
      return true;
    }
    
}

function login(event) {
    event.preventDefault()
    let mensaje, inputs
    inputs = document.querySelectorAll(".input")
    mensaje = document.querySelector(".mensaje")
    console.log("hola");

    const nodeUser = document.getElementById("usuario");
    const nodePassword = document.getElementById("re-password");

    if (hola()) {
        const dataRequest = {
            action: "login",
            email: nodeUser.value,
            password: nodePassword.value
        };

        console.log(dataRequest);
        fetch(location.origin + "/tienda/ajax/request_Fetch.php", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dataRequest)
        })
            .then((response) => {
                if (response.ok) {
                    console.log("Comunicación con el servidor ok.");
                    return response.text();
                } else {
                    console.log("Parece que no hay comunicación con el servidor.");
                    throw Error(response.status);
                }
            })
            .then((body) => {
                try {
                    console.log("Convirtiendo estructura JSON to Javascript.");
                    return JSON.parse(body);
                } catch {
                    console.error("La información recibida no es una estructura JSON");
                    throw Error(body);
                }
            })
            .then((dataReturn) => {
                console.log("dataReturn:", dataReturn);
                if (dataReturn['result'] === false) {
                    mensaje.innerHTML = "La contraseña o el usuario son incorrectas."
                    inputs.forEach(input => {
                        input.value = ""
                        input.addEventListener('click', function (event) {
                            if (event.target === input) {
                                mensaje.innerHTML = " "
                            }

                        })
                    });
                } else {
                    location.reload();
                }


            })
            .catch((error) => {
                console.log("La información recibida es la siguiente:");
                console.error(error);
            });
    }

}

function logout(event) {
    event.preventDefault();

    const dataRequest = {
        action: "logout"
    };

    console.log(dataRequest);
    fetch(location.origin + "/tienda/ajax/request_Fetch.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dataRequest)
    })
        .then((response) => {
            if (response.ok) {
                console.log("Comunicación con el servidor ok.");
                return response.text();
            } else {
                console.log("Parece que no hay comunicación con el servidor.");
                throw Error(response.status);
            }
        })
        .then((body) => {
            try {
                console.log("Convirtiendo estructura JSON to Javascript.");
                return JSON.parse(body);
            } catch {
                console.error("La información recibida no es una estructura JSON");
                throw Error(body);
            }
        })
        .then((dataReturn) => {
            console.log("typeof dataReturn:", typeof dataReturn);
            console.log("dataReturn:", dataReturn);
            if (dataReturn) {
                location.reload();
            }


        })
        .catch((error) => {
            console.log("La información recibida es la siguiente:");
            console.error(error);
        });
}

