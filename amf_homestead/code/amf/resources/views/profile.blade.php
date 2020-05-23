@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->role_id == '1')
                    <div class="card-header">{{ $user->name }} ({{ $user->email }}) - {{ $role->name }}</div>
                    <div class="card-body">
                        @foreach($user->orders as $order)
                            <h5>{{ $order->user->name }}</h5>
                            {{ $order->material }}
                            <br/>
                            <small title="Created at {{ $order->created_at->format('m/d/Y g:i A') }}">{{ $order->created_at->diffForHumans() }}</small>
                            
                            <form action="/order/{{ $order->id }}/delete" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete order</button>
                            </form>
                            <hr/>
                        @endforeach
                    </div>
                @elseif(Auth::user()->id == $user->id)
                {{-- show profile to current user if profile belongs to current user --}}
                    <div class="card-header">{{ $user->name }} ({{ $user->email }}) - {{ $role->name }}</div>
                    <div class="card-body">
                        @foreach($user->orders as $order)
                            <h5>{{ $order->user->name }}</h5>
                            {{ $order->material }}
                            <br/>
                            <small title="Created at {{ $order->created_at->format('m/d/Y g:i A') }}">{{ $order->created_at->diffForHumans() }}</small>
                            <hr/>
                        @endforeach
                @else
                <div class="card-header">Access denied</div>
                    <div class="card-body">
                        <h5>Your account is not permitted to view user profiles</h5>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
