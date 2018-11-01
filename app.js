//console.log("Hola");

var formulario = document.getElementById('formulario');

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    //console.log("Me hiciste clic");
    var datos = new FormData(formulario);
    //console.log(datos);
    fetch('addUser.php',{
        method: 'POST',
        body : datos
    })
    .then(res => res.json())
    .then(mensaje =>{
        console.log(mensaje)
    })
    //Falta crear el metodo para limpiar los input aqui
})