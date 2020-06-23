
var tagTabla = document.querySelector('section #tablaDeCovid #datosCovid');

(function generarTabla(){

    var xhttp = new XMLHttpRequest();

    xhttp.open("GET","datosCovid.php",true);
    
    xhttp.onreadystatechange = function(){
        if(xhttp.status == 200 && xhttp.readyState == 4){
            var mensaje = xhttp.responseText;
            tagTabla.innerHTML += mensaje;
            alert("hola");

        }

    }
    xhttp.send();
    
})();