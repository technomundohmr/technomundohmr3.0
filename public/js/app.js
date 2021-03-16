const botonCopy = document.getElementById('botonCopy');
const enlaceCopy = document.getElementById('enlace');
const alerta = document.getElementById('alerta');

botonCopy.addEventListener('click', function(){
    enlaceCopy.focus();
    document.execCommand('selectAll');
    document.execCommand('copy');
    alerta.className = "alert alert-info alert-dismissible fade show";
    setTimeout(()=> alerta.className="alert alert-info alert-dismissible fade show d-none",3000);
})