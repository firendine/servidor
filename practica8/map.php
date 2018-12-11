<html><head><style type="text/css">.gm-err-container{height:100%;width:100%;display:table;background-color:#e0e0e0;position:relative;left:0;top:0}.gm-err-content{border-radius:1px;padding-top:0;padding-left:10%;padding-right:10%;position:static;vertical-align:middle;display:table-cell}.gm-err-content a{color:#4285f4}.gm-err-icon{text-align:center}.gm-err-title{margin:5px;margin-bottom:20px;color:#616161;font-family:Roboto,Arial,sans-serif;text-align:center;font-size:24px}.gm-err-message{margin:5px;color:#757575;font-family:Roboto,Arial,sans-serif;text-align:center;font-size:12px}.gm-err-autocomplete{padding-left:20px;background-repeat:no-repeat;background-size:15px 15px}
</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/marker.js"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/2/intl/es_ALL/controls.js"></script></head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="-moz-user-select: none;"></div><div class="gm-err-title">Se ha producido un error.</div><div class="gm-err-message">Esta página no ha cargado Google Maps correctamente. Descubre los detalles técnicos del problema en la consola de JavaScript.</div></div></div></div></div>
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Mislata
          var mislata = {lat: 39.4751790, lng: -0.4206617};
          // The map, centered at Mislata
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 4, center: mislata});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: mislata, map: map});
        }
            </script>
            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=API_KEY&amp;callback=initMap">
            </script>
  
<div style="position: absolute; left: 0px; top: -2px; height: 1px; overflow: hidden; visibility: hidden; width: 1px;"><span style="position: absolute; font-size: 300px; width: auto; height: auto; margin: 0px; padding: 0px; font-family: Roboto, Arial, sans-serif;">BESbswy</span></div></body></html>