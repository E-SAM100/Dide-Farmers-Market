@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>

                <div class="card-body">
                    <p>{{ $product->description }}</p>
                    <p>Price: ${{ $product->price }}</p>

                    <!-- Reviews -->
                    <div class="mt-4">
                        <h4>Reviews</h4>
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

                    <!-- Add Review Form -->
                    <div class="mt-4">
                        <h4>Add a Review</h4>
                        <form method="POST" action="{{ route('reviews.store') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <div class="form-group">
                                <label for="review">{{ __('Review') }}</label>
                                <textarea id="review" class="form-control @error('review') is-invalid @enderror" name="review" required>{{ old('review') }}</textarea>

                                @error('review')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="rating">{{ __('Rating') }}</label>
                                <select id="rating" class="form-control @error('rating') is-invalid @enderror" name="rating" required>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Review') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
