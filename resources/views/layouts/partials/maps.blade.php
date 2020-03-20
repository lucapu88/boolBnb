<div class="maps" id="maps">
  <div class="maps-title">
    <h3>Il quartiere</h3>
    <p>La casa di {{$apartment->user->first_name}} si trova a {{$apartment->cita}}, {{$apartment->provincia}}, {{$apartment->paese}}.</p>
  </div>
  <div class="maps-location" id="map">
    <script>
          // tt.setProductInfo('tomtom'. '5.49.1' );
          var ap_coord =  [{{$apartment->lon}}, {{$apartment->lat}}]
          console.log(ap_coord)
          var map = tt.map({
              key: 'begalCOpySZrKc5PeNb372wgWaNLv7oq',
              container: 'map',
              style: 'tomtom://vector/1/basic-main',
              center: ap_coord,
              zoom: 15
            });
            map.addControl(new tt.FullscreenControl());
            map.addControl(new tt.NavigationControl());
          var marker = new tt.Marker().setLngLat(ap_coord).addTo(map);
      </script>
  </div>
</div>