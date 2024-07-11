@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content">
            @if(isset($products) && $products->count() > 0)
                @foreach($products as $product)
                    <!-- Your product card HTML -->
                @endforeach
            @else
                <p>No products found.</p>
            @endif
        </section>
    </div>
@endsection
