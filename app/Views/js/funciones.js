function registrarse(){

}

function singIn() {

    let usuario=document.getElementById("nombre").value;
    let email=document.getElementById("correo").value;
    let password=document.getElementById("contraseña").value;
    let clase=document.getElementById("clase").value;
    
    $.ajax({
        url: '../app/controllers/singIn.php',
        type: 'POST',
        data: {
            usuario:usuario,
            email:email,
            password:password,
            clase:clase
            },
        dataType:'text',
        success: function(respuesta) {
            alert("ok");
            alert(respuesta);
            
            $("#registro").modal('hide');
            $("#form1").modal('show');
        },
        error: function() {
            console.error("Error al registrarse");
            console.log(error)
            alert("fail");
        }
    });
}


function logIn() {

    let email=document.getElementById("email").value;
    let password=document.getElementById("contra").value;
    let usuario=document.getElementById("usuario").value;

    if(email!=""||password!=""||usuario!=""){
    $.ajax({
        url: '../app/controllers/logIn.php',
        type: 'POST',
        data: {
            email:email,
            password:password,
            },
        dataType:'text',
        success: function($data) {
            //alert($usuario);
            alert("ok");
            
        },
        error: function() {
            alert("No es posible iniciar sesion");
            
        }
    });
}else{
    alert("El usuario,email y contraseña son campos obligarorios")
}
}

function showMensage() {

    $.ajax({
        url: '../app/controllers/menssage.php',
        type: 'POST',
        data: {},
        dataType:'text',
        success: function(respuesta) {
           
        },
        error: function() {
            console.error("No es posible completar la operación");
        }
    });
}
    function myFunction(event){
        
        document.getElementById("myDropdown").classList.toggle("show");
        if (!event.target.matches('.dropbtn')){
            
            var dropdowns = document.getElementsByClassName("dropdown-content2");
            var i;
            
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }