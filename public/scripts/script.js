$(document).ready(function () {
    // $('.grid').masonry({
    //     itemSelector: '.grid-item',
    //     columnWidth: 166.6666,
    //     // percentPosition: true,
    //     transitionDuration: '0.2s',
    //     // fitWidth: true,
    //     // horizontalOrder: true
    // });

    $('.masonry').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        transitionDuration: '0.2s',
        gutter: 20,
        // fitWidth: true,
    });
      

    var slideout = new Slideout({
        'panel': document.getElementById('main'),
        'menu': document.getElementById('menu-mob'),
        'side': 'right'
    });

    $('.js-slideout-toggle').on('click', function(){
        slideout.toggle();
    });

    $('.text-menu').on('click', function (){
        slideout.toggle();
    });
});




/* Menu */

// for(var i = 0; i < 4; i++){
//     var ptr = dom.classes('text-menu')[i];
//     ptr.addEventListener( 'click', iconMenu )
//     ptr.addEventListener('click', function () {
//         slideout.toggle();
//     });
// }