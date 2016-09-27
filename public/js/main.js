var storage;
var dominio="http://localhost:8080/AgendaLaravel/public/"
$(document).ready(function(){
    iniciarApp();
});

function iniciarApp(){
   /* var a;
    var u;

    /*********************************\
     * obtener header

    a= $.ajax({
        url:conf.vistas + conf.header
    });

    a.done(function(data){
        $('#header').html(data);
    });

    a.fail(function(){
        $('#header').html("Ha ocurrido un error al cargar informaci&oacuten");
    });

    /*****************************\
     * Determinar storage y cuerpo

    u=determinarStorage();

    a= $.ajax({
        url:conf.vistas + u
    });

    a.done(function(data){
        $('#cssAgregado').attr('href',conf.css + 'inicio.css');
        $('#cuerpo').html(data);
    });

    a.fail(function(){
        $('#cuerpo').html("Ha ocurrido un error al cargar informaci&oacuten");
    });

    /*********************************\
     * obtener footer


    a= $.ajax({
        url:conf.vistas + conf.footer
    });

    a.done(function(data){
        $('#footer').html(data);
    });

    a.fail(function(){
        $('#footer').html("Ha ocurrido un error al cargar informaci&oacuten");
    });


    /*******************\
     * Listeners
     */



    $('#cmdAcceso').click(function(){
        location.href='login';
    });
}


function determinarStorage(){
    if(localStorage.getItem('sesion')==null && sessionStorage.getItem('sesion')==null){
        return "inicio.html";

    }
    else{
        ////Borrado de variables guardadas
        if(localStorage.getItem('sesion')==null){
            storage=sessionStorage;
        }
        else{
            storage=localStorage;
        }

        return "home.html";
    }
}