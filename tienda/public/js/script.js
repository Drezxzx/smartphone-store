const nuevoDiv = document.createElement('div');
window.onload = function () {
    let nodeStart
    nodeStart = document.querySelector(".shop");
    nodeStart.onclick = shoppingCar;
    let  node = document.querySelectorAll(".contene")
    node[0].onclick=addProducts
    node[1].onclick=addProducts
    node[2].onclick=addProducts
    node[3].onclick=addProducts
   
}

function shoppingCar(){
   let node = document.querySelector(".compras")
    let nodes= document.querySelector(".shop")
    node.classList.remove("hidden")
    nodes.onclick = hiddenShoping
}

function hiddenShoping(){
   let  node = document.querySelector(".compras")
   let nodes= document.querySelector(".shop")
    node.classList.add("hidden")
    nodes.onclick = shoppingCar
}
let productosAgregados = []
let total = 0
function addProducts(event) {
    let nodes = document.querySelector(".total")
    let node = document.querySelector(".in");
    if (event.target.classList.contains("boton")) {
      var contenedor = event.target.parentElement;
      var titulo = contenedor.querySelector(".titulo").textContent;
       let precio = contenedor.querySelector(".precio")
       let nuevoDiv = document.createElement('div');
       nuevoDiv.classList.add('miClase');
       nuevoDiv.textContent = ` ${precio.innerText}  ${titulo}`;
       total += parseInt(precio.innerText);
       nodes.innerText = "Total = "  + total
       
       node.appendChild(nuevoDiv)
      }
    }
   
  function showUser(){
    let cerrar = document.getElementById("Cerrar")
    let node = document.querySelector(".usuarios")
    let nodes = document.querySelector(".rojos")
     nodes.classList.remove("hidden")
     node.onclick = hidden
     cerrar.onclick = ereaseUser
  }

  function ereaseUser(){
    localStorage.removeItem("usuario")
  }

  function hidden(){
    let node = document.querySelector(".usuarios")
    let nodes = document.querySelector(".rojos")
    nodes.classList.add("hidden")
    node.onclick = showUser
  }