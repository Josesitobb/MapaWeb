function initMap() {
    // Variable para recorer
    // var heatmapData = puntosPHP.map(function (punto) {
    //     return new google.maps.LatLng(punto.lat, punto.lng);
    // });
    var headMaps = puntosPHP.map((punto) => {
        return new google.maps.LatLng(punto.lat, punto.lng);
    })

    var Universidad = { lat: 4.668506871633285, lng: -74.10310276150402 };

    var map = new google.maps.Map(document.getElementById('map'), {
        center: Universidad,
        zoom: 18,
        mapTypeId: 'satellite'
    });

    var heatmap = new google.maps.visualization.HeatmapLayer({
        data: headMaps
    });

    heatmap.setMap(map);
}
