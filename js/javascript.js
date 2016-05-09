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


function validateForm(){
    var requiredField = document.forms['enquiry-form']['required'];
    
    console.log(requiredField.length);
    
    for(var i = 0; i < requiredField.length; i++){
        if(requiredField[i].value == "" || requiredField[i].value == null){
            console.log(requiredField[i].value + " is empty");
            
            
            
            if(requiredField[i].classList.contains('requiredField')){
                console.log('requiredField has already been added');
            }else{
                requiredField[i].className += ' requiredField';
            }
            
        }
        else{
            
            if(requiredField[i].classList.contains('requiredField')){
                requiredField[i].className.replace( /(?:^|\s)requiredField(?!\S)/g , '' );
                console.log('requiredField is still there');
            }else{
                console.log('requiredField has been removed');
            }
            
            console.log(requiredField[i].value + " something is in there");
        }
    }
    
    return false;
}




$(document).ready(function($){

    var hn = $('.headerNav');

    $(window).scroll(function(){
        if( $(this).scrollTop() > 100){
            hn.addClass('header-nav-scrolled');
        }
        else{
            hn.removeClass('header-nav-scrolled');
        }
    })

    $('#main-gallery').click(function(event){
        event.preventDefault();
        $('.main-nav-menu li ul').toggle('slide', {direction: 'up'}, 1000);
        console.log('slide');
    })

    $('#toggleMenu').click(function toggleMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 10);
        console.log('slide');
    })

    $('#Back').click(function closeMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 10);
    })
    
     $('#gallery').click(function openGalleryMenu(event){
        event.preventDefault();
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 10);
         
        $('.gallery-submenu-container ul').toggle('slide', {direction: 'right'}, 10);
        console.log('slide');
    })

    $('#Back-submenu').click(function closeGalleryMenu(event){
        event.preventDefault();
        $('.gallery-submenu-container ul').toggle('slide', {direction: 'right'}, 10);
        
        $('.submenu-container ul').toggle('slide', {direction: 'right'}, 10);
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



 
    
});




