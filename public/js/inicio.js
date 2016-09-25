$(document).ready(function(){
    //cargarSlide();
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