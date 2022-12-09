$('#collapseOne').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.29851861344549, -99.18190935562899);
});

$('#collapseTwo').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.525688366277045, -99.22760883282473);
});

$('#collapseThree').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.36155079189929, -99.27352825115969);
});

$('#collapseFour').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.48699583967124, -99.12525573681643);
});

$('#collapseFive').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.384785613610017, -99.08251607726862);
});

$('#collapseSix').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(19.29454918217559, -99.12830272625735);
});

$('#collapseSeven').on('show.bs.collapse', function() {
    // do something...
    iniciarMapa(23.14386, -109.7143734, 793);
});

function iniciarMap() {
    var coord = { lat: 19.29851861344549, lng: -99.18190935562899 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: coord,
        panControl: true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: true,
        mapTypeControl: false,
        streetViewControl: false,
        draggable: true,
        styles: [{
            "featureType": "poi.business",
            "stylers": [
                { "visibility": "off" }
            ]
        }, {
            "stylers": [
                { "saturation": -100 },
                { "invert_lightness": true }
            ]
        }, {
            "stylers": [
                { "lightness": 9 }
            ]
        }]
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}

function iniciarMapa(latitud, long) {
    var coord = { lat: latitud, lng: long };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: coord,
        panControl: true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: true,
        mapTypeControl: false,
        streetViewControl: false,
        draggable: true,
        styles: [{
            "featureType": "poi.business",
            "stylers": [
                { "visibility": "off" }
            ]
        }, {
            "stylers": [
                { "saturation": -100 },
                { "invert_lightness": true }
            ]
        }, {
            "stylers": [
                { "lightness": 9 }
            ]
        }]
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}