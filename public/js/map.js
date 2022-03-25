// const { default: axios } = require("axios");

// const { info } = require("laravel-mix/src/Log");

 // Tạo biến tọa độ vùng giới hạn
 var southWest = L.latLng(10.735164, 106.654587),
    northEast = L.latLng(10.570172, 106.78299),
    bounds = L.latLngBounds(southWest, northEast);

//Giới hạn vùng zoom
var map = L.map('map', { 
    maxBounds: bounds,
    maxZoom: 16,
    minZoom: 12
}).setView([10.606957, 106.736641], 12);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', 
{
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 16,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZHVjaHVuZzEyMTIiLCJhIjoiY2wxMGZqdDdzMDB6ajNrcW5kOTNsb2cxNiJ9.j3MRh56lHlJtPHT0jkx7sw'
 
}).addTo(map);

// var boundss = L.latLngBounds([10.784744659837438, 106.48326873779297], [10.58198430651822, 106.94778442382812]);

// var videoUrls = [
//     'https://www.mapbox.com/bites/00188/patricia_nasa.webm',
//     'https://www.mapbox.com/bites/00188/patricia_nasa.mp4'
// ];

// var videoOverlay = L.videoOverlay( videoUrls, boundss, {
//     opacity: 0.5
// }).addTo(map);
// videoOverlay.getElement().pause();

// videoOverlay.on('load', function () {
//     var MyPauseControl = L.Control.extend({
//         onAdd: function() {
//             var button = L.DomUtil.create('button');
//             button.innerHTML = '⏸';
//             L.DomEvent.on(button, 'click', function () {
//                 videoOverlay.getElement().pause();
//             });
//             return button;
//         }
//     });
//     var MyPlayControl = L.Control.extend({
//         onAdd: function() {
//             var button = L.DomUtil.create('button');
//             button.innerHTML = '▶️';
//             L.DomEvent.on(button, 'click', function () {
//                 videoOverlay.getElement().play();
//             });
//             return button;
//         }
//     });

//     var pauseControl = (new MyPauseControl()).addTo(map);
//     var playControl = (new MyPlayControl()).addTo(map);
// });

//Add ThuySan vector in map 
var vectorThuySan = L.layerGroup().addTo(map);
var thuysanIcon = new L.Icon({iconUrl:'/img/iconThuySan.png'});




//Open Street Map
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 16,
    minZoom:12,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});


//Map Water Color
var Watercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
    attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    subdomains: 'abcd',
    minZoom: 12,
    maxZoom: 16,
    ext: 'jpg'
});

//Sat Map 
var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 16,
    minZoom: 12 ,
    subdomains:['mt0','mt1','mt2','mt3']
}); 

//Set onclick lên map 
var popup = L.popup();
function onMapClick(e)
{
    popup
        .setLatLng(e.latlng)
        .setContent( e.latlng.toString())
        .openOn(map);
   
}
map.on('click', onMapClick);

var bokeLayer = L.tileLayer.wms("http://localhost:8080/geoserver/wms", 
{
    layers: "cite:boke",
    format: "image/png",
    transparent: true,
   
    
});
bokeLayer.addTo(map);

//WMS request
var thuysanLayer = L.tileLayer.wms("http://localhost:8080/geoserver/wms", 
{
    layers: "cite:thuysan",
    format: "image/png",    
    transparent: true,
    
});
thuysanLayer.addTo(map);

// //Create radio button 
var baseMaps = 
{
    "Open Street Map": osm,
    "Water Color Map": Watercolor,
    "Google Sat map": googleSat
};

var overlayMaps = {
    "Tuyến bờ kè bảo vệ": bokeLayer,
    "Nuôi trồng, khai thác thủy sản": thuysanLayer,
    // "Tuyến bờ kè bảo vệ Vector": vectorBoKe,
    // "Nuôi trồng, khai thác thủy sản Vector": vectorThuySan   
}

map.removeLayer(bokeLayer);//Khóa layer khai refresh lại trang
map.removeLayer(thuysanLayer);//Khóa layer khai refresh lại trang
L.control.layers(baseMaps, overlayMaps, {collapsed:false}).addTo(map);
L.Control.geocoder().addTo(map);







