@extends('layout')

@section('content')

    <div class="col-sm-3 col-md-6 col-lg-12">

        <h2>
            {{ $product->name }}
            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-light pull-right">Editar</a>
        </h2>

        <p>
            {{ $product->short }}
        </p>

        {!! $product->body !!}
        
    </div>

    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>
    
@endsection