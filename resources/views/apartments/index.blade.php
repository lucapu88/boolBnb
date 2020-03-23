{{-- PAGINA DEI RISULTATI DI RICERCA --}}
@extends('layouts.public')
@section('content')
{{-- <nav class="nav-options navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="input-group num-select">
    <select class="custom-select border-custom" id="inputGroupSelect01">
      <option selected>N° Stanze</option>
      @for ($i=0; $i <= 10; $i++)
        <option value="{{$i}}"> {{$i}}</option>
      @endfor
    </select>
  </div>
  <div class="input-group num-select">
    <select class="custom-select border-custom" id="inputGroupSelect01">
      <option selected>N° Letti</option>
      @for ($i=0; $i <= 10; $i++)
        <option value="{{$i}}"> {{$i}}</option>
      @endfor
    </select>
  </div>
  @foreach ($options as $option)
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">{{$option->nome}}</label>
    </div>
  @endforeach
</nav> --}}
<div class="container-fluid">
  <div class="row">
    <div class="filters-container col-2">
      <div class="input-group num-select">
        <select class="custom-select border-custom" id="inputGroupSelect01">
          <option selected>N° Stanze</option>
          @for ($i=0; $i <= 10; $i++)
            <option value="{{$i}}"> {{$i}}</option>
          @endfor
        </select>
      </div>
      <div class="input-group num-select">
        <select class="custom-select border-custom" id="inputGroupSelect01">
          <option selected>N° Letti</option>
          @for ($i=0; $i <= 10; $i++)
            <option value="{{$i}}"> {{$i}}</option>
          @endfor
        </select>
      </div>
      @foreach ($options as $option)
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label" for="customCheck1">{{$option->nome}}</label>
        </div>
      @endforeach
    </div>
    <div class="results-container col-10">
      @forelse ($apartments as $apartment)
        <div class="col-sm-9 col-md-5 col-lg-4">
          <a href="{{route('apartments.show', $apartment->id)}}" class="card-click text-decoration-none">
          <div class="btn btn-primary card-results">
            <div class="card-body">
              <div class="img-container">
                <img class="img-thumbnail" src="{{ $apartment->img }}" alt="Immagine appartamento">
              </div>
            </div>
             <div class="card-body">
               <h5 class="card-title">{{ $apartment->titolo }}</h5>
               <small>Stanze: {{$apartment->stanze}},  Posti letto: {{$apartment->posti_letto}}, Bagni: {{$apartment->bagni}}</small>
               {{-- <p class="card-text descriprion">{{$apartment->descrizione}}</p> --}}
             </div>
          </div>
          {{-- CARD ORIZZONTALE --}}
          {{-- <div class="card-results mb-6" >
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{ $apartment->img }}" class="img-thumbnail" alt="Immagine appartamento">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $apartment->titolo }}</h5>
                <p class="card-text">{{$apartment->cita}}, {{$apartment->provincia}}, {{$apartment->paese}}.</p>
              </div>
            </div>
          </div>
        </div> --}}
          </a>
        </div>
      @empty
      <p class="text-center">Non ci sono ancora appartamenti da mostrare</p>
      @endforelse

      {{-- RIQUADRO MAPPA --}}
      {{-- <div class="col-sm-12 col-md-5 col-lg-5 maps-results">
          <div class="maps-location" id="map" style="width: 500px">
            {{-- <script>
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
      </div> --}}
    </div>
    <div class="paginate mx-auto">
      {{$apartments->links()}}
    </div>
  </div>
</div>
@endsection
