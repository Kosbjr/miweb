// Mostrar hora local
document.getElementById('time').textContent = new Date().toLocaleString();

// Scroll suave
function scrollInfo() {
  document.getElementById('infoBox').scrollIntoView({ behavior: 'smooth' });
}
