$(function() {
    $('ul.pagination').hide();
    // For placing grid-items 
    var $container = $(".grid");
    // Selecting all a.link elements from pagination
    var $list = $('.page-item').not('.disabled').not('.active').not(":last").find( "a" );

    console.log($list);

    // Number of a.link elements
    var n = $list.length;
    var i = 0;

    var userScrolled = false;

    $(window).scroll(function() {
        userScrolled = true;
    });

    setInterval(function() {
        if (userScrolled) {

            if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
            
            if(i < n) {                    
                $.get($list[i], function(response) {
    
                    var newItems = $(response).find(".grid-item")
            
                    newItems.each(function(index, element) {
                        // console.log(element);
                        $container.append(element);
                    });
                    // increment i 
                    i++;
       
                        /*
                        * Init Masonry again after loading new items
                        */
                        // Select grid container
                        var grid = document.querySelector('.grid');
                        // Select all cells
                        var gridItems = document.querySelectorAll('.grid-item');
                        
                        // init Masonry
                        var msnry = new Masonry( grid, {
                            itemSelector: '.grid-item',
                            columnWidth: '.grid-sizer',
                            percentPosition: true,
                            horizontalOrder: true
                            // gutter: 10
                        });
                        
                        // Reload gallery when change screen width, using imagesLoaded function from imagesloaded library
                        imagesLoaded( grid ).on( 'progress', function() {
                            // layout Masonry after each image loads
                            msnry.layout();
                        });
                        
    
                        // First remove old event listeners from all grid-items
                        $(".grid-item").off("click");
                        // Add new event listeners
                        $('.grid-item').click(function() {
                            $(this).toggleClass('grid-item--width2');
                            msnry.layout();
                        });
                        // End of init grid section
                
                }); // End of ajax call for nex pagination page load 
            } // End of If < n
            


        } // End of if


            userScrolled = false;
        }
    }, 400);

    // // When scroll to bottom of screen Load items
    // $(window).scroll(function() {
        
    // }); // End of window scrool

}); // JQuery document ready