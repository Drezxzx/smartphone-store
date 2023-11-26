window.addEventListener( "load", function() {
    console.log( "Tienes acceso a todos los recursos ------." );
    const nodeButtonLogin = document.querySelector(".boton-primario")
    console.log(nodeButtonLogin);
     nodeButtonLogin.addEventListener( "click", createUser);
    if (nodeLogin) {
        nodeLogin.addEventListener( "click", showFormLogin )
    }
    if (logOut) {
        logOut.addEventListener("click", logout)  
    }
});
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
function createUser(event) {
    let mensaje, inputs, node
   inputs = document.querySelectorAll(".input")
    mensaje = document.querySelector(".mensaje")
    console.log("hola");
    console.log(mensaje);
   
        const nodeUser   = document.getElementById( "usuario" );
        const nodePassword   = document.getElementById( "re-password" );
       
    if ( hola()) {
        const dataRequest = {
            action      : "create",
            email       : nodeUser.value,
            password    : nodePassword.value
        };

        console.log( dataRequest );
        fetch(  location.origin + "/tienda/ajax/request_Fetch.php", {
            method : 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify( dataRequest )
        })
            .then( ( response ) => {
                if ( response.ok ) {
                    console.log( "Comunicación con el servidor ok." );
                    return response.text();
                } else {
                    console.log( "Parece que no hay comunicación con el servidor." );
                    throw Error( response.status );  
                } 
            })
            .then( ( body ) => {
                try {
                    console.log( "Convirtiendo estructura JSON to Javascript." );
                    return JSON.parse( body );
                } catch {
                    console.error( "La información recibida no es una estructura JSON" );
                    throw Error( body );
                }
            })
            .then( ( dataReturn ) => {
                console.log( "dataReturn:", dataReturn ); 
                const dataRequest2 = {
                    action      : "login",
                    email       : nodeUser.value,
                    password    : nodePassword.value
                };
                login(dataRequest2);
                if (dataReturn["result"]){
                    location.href="../main.php?islogin=true"
                } 
            })
            .catch( (error) => {
                    nodeUser.classList.add("rojo")
                    console.log( "La información recibida es la siguiente:" );
                    console.error( error );
                    mensaje.innerHTML="Ya existe este nombre de usuario"
            });
        }
        
}

function login(dataRequest2) {
    let mensaje, inputs
   inputs = document.querySelectorAll(".input")
    mensaje = document.querySelector(".mensaje")
    console.log("hola");
   
        const nodeUser   = document.getElementById( "usuario" );
        const nodePassword   = document.getElementById( "re-password" );
       
    if ( hola()) {
        const dataRequest2 = {
            action      : "login",
            email       : nodeUser.value,
            password    : nodePassword.value
        };

        console.log( dataRequest2 );
        fetch(  location.origin + "/tienda/ajax/request_Fetch.php", {
            method : 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify( dataRequest2 )
        })
            .then( ( response ) => {
                if ( response.ok ) {
                    console.log( "Comunicación con el servidor ok." );
                    return response.text();
                } else {
                    console.log( "Parece que no hay comunicación con el servidor." );
                    throw Error( response.status );  
                } 
            })
            .then( ( body ) => {
                try {
                    console.log( "Convirtiendo estructura JSON to Javascript." );
                    return JSON.parse( body );
                } catch {
                    console.error( "La información recibida no es una estructura JSON" );
                    throw Error( body );
                }
            })
            .then( ( dataReturn ) => {
                console.log( "dataReturn:", dataReturn );
           
                
            })
            .catch( (error) => {
                console.log( "La información recibida es la siguiente:" );
                console.error( error );
            });
    }
            
}