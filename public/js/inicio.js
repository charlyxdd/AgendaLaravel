var precio=0;

$(document).ready(function(){
    //cargarSlide();
    calcularPrecio();
});

function cargarSlide(){
    var slides=document.getElementsByClassName('slideItem');
    var cmdItems=document.getElementsByClassName('cmdItem');

    for(var i=1;i<slides.length;i++){
        $(slides.item(i)).css('left','100%');
    }

    setInterval(function(){
        var slide; var slideSig;
        for(var i=0;i<slides.length;i++){
            if($(slides.item(i)).hasClass('activo')){

                slide=slides.item(i);
                $(cmdItems.item(i)).removeClass('activo');
                if((i+1)<slides.length){
                    slideSig=slides.item(i+1);
                    $(cmdItems.item(i+1)).addClass('activo');
                }
                else{
                    slideSig=slides.item(0);
                    $(cmdItems.item(0)).addClass('activo');
                }

            }
        }

        $(slide).animate({
            left:'-=100%'
        },500);

        $(slide).removeClass('activo');
        $(slideSig).addClass('activo');

        $(slideSig).css('left','100%');

        $(slideSig).animate({
            left:'-=100%'
        },500);

    },5000);
}

function calcularPrecio(){
    precio=parseInt($(document.getElementsByClassName('variable').item(0)).children('span').html());

    var chkNotas=$('#chkNotas');
    var chkPersonalizable=$('#chkPersonalizable');
    var chkPlanificacion=$('#chkPlanificacion');
    var chkCalif=$('#chkCalif');


    chkCalif.change(function(){
        if(chkCalif.prop('checked')){
            precio+=15;
        }
        else{
            precio-=15;
        }

        $(document.getElementsByClassName('variable').item(0)).children('span').html(precio);

    });

    chkNotas.change(function(){
        if(chkNotas.prop('checked')){
            precio+=10;
        }
        else{
            precio-=10;
        }

        $(document.getElementsByClassName('variable').item(0)).children('span').html(precio);
    });

    chkPersonalizable.change(function(){
        if(chkPersonalizable.prop('checked')){
            precio+=5;
        }
        else{
            precio-=5;
        }
        $(document.getElementsByClassName('variable').item(0)).children('span').html(precio);
    });


    chkPlanificacion.change(function(){
        if(chkPlanificacion.prop('checked')){
            precio+=15;
        }
        else{
            precio-=15;
        }
        $(document.getElementsByClassName('variable').item(0)).children('span').html(precio);
    });

}