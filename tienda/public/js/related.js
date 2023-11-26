const arNameMovile = [];


window.addEventListener("load", function () {
window.addEventListener('scroll', function calculePosition() {
    const scrollY = window.scrollY;
    console.log('Posición vertical de desplazamiento:', scrollY);
if (scrollY > 300) {
    const nodeRelatedProducts = document.querySelector(".slider");
    console.log("El related funciona ------.");
    if (nodeRelatedProducts.classList.contains("hidden")) {
        getRelatedMovile();
    }

}
});


});

function getRelatedMovile(event) {
    const h1Hidden = document.querySelector(".h1black")
    const nodeRelatedProducts = document.querySelector(".slider");
    const nodeNameMovile = document.querySelector(".nombre-movile");
    arNameMovile.nombre = nodeNameMovile.innerHTML;
    let name = arNameMovile.nombre;
    const firstLetters = (arNameMovile.nombre.length + 5) - arNameMovile.nombre.length;
    console.log(firstLetters);
    name = name.slice(0, firstLetters);
    console.log(name);

    const dataRequest = {
        action: "getRelatedmovile",
        wordForSearch: name
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
                console.log("Convirtiendo estructura JSON a JavaScript.");
                return JSON.parse(body);
            } catch {
                console.error("La información recibida no es una estructura JSON");
                throw Error(body);
            }
        })
        .then((dataReturn) => {
            h1Hidden.classList.remove("hidden");
            nodeRelatedProducts.classList.remove("hidden")
            console.log("typeof dataReturn:", typeof dataReturn);
            console.log("dataReturn:", dataReturn);
            console.log(nodeNameMovile.innerHTML);
            setTimeout(() => {
                h1Hidden.classList.remove("hidden");
                nodeRelatedProducts.classList.remove("hidden");
                nodeRelatedProducts.classList.add("show"); 
            }, 200); 
            console.log("typeof dataReturn:", typeof dataReturn);
            console.log("dataReturn:", dataReturn);
            console.log(nodeNameMovile.innerHTML);
            dataReturn["data"].forEach(resultado => {
                if (resultado['nameSmartphone'] != nodeNameMovile.innerHTML) {
                    console.log(dataReturn["data"]);
                    nodeRelatedProducts.innerHTML += `<a href="detailproducts.php?id_moviles=${resultado["idPSmarphone"]}"><div class="imagenes"> <div class="contene"> <span class="precio"></span><img class="width100" src="${resultado['imgUrl']}"><span class="precio">${resultado['price1']}€</span><span class="titulo">${resultado['nameSmartphone']}</span><button class="boton">Añadir al carrito</button></div></div></a> `;
                }
            });
        })
        .catch((error) => {
            console.log("La información recibida es la siguiente:");
            console.error(error);
        });
}
