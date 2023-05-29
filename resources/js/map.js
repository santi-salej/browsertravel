// Importa las bibliotecas de Leaflet
import L from 'leaflet';
import 'leaflet.markercluster';

// Crea el mapa
var map = L.map('map').setView([51.505, -0.09], 13);

// Agrega la capa base de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
}).addTo(map);

// Crea una capa de marcadores
var markersLayer = L.markerClusterGroup();

// Agrega los marcadores a la capa
var marker1 = L.marker([51.505, -0.09]).bindPopup('Marcador 1');
var marker2 = L.marker([51.51, -0.1]).bindPopup('Marcador 2');
var marker3 = L.marker([51.505, -0.105]).bindPopup('Marcador 3');

markersLayer.addLayers([marker1, marker2, marker3]);

// Agrega la capa de marcadores al mapa
map.addLayer(markersLayer);