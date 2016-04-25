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


function disableLightboxScroll(){
    var lightbox = document.getElementById('lightbox');

    lightbox.addEventListener('touchmove', function(e){
        e.preventDefault();
        
        console.log('scroll disabled');
    }, false);
    
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

    
    $('.submenu-container a').each(function highlightSelectedListItem(index) {
        if(this.href.trim() == window.location){
            $(this).addClass("selected");

            console.log("class added")
        }
            
    });

    $('.gallery-submenu-container a').each(function highlightSelectedGalleryListItem(index) {
        if(this.href.trim() == window.location){
            $(this).addClass("selected");
            
            if(this.id == 'gallery-choices'){
                $('#gallery').addClass('selected');
            }

            console.log("class added")
        }
            
    });
    
    var imgCount = $('.imgContainer img');
    
    var galleryCount = imgCount.length;

    imgCount.each(function openLightbox(index, value){
        $(this).click(function openLightbox(event){
        
            var imager_src = $(this).attr('src');

            if ($('#lightbox').length > 0){

                
                $('#content').html('<img src="' + imager_src + '" />');
                
                $('.img-info-container').html('<p id="img-info">Image ' + index + ' of ' + galleryCount + '</p>');

                $('.lightbox-container').show();

                disableLightboxScroll();
                
            }else{
                var lightbox = '<div id="lightbox" class="lightbox-container">' +
                                '<p>Click to close</p>' +
                                '<div id="content" class="lightbox-image-container">' + 
                                '<img src="images/BirthdayCake1.jpg" alt="image">' +
                                '</div>' +
                                '</div>';

                $('body').append(lightbox);
            }
        
        });
    });
    
    $('.imgContainer img').each(function(index){
        //console.log(index + ': ' + $(this).attr('src'));
        
        $('.lightbox-container .lightbox-image-container').html('<p>Image ' + index + ' of ' + index.length + '</p>');
    });
    
    $('#lightbox').on('click', function(){
        $('#lightbox').hide();
    });
     
    
});




