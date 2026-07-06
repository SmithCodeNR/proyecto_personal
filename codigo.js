//declarando variables
let CajaLoginRegistro=document.querySelector(".CajaLoginRegistro")
let FormularioLogin=document.querySelector(".FormularioLogin")
let FormularioRegistro=document.querySelector(".FormularioRegistro")
let CajaTraseraLogin=document.querySelector(".CajaTraseraLogin")
let CajaTraseraRegistro=document.querySelector(".CajaTraseraRegistro")


function AnchoPagina(){
    if(window.innerWidth>850){
        CajaTraseraLogin.style.display = "block";
        CajaTraseraRegistro.style.display = "block";
    }
    else{
        CajaTraseraRegistro.style.display = "block";
        CajaTraseraRegistro.style.opacity = "1";
        CajaTraseraLogin.style.display = "none"
        FormularioLogin.style.display = "block"
        FormularioRegistro.style.display = "none"
        CajaLoginRegistro.style.left = "0px"
    }
}
function InicioSesion(){
    if(window.innerWidth>850){
        FormularioRegistro.style.display = "none";
        CajaLoginRegistro.style.left = "10px";
        FormularioLogin.style.display ="block";
        CajaTraseraRegistro.style.opacity ="1";
        CajaTraseraLogin.style.opacity ="0";
    }
    else{
        FormularioRegistro.style.display = "none";
        CajaLoginRegistro.style.left = "0px";
        FormularioLogin.style.display ="block";
        CajaTraseraRegistro.style.display ="block";
        CajaTraseraLogin.style.display ="none";
    }
}
function Registro(){
    if(window.innerWidth>850){
        FormularioRegistro.style.display = "block";
        CajaLoginRegistro.style.left = "410px";
        FormularioLogin.style.display ="none";
        CajaTraseraRegistro.style.opacity ="0";
        CajaTraseraLogin.style.opacity ="1";
    }
    else{
        FormularioRegistro.style.display = "block";
        CajaLoginRegistro.style.left = "0px";
        FormularioLogin.style.display ="none";
        CajaTraseraRegistro.style.display ="none";
        CajaTraseraLogin.style.display ="block";
        CajaTraseraLogin.style.opacity ="1";
    }
    
}
document.getElementById("botonRegistrarse").addEventListener("click", Registro)
document.getElementById("botonInicioSesion").addEventListener("click", InicioSesion)
window.addEventListener("resize", AnchoPagina)
AnchoPagina()