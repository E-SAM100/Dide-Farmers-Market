@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notifications') }}</div>

                <div class="card-body">
                    @if($notifications->isEmpty())
                        <p>No notifications</p>
                    @else
                        <ul class="list-group">
                            @foreach($notifications as $notification)
                                <li class="list-group-item">
                                    <p>{{ $notification->data['sender_name'] }} sent you a message: {{ $notification->data['content'] }}</p>
                                    <small>{{ $notification->created_at }}</small>
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
