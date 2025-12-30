<div class="p-4 h-full flex flex-col gap-4">
    <!-- Mapa -->
    <div id="map" class="h-96 w-full rounded"></div>

    <!-- Inputs -->
    <div class="flex flex-row gap-4">
        <div class="flex flex-col">
            <label>Latitud</label>
            <input wire:model="latitude_aprox" id="lat" type="text" class="border rounded p-1">
        </div>

        <div class="flex flex-col">
            <label>Longitud</label>
            <input wire:model="longitude_aprox" id="lng" type="text" class="border rounded p-1">
        </div>
    </div>

    <div class="flex gap-4 items-end">
        <button id="btn-location" type="button"
            class="flex gap-2 w-max items-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <span class="icon-[solar--gps-bold-duotone] size-5"></span>
            Obtener mi ubicación
        </button>

        <button wire:click="saveLocation" type="button"
            class="flex gap-2 w-max items-center bg-green-600 text-white px-4 py-2 rounded">
            Guardar ubicación
        </button>
    </div>
</div>

@assets
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
@endassets

<script>
    // Coordenadas iniciales
    let latInput = document.getElementById('lat');
    let lngInput = document.getElementById('lng');

    let initialLat = 14.0723;
    let initialLng = -87.1921;

    latInput.value = initialLat;
    lngInput.value = initialLng;

    // Crear mapa
    let map = L.map('map').setView([initialLat, initialLng], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Marcador
    let marker = L.marker([initialLat, initialLng], {
        draggable: true
    }).addTo(map);

    // 📍 CLICK EN EL MAPA
    map.on('click', function(e) {
        updatePosition(e.latlng.lat, e.latlng.lng);
    });

    // 📍 ARRASTRAR MARCADOR
    marker.on('dragend', function(e) {
        let position = e.target.getLatLng();
        updatePosition(position.lat, position.lng);
    });

    // ✏️ ESCRIBIR EN INPUTS
    latInput.addEventListener('input', updateFromInputs);
    lngInput.addEventListener('input', updateFromInputs);

    function updateFromInputs() {
        let lat = parseFloat(latInput.value);
        let lng = parseFloat(lngInput.value);

        if (!isNaN(lat) && !isNaN(lng)) {
            marker.setLatLng([lat, lng]);
            map.panTo([lat, lng]);
            // Disparar evento personalizado para Livewire
            window.dispatchEvent(new CustomEvent('location-updated', {
                detail: {
                    lat: lat,
                    lng: lng
                }
            }));
        }
    }

    function updatePosition(lat, lng) {
        marker.setLatLng([lat, lng]);
        map.panTo([lat, lng]);
        latInput.value = lat.toFixed(6);
        lngInput.value = lng.toFixed(6);

        // Disparar evento personalizado para Livewire
        window.dispatchEvent(new CustomEvent('location-updated', {
            detail: {
                lat: lat.toFixed(6),
                lng: lng.toFixed(6)
            }
        }));
    }

    // 🌍 BOTÓN GEOLOCALIZACIÓN
    const locationBtn = document.getElementById('btn-location');
    locationBtn.addEventListener('click', function() {
        if (!navigator.geolocation) {
            alert('La geolocalización no está disponible en este navegador');
            return;
        }

        locationBtn.disabled = true;
        locationBtn.innerText = 'Obteniendo ubicación...';

        navigator.geolocation.getCurrentPosition(
            function(position) {
                let lat = position.coords.latitude;
                let lng = position.coords.longitude;
                updatePosition(lat, lng);
                locationBtn.disabled = false;
                locationBtn.innerHTML =
                    '<span class="icon-[solar--gps-bold-duotone] size-5"></span> Obtener mi ubicación';
            },
            function(error) {
                let msg = 'Error desconocido';
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        msg = 'Permiso de ubicación denegado';
                        break;
                    case error.POSITION_UNAVAILABLE:
                        msg = 'Ubicación no disponible';
                        break;
                    case error.TIMEOUT:
                        msg = 'Tiempo de espera agotado';
                        break;
                }
                alert(msg);
                locationBtn.disabled = false;
                locationBtn.innerHTML =
                    '<span class="icon-[solar--gps-bold-duotone] size-5"></span> Obtener mi ubicación';
            }, {
                enableHighAccuracy: true,
                timeout: 30000,
                maximumAge: 0
            }
        );
    });
</script>

@script
    <script>
        window.addEventListener('location-updated', (event) => {
            $wire.latitude_aprox = event.detail.lat;
            $wire.longitude_aprox = event.detail.lng;
        });
    </script>
@endscript
