/*function toggle(){
    var image = document.getElementById('cakeImage');
    var hid = (image.style.visibility !== 'visible');
    image.style.visibility = (hid) ? 'visible' : 'hidden'; //if 'hid' equals true then set the visibility to visible else set to hidden
    image.style.height = (hid) ? '10%' : '0px';
    
    console.log(hid);
}*/

/*function submenuToggle(e){
    e.preventDefault();
    var menu = document.getElementById('menu');
    var submenu = document.getElementById('submenu');
    var hid = (submenu.style.display !== 'block');
    submenu.style.display = (hid) ? 'block' : 'none';
    menu.style.backgroundColor = (hid) ? 'rgb(65, 167, 216)' : 'rgb(233,233,233)';
    menu.style.color = (hid) ? 'white' : 'rgb(65, 167, 216)';
    console.log(hid);
}*/

document.getElementById('menu').addEventListener('click', function(e){
    e.preventDefault();
    var menu = document.getElementById('menu');
    var submenu = document.getElementById('submenu');
    var hid = (submenu.style.display !== 'inline-block');
    submenu.style.display = (hid) ? 'inline-block' : 'none';
    menu.style.backgroundColor = (hid) ? 'rgb(65, 167, 216)' : 'rgb(233,233,233)';
    menu.style.color = (hid) ? 'white' : 'rgb(65, 167, 216)';
})

var fixedMenu = document.getElementById('fixed-menu');

fixedMenu.addEventListener('touchmove', function(e){
    e.preventDefault();
}, false);

var fixedGalleryMenu = document.getElementById('fixed-gallery-menu');

fixedGalleryMenu.addEventListener('touchmove', function(e){
    e.preventDefault();
}, false);







$(document).ready(function($){

    var hn = $('.headerNav');
    
    var menuBool = false;
    
    $(window).scroll(function(){
        if( $(this).scrollTop() > 150){
            hn.addClass('header-nav-scrolled');
        }
        else{
            hn.removeClass('header-nav-scrolled');
        }
    })

    
    $('#main-gallery').click(function(event){
        event.preventDefault();
        $('.main-nav-menu li ul').toggle('slide', {direction: 'up'}, 1000);
    })
   
    $('#toggleMenu').click(function toggleMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
        console.log('slide');
    })

    $('#Back').click(function closeMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
    })
    
     $('#gallery').click(function openGalleryMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
         
        $('.gallery-submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
        console.log('slide');
    })

    $('#Back-submenu').click(function closeGalleryMenu(event){
        event.preventDefault();
        $('.gallery-submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
        
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 1000);
    })

    
    $('.submenu-container a, .main-nav-menu li a').each(function highlightSelectedListItem(index) {
        if(this.href.trim() == window.location){
            $(this).addClass("selected");

            console.log("submenu added")
        }
            
    });

    $('.gallery-submenu-container a, .main-nav-menu li ul li a').each(function highlightSelectedGalleryListItem(index) {
        if(this.href.trim() == window.location){
            $(this).addClass("selected");
            
            if(this.id == 'gallery-choices'){
                $('#gallery').addClass('selected');
                $('#main-gallery').addClass('selected');
            }

            console.log("submenu 2 added")
        }
            
    });



    if($('#size').val() === 'cupcakes'){

            $('#cupcake-heading').show();
            $('#no-cupcakes').show();

            $('#size').on('change', function cupcakeOptions(){

            if($(this).val() === 'cupcakes'){
                $('#cupcake-heading').show();
                $('#no-cupcakes').show();

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }
            }else{
                $('#cupcake-heading').hide();
                $('#no-cupcakes').hide();
            }
        })
            
    }else{
        $('#size').on('change', function cupcakeOptions(){

            if($(this).val() === 'cupcakes'){
                $('#cupcake-heading').show();
                $('#no-cupcakes').show();

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }
            }else{
                $('#cupcake-heading').hide();
                $('#no-cupcakes').hide();
            }
        })
    }








    if($('#size').val() === 'single-number'){

        $('#single-number-selection-heading').show();
        $('#single-number-option').show();

        $('#size').on('change', function singleNumberOptions(){

            if($(this).val() === 'single-number'){
                $('#single-number-selection-heading').show();
                $('#single-number-option').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }

            }else{
                $('#single-number-selection-heading').hide();
                $('#single-number-option').hide();
            }

        })

    }else{

        $('#size').on('change', function singleNumberOptions(){

            if($(this).val() === 'single-number'){
                $('#single-number-selection-heading').show();
                $('#single-number-option').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }

            }else{
                $('#single-number-selection-heading').hide();
                $('#single-number-option').hide();
            }

        })

    }






    if($('#size').val() === 'double-number'){

        $('#double-number-selection-heading').show();
        $('#double-number-option-one').show();
        $('#double-number-option-two').show();

        $('#size').on('change', function doubleNumberOptions(){

            if($(this).val() === 'double-number'){

                $('#double-number-selection-heading').show();
                $('#double-number-option-one').show();
                $('#double-number-option-two').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

            }else{
                $('#double-number-selection-heading').hide();
                $('#double-number-option-one').hide();
                $('#double-number-option-two').hide();
            }

        })

    }else{

        $('#size').on('change', function doubleNumberOptions(){

            if($(this).val() === 'double-number'){

                $('#double-number-selection-heading').show();
                $('#double-number-option-one').show();
                $('#double-number-option-two').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

            }else{
                $('#double-number-selection-heading').hide();
                $('#double-number-option-one').hide();
                $('#double-number-option-two').hide();
            }

        })
    }



    var t = setInterval(function(){
        console.log('function called')
        $('.carousel ul').animate({marginLeft: -1140},2000,function(){
            $(this).find('li:last').after($(this).find('li:first'));
            $(this).css({marginLeft:0});
            console.log('scrolling called')
        })
    }, 5000);

    
});




