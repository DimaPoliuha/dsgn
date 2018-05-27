$(document).ready(function () {
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        transitionDuration: '0.2s',
        // fitWidth: true,
        // horizontalOrder: true
    });
});