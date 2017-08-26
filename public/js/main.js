$(document).ready(function () {
    //==== Форма "Написать письмо"
    $('.order_call_btn').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });


    DG.then(function () {
        mainIcon = DG.icon({
            iconUrl: '/img/map_icon.png',
            iconSize: [164, 164],
            iconAnchor: [82, 82]
            // shadowUrl: '/img/EUR_shadow.png',
            // shadowSize: [80, 90],
            // shadowAnchor: [49, 73]
        });
        map = DG.map('map', {
            center: [43.2595, 76.92738],
            zoom: 16,
            dragging : false,
            boxZoom: false,
            geoclicker: false,
            zoomControl: false,
            fullscreenControl: false
        });
        DG.marker([43.259505, 76.92738], {icon: mainIcon, riseOnHover: true}).addTo(map);
    });

});