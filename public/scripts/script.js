$(document).ready(function () {

    var $grid = $('.masonry').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        transitionDuration: '0.2s',
        percentPosition: true,
        stagger: 30,
        // fitWidth: true,
    });

    $grid.on( 'click', '.grid-item', function() {
        // change size of item via class
        $( this ).toggleClass('grid-item--gigante');
        // trigger layout
        $grid.masonry();
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