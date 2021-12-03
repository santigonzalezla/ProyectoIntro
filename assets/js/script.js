//Ejecutando funciones
document.getElementById("btInicio").addEventListener("click", iniciarSesion);
document.getElementById("btRegistro").addEventListener("click", register);
//document.getElementById("btLogin").addEventListener("click", Validar);
window.addEventListener("resize", anchoPage);

//Declarando variables
var user = document.getElementById("user");
var pass = document.getElementById("pw");
var formLogin = document.querySelector(".formLogin");
var formRegis = document.querySelector(".formRegistro");
var contLogin = document.querySelector(".contenedorLogin");
var cajatraseraLogin = document.querySelector(".cajatraseraLogin");
var cajatraseraRegistro = document.querySelector(".cajatraseraRegistro");

//FUNCIONES
function anchoPage()
{
    if (window.innerWidth > 850)
    {
        cajatraseraRegistro.style.display = "block";
        cajatraseraLogin.style.display = "block";
    }
    else
    {
        cajatraseraRegistro.style.display = "block";
        cajatraseraRegistro.style.opacity = "1";
        cajatraseraLogin.style.display = "none";
        formLogin.style.display = "block";
        contLogin.style.left = "0px";
        formRegis.style.display = "none";   
    }
}
anchoPage();

function iniciarSesion()
{
    if (window.innerWidth > 850)
    {
        formLogin.style.display = "block";
        contLogin.style.left = "10px";
        formRegis.style.display = "none";
        cajatraseraRegistro.style.opacity = "1";
        cajatraseraLogin.style.opacity = "0";
    }
    else
    {
        formLogin.style.display = "block";
        contLogin.style.left = "0px";
        formRegis.style.display = "none";
        cajatraseraRegistro.style.display = "block";
        cajatraseraLogin.style.display = "none";
    }

}

function register()
{
    if (window.innerWidth > 850)
    {
        formRegis.style.display = "block";
        contLogin.style.left = "410px";
        formLogin.style.display = "none";
        cajatraseraRegistro.style.opacity = "0";
        cajatraseraLogin.style.opacity = "1";
    }
    else
    {
        formRegis.style.display = "block";
        contLogin.style.left = "0px";
        formLogin.style.display = "none";
        cajatraseraRegistro.style.display = "none";
        cajatraseraLogin.style.display = "block";
        cajatraseraLogin.style.opacity = "1";
    }
}

/*
function Validar()
{
    if(user.value=="")
    {
        alert("El campo Nombre esta vacio");
    }
    else
    {
        if(pass.value=="")
        {
        alert("El campo Passwd esta vacio");
        }
        else
        {
            if(user.value=="Santiago" && pass.value=="12345")
            {
                alert("Bienvenido");
                window.open("pagina1.html", "_blank");                
            }
        }
    } 
}
*/