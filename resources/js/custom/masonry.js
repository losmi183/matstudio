$( document ).ready(function() {

    // Select grid container
    var grid = document.querySelector('.grid');
    // Select all cells
    var gridItems = document.querySelectorAll('.grid-item');
    
    // init Masonry
    var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        // gutter: 10
    });
    
    // Reload gallery when change screen width, using imagesLoaded function from imagesloaded library
    imagesLoaded( grid ).on( 'progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
    });  

    $('.grid-item').click(function() {
        $(this).toggleClass('grid-item--width2');
        msnry.layout();
    });

});


