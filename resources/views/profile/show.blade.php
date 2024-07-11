@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Address:</strong> {{ $user->address }}</p>
                    <p><strong>Farm Details:</strong> {{ $user->farm_details }}</p>
                    @if($user->profile_picture)
                        <p><strong>Profile Picture:</strong></p>
                        <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture" style="max-width: 150px;">
                    @endif
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
