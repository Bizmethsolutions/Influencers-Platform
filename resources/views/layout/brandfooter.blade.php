<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 footer-copyright text-center">
          <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap  </p>
        </div>
      </div>
    </div>
  </footer>
  <script>
    var map;
    function initMap() {
      map = new google.maps.Map(
        document.getElementById('map'),
        {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});
    
      var iconBase =
        'http://admin.pixelstrap.com/cuba/assets/images/dashboard-2/';
    
      var icons = {
        userbig: {
          icon: iconBase + '1.png'
        },
        library: {
          icon: iconBase + '3.png'
        },
        info: {
          icon: iconBase + '2.png'
        }
      };
    
      var features = [
        {
          position: new google.maps.LatLng(-33.91752, 151.23270),
          type: 'info'
        }, {
          position: new google.maps.LatLng(-33.91700, 151.23280),
          type: 'userbig'
        },  {
          position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
          type: 'library'
        }
      ];
    
      // Create markers.
      for (var i = 0; i < features.length; i++) {
        var marker = new google.maps.Marker({
          position: features[i].position,
          icon: icons[features[i].type].icon,
          map: map
        });
      };
    }
  </script>
  