@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <br><br><br>
                        <div class="float-left">
                            <span class="card-title">Ver Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="http://127.0.0.1:8000/argon/img/theme/<?= $product->type ?>" width="200" height="200" class="rounded-circle">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Size:</strong>
                            {{ $product->size }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $product->type }}
                        </div>
                        <div class="form-group">
                            <strong>Provider:</strong>
                            {{ $product->provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
