@extends('layouts.public')
@section('content')
    <div class="container min-vh-100">
        <section class="p-2">

            <div class="row p-2 my-3">
                <div class="col-md-10">
                    <h4>Todas las divisas</h4>
                </div>
                <div class="d-grid gap-2 col-md-2">
                    <a href="\" class="btn btn-dark">
                        Inicio
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-bg-dark">
                        <tr>
                            <th style="padding-left:25px;">Nombre</th>
                            <th>Compra</th>
                            <th>Venta</th>
                        </tr>
                    </thead>
                    <tbody class="  table-success">
                        @foreach ($coins as $coin)
                            <tr>
                                <td>
                                    <span>{{ $coin['nombre'] }}</span>
                                </td>

                                <td>
                                    <span>{{ $coin['compra'] }}</span>
                                </td>

                                <td>
                                    <span>{{ $coin['venta'] }}</span>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>

        </section>
    </div>
@endsection
