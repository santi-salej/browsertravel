@extends('layouts.app')

@section('content')
    <main class="px-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Búsqueda Global del Clima</h2>
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mt-2" name="city" id="city"
                                placeholder="Introduce el nombre de la ciudad">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @isset($notFound)
                            <div class="alert alert-danger mt-3" role="alert">
                                Ciudad no encontrada, intente de nuevo!
                            </div>
                        @endisset

                        <button type="submit" class="btn btn-success mt-3">Consultar</button>
                    </form>
                    <br>
                </div>

                <div class="col-md-6">
                    @isset($ok)
                        <div class="card mb-3" style="max-width: 540px; background: #000000c2;">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: auto !important;">
                                    <img class="card-img" src="{{ $icono }}" alt="Icono de humedad">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title title_browser">{{$name}}</h5>
                                        <p class="card-text txt_browser" >{{$weather}}</p>
                                        <p class="card-text">Temperatura {{$temp}} °C</p>
                                        <p class="card-text">Humedad {{$humidity}} %</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset

                </div>

                <div class="col-md-6" style="height: 300px;">
                    @isset($ok)
                        <div class="card mb-12" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <x-maps-leaflet
                                    :centerPoint="['lat' => $lat, 'long' => $lon]"
                                    :zoomLevel="5"
                                    :markers="[['lat' => $lat, 'long' => $lon]]"
                                    >
                                    </x-maps-leaflet>
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>

    </main>
@endsection
