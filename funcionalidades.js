
var tagTabla = document.querySelector('section #tablaDeCovid #datosCovid');
var addRegistro = document.getElementById('agregarRegistro');
var resAddRegistro = document.querySelector('section .cajaFormulario form .resFormPais');

document.addEventListener('DOMContentLoaded', generarAddRegistro);
window.addEventListener('load',generarTabla);
//document.addEventListener('DOMContentLoaded', generarTabla);
//addRegistro.addEventListener('click',agregarRegistro);
function generarAddRegistro(){
    addRegistro.addEventListener('click',agregarRegistro);
}

function resetFormulario(){
    let nombre = document.getElementById('nombrePais');
    let poblacion = document.getElementById('poblacion');
    let confirmados = document.getElementById('nConfirmados');
    let fallecidos = document.getElementById('nFallecidos');
    let curados = document.getElementById('nCurados');
    nombre.value = '';
    poblacion.value = '';
    confirmados.value = '';
    fallecidos.value = '';
    curados.value = '';
}

function agregarRegistro(){
    resAddRegistro.innerHTML ='';
   
    let nombre = document.getElementById('nombrePais').value;
    let poblacion = document.getElementById('poblacion').value;
    let confirmados = document.getElementById('nConfirmados').value;
    let fallecidos = document.getElementById('nFallecidos').value;
    let curados = document.getElementById('nCurados').value;

    let datosAEnviar = 'nombrePais='+nombre+'&poblacion='+poblacion+'&nConfirmados='+confirmados+'&nFallecidos='+fallecidos+
                        '&nCurados='+curados;
    console.log(datosAEnviar);
    
    let xhttp = new XMLHttpRequest();

    xhttp.open("POST","validarRegistro.php",true);

    xhttp.onreadystatechange = function(){
        if(xhttp.status == 200 && xhttp.readyState == 4){
            let mensaje = xhttp.responseText;
            resAddRegistro.innerHTML += mensaje;
            generarTabla();
            resetFormulario();
        }
    }
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(datosAEnviar);
}

function generarTabla(){
    tagTabla.innerHTML = '';
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET","datosCovid.php",true);
    
    xhttp.onreadystatechange = function(){
        if(xhttp.status == 200 && xhttp.readyState == 4){
            let mensaje = xhttp.responseText;
            tagTabla.innerHTML += mensaje;

        }

    }
    xhttp.send();
    
}