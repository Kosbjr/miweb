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

}