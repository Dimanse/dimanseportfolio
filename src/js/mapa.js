if(document.querySelector('#mapa')){
    const lat = 9.9432616;
    const lng = -84.1148942;
    const zoom = 16;

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
            <h3 class="mapa__heading">DevWebCamp</h3>
            <p class="mapa__texto">Centro de convenciones del Hotel Plaza Real Suites & Apartments</p>
        `)
        .openPopup();
}