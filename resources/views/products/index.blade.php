@extends('layout')

@section('content')

    <div class="col-sm-3 col-md-6 col-lg-12">

        <h2>
            Listado de productos
            <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>

        <table class="table table-hover table-striped">

            <thead>
                <tr>
                    <th width="50px">ID</th>
                    <th>NOMBRE DEL PRODUCTO</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <strong>{{ $product->name }}</strong>
                            {{ $product->short }}
                        </td>
                        <td>
                            <a href="{{ route('products.show',$product->id) }}">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('products.edit',$product->id) }}">Editar</a>
                        </td>
                        <td>
                            Borrar
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $products->render() }}

    </div>
    
    <div class="col-sm-4">
        mensaje
    </div>
    
@endsection