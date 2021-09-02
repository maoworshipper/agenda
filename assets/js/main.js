// Acciones Menu

window.addEventListener("load",()=>{

    let insertar = document.getElementById("btnIngresar");
    insertar.addEventListener("click", (e) => {
        e.preventDefault();
        document.getElementById("mensaje-inicial").style.display = "none";
        document.getElementById("insertar").style.display = "block";
        document.getElementById("consultar").style.display = "none";
    }, false);

    let consultar = document.getElementById("btnConsultar");
    consultar.addEventListener("click", (e) => {
        e.preventDefault();
        document.getElementById("mensaje-inicial").style.display = "none";
        document.getElementById("insertar").style.display = "none";
        document.getElementById("consultar").style.display = "block";

        consultarInfo();
    }, false);

});


// Procesar acciones

function insertar() {

    let nombres=document.getElementById("nombres").value;
    let apellidos=document.getElementById("apellidos").value;
    let direccion=document.getElementById("direccion").value;
    let teltrabajo=document.getElementById("teltrabajo").value;
    let telmovil=document.getElementById("telmovil").value;
    let email=document.getElementById("email").value;
   
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      if(xhttp.responseText==1){
		    document.getElementById("respuestas").innerHTML = "Contacto Guardado correctamente.";	
            document.getElementById("insertarForm").reset();
		}
		else{
            document.getElementById("respuestas").innerHTML = "Lo sentimos, no fue posible guardar la información.";	
		}
    }
  };
  xhttp.open("POST", "controllers/insert.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nombres="+nombres+"&apellidos="+apellidos+"&direccion="+direccion+"&teltrabajo="+teltrabajo+"&telmovil="+telmovil+"&email="+email);

}

function consultarInfo() {
 
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {

		    document.getElementById("consultar").innerHTML = xhttp.responseText;	
		
    }
  };
  xhttp.open("GET", "controllers/getdata.php");
  xhttp.send();

}