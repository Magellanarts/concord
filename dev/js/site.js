var doc = jQuery(document);

doc.ready(function(){

});
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


function initialize() {

    var myLatlng = new google.maps.LatLng(40.97076,-76.01576);
    var mapOptions = {
        center: myLatlng,
        zoom: 11,
        disableDefaultUI: true
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng
    });

    marker.setMap(map);

}
google.maps.event.addDomListener(window, 'load', initialize);
