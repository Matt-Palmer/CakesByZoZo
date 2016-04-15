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

var hn = $('.headerNav');

$(window).scroll(function(){
    if( $(this).scrollTop() > 100){
        hn.addClass('header-nav-scrolled');
    }
    else{
        hn.removeClass('header-nav-scrolled');
    }
})

