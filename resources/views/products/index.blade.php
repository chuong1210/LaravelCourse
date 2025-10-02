{{-- <h2>{{ $pass_variable }} and {{ $x }}</h2>
<h2>Danh sách sản phẩm 1</h2>
<ul>
    @foreach($products1 as $item)
    <li>{{ $item }}</li>
    @endforeach
</ul>
<h2>Danh sách sản phẩm 2</h2>
<ul>
    @foreach($products2 as $key => $value)
    <li>{{ $key }} - {{ $value }}</li>
    @endforeach
</ul> --}}

@extends('layouts.app')

@section('content')
    <a href="{{ route('products') }}">Link to products</a>

    <h1 class="mb-4">Our Products</h1>

    <div class="row">
        @foreach($products2 as $name => $price)
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $name ?? "hihi"}}</h5>
                        <p class="card-text text-success fw-bold">${{ $price }}</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection