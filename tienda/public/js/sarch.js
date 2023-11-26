window.addEventListener("load", function () {
    const nodesarch = document.getElementById("button-sarch");
    const nodeBarraBuscar = document.querySelector(".barra-buscar");
    nodeBarraBuscar.addEventListener('input', sarch )
});

function sarch(event) {
    
    let nodeResutado = document.querySelector(".resultados-busqueda");
    nodeResutado.innerHTML = "";
    const nodeBarraBuscar = document.querySelector(".barra-buscar");
        if (nodeBarraBuscar.value.trim() === "") {
            nodeResutado.classList.add("hidden");
            nodeResutado.innerHTML = "";
        } else {
            nodeResutado.classList.remove("hidden");
            const dataRequest = {
                action: "search",
                wordForSearch: nodeBarraBuscar.value 
            };
            console.log(dataRequest);
            fetch(location.origin + "/v2 - copia/ajax/request_Fetch.php", {
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
                    if (dataReturn["result"]) {
                        dataReturn["data"].forEach(resultado => {
                            console.log(resultado);
                            nodeResutado.innerHTML += `<div class="resultado-div"><a class='resultado' href="detailproducts.php?id_moviles=${resultado["idPSmarphone"]}">
                                <div class="img-result"><img class="imgWidth100" src="${resultado["imgUrl"]}"></div>
                                <div class="detalle"><p class="text-div">${resultado["nameSmartphone"]}</p><p class="text-div">${resultado["price1"]}€</p></div></a>
                            </div>`;
                        });

                        let positionBarraBuscar = nodeBarraBuscar.getBoundingClientRect();
                        if (positionBarraBuscar) {
                            nodeResutado.style.top = (positionBarraBuscar.top + positionBarraBuscar.height) + "px";
                            nodeResutado.style.left = positionBarraBuscar.left + "px"; 
                            nodeResutado.style.width = positionBarraBuscar.width + "px"; 
                        }
                    } 
              
                        
                    if (!nodeResutado.classList.contains("hidden")) {
                        document.addEventListener('click', function (event) {
                            if (event.target !== this) {
                                nodeResutado.classList.add("hidden");
                                nodeResutado.innerHTML = "";
                            }
                        });
                    }
                })
                .catch((error) => {
                    console.log("La información recibida es la siguiente:");
                    console.error(error);
                    nodeResutado.innerHTML = `<h3 class="message-search"> No hay resultados a la busqueda! </h1>`
                    
                });
        }
    
}

