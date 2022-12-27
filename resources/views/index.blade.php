@extends('layouts.public')
@section('content')
    <div class="container min-vh-100">
        <section class="p-2">
            <div class="row py-2 my-3">
                <div class="col-md-10">
                    <h4>El Dolar en Argentina</h4>
                </div>
                <div class="d-grid gap-2 col-md-2">
                    <a href="\coins" class="btn btn-dark">
                        Ver todo
                    </a>
                </div>
            </div>
            <div class="row gap-4 offset-md-1 mt-5 mt-md-3">
                @foreach ($coins as $coin)
                    <div class="col-12 col-md-5">
                        <div class="card {{($coin['nombre'] == 'Dolar Blue' ?'text-bg-primary': 'text-bg-success') }}">
                            <div class="card-body p-3 m-0">
                                <div>
                                    <h4>{{ $coin['nombre'] }}</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <p>Compra: {{ $coin['compra'] }}</p>
                                    </div>
                                    <div class="col text-center">
                                        <p>Venta: {{ $coin['venta'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
