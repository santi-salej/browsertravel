@extends('layouts.app')
@section('content')
<main class="px-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 table-responsive" style="background:#fff">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">main_weather</th>
                        <th scope="col">Estado del cielo</th>
                        <th scope="col">Humedad</th>
                        <th scope="col">Temperatura</th>
                        <th scope="col">Consultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                            <tr>
                                <th scope="row">{{ $dato->id }}</th>
                                    <td>{{ $dato->name }}</td>
                                    <td>{{ $dato->main_weather}}</td>
                                    <td>{{ $dato->description_weather}}</td>
                                    <td>{{ $dato->humidity}} %</td>
                                    <td>{{ $dato->temp}} °C</td>
                                    <td>{{ $dato->created_at}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $datos->links() }}

                </div>
            </div>
        </div>

    </main>
@endsection