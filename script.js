// Mostrar hora local
document.getElementById('time').textContent = new Date().toLocaleString();

// Scroll suave
function scrollInfo() {
  document.getElementById('infoBox').scrollIntoView({ behavior: 'smooth' });
}
window.onload = function(){
  let imagenes =["imagenes/img1.png","imagenes/img2.png","imagenes/img3.png"];
  let indice = 0;
  let imgs = document.getElementById("imgs");

  this.setInterval(()=> {
    indice = (indice+1) % imagenes.length;
    imgs.src = imagenes[indice];
  },5000);

  const saludo = document.getElementById("saludo");
  const inpNombre = document.getElementById("nombrecito");
  const btnSaludo = document.getElementById("btnSaludo");

  btnSaludo.addEventListener("click",function(){
    const nombre = inpNombre.value.trim();

    if(nombre === ""){
      saludo.textContent = "¡Hola Anónimo, Bienvenido a mi Servidor!";
    }else{
      saludo.textContent = `¡Hola ${nombre}, Bienvenido a mi Servidor!`;
    }
  })
}