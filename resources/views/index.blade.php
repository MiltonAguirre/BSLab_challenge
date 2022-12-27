@extends('layouts.public')
@section('content')
    <div class="container min-vh-100">
        <section class="p-2">
            <div class="row py-2 my-3">
                <div class="col-md-10">
                    <h4>El Dolar en Argentina</h4>
                </div>
                <div class="d-grid gap-2 col-md-2">
                    <a href="\coins" class="btn btn-primary">
                        Ver todo
                    </a>
                </div>
            </div>
            @foreach ($coins as $coin)
                <div class="card text-bg-info m-2">
                    <div class="card-body">
                        <h4>{{ $coin['nombre'] }}</h4>
                        <div class="d-flex row col-md-8 offset-md-2">
                            <div class="col-md-6">
                                <p>Compra: {{ $coin['compra'] }}</p>
                            </div>
                            <div class="col">
                                <p>Venta: {{ $coin['venta'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
