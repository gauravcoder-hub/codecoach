// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});



/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

$(document).ready(function() {
    // Active Link Highlighting
    const currentPage = window.location.pathname;
    $('.navbar-nav .nav-item a').each(function() {
        const linkPath = $(this).attr('href');
        if (currentPage.includes(linkPath)) {
            $(this).parent().addClass('active');
        }
    });

    // Category Filtering
    $('.category-btn').click(function() {
        const category = $(this).data('category');
        $('.category-btn').removeClass('active');
        $(this).addClass('active');
        $('.tutorial-item').removeClass('show');
        if (category === 'all') {
            $('.tutorial-item').addClass('show');
        } else {
            $('.tutorial-item[data-category="' + category + '"]').addClass('show');
        }
    });

    // Search Functionality
    $('.form-inline').submit(function(event) {
        event.preventDefault();
        const searchTerm = $('.form-control').val().toLowerCase();
        $('.tutorial-item').each(function() {
            const title = $(this).find('h5').text().toLowerCase();
            const description = $(this).find('p').text().toLowerCase();
            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                $(this).addClass('show');
            } else {
                $(this).removeClass('show');
            }
        });
    });

    // Prevent Clicks on Coming Soon Tutorials
    $('.tutorial-item.coming-soon').click(function(event) {
        event.preventDefault();
        alert("This tutorial is coming soon!");
    });
});