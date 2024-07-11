@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reviews for ') }}{{ $product->name }}</div>

                <div class="card-body">
                    @if($reviews->isEmpty())
                        <p>No reviews yet.</p>
                    @else
                        <ul class="list-group">
                            @foreach($reviews as $review)
                                <li class="list-group-item">
                                    <p>{{ $review->user->name }}: {{ $review->review }}</p>
                                    <p>Rating: {{ $review->rating }} / 5</p>
                                    <small>{{ $review->created_at }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
