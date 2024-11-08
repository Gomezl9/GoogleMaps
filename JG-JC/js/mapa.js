function initMap() {
    const mapDiv = document.getElementById("map");
    if (!mapDiv) {
        console.error("Error: No se encuentra el elemento con ID 'map'");
        return;
    }

    // Configuración inicial del mapa centrado en Bogotá
    const bogota = { lat: 4.63981615, lng: -74.0828724 };

    // Inicializar el mapa
    const map = new google.maps.Map(mapDiv, {
        center: bogota,
        zoom: 12,
    });

    // Crear un marcador y añadirlo al mapa
    const marker = new google.maps.Marker({
        position: bogota,
        map: map,
        draggable: true,
    });

    // Evento para actualizar coordenadas al arrastrar el marcador
    marker.addListener("dragend", function() {
        updateLatLng(marker.getPosition(), "latitud", "longitud");
    });

    // Evento para actualizar coordenadas al hacer clic en el mapa
    map.addListener("click", (event) => {
        const clickedLocation = event.latLng;
        marker.setPosition(clickedLocation);
        updateLatLng(clickedLocation, "latitud", "longitud");
    });
}

function initMap2() {
    const mapDiv2 = document.getElementById("map2");
    if (!mapDiv2) {
        console.error("Error: No se encuentra el elemento con ID 'map2'");
        return;
    }

    // Configuración inicial del mapa centrado en Bogotá
    const bogota = { lat: 4.63981615, lng: -74.0828724 };

    // Inicializar el mapa
    const map2 = new google.maps.Map(mapDiv2, {
        center: bogota,
        zoom: 12,
    });

    // Crear un marcador y añadirlo al mapa
    const marker2 = new google.maps.Marker({
        position: bogota,
        map: map2,
        draggable: true,
    });

    // Evento para actualizar coordenadas al arrastrar el marcador
    marker2.addListener("dragend", function() {
        updateLatLng(marker2.getPosition(), "latitud_trabajo", "longitud_trabajo");
    });

    // Evento para actualizar coordenadas al hacer clic en el mapa
    map2.addListener("click", (event) => {
        const clickedLocation = event.latLng;
        marker2.setPosition(clickedLocation);
        updateLatLng(clickedLocation, "latitud_trabajo", "longitud_trabajo");
    });
}

// Función para actualizar los valores de latitud y longitud en el formulario
function updateLatLng(location, latField, lngField) {
    document.getElementById(latField).value = location.lat();
    document.getElementById(lngField).value = location.lng();
}

// Asegurarse de que el mapa se inicializa solo cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
    initMap();
    initMap2();
});
