@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Your Orders</div>
                <div class="card-body">
                    <form action="/makeOrder" method="post">
                        @csrf {{-- this makes it so laravel doesn't 419 every post request --}}
                        <textarea name="material" class="form-control" rows="3" placeholder="What do you want to request, {{ Auth::user()->name }}?"></textarea>
                        <button type="submit" class="btn btn-primary">Place order</button>
                    </form>
                    <hr>
                    @foreach($orders as $order)
                        <h5><a href="/user/{{ $order->user->id }}">{{ $order->user->name }} ({{ $order->user->email }})</a>
                        {{ $role->name }}</h5>
                        {{ $order->material }}
                        <br/>
                        <small title="Created at {{ $order->created_at->format('m/d/Y g:i A') }}">{{ $order->created_at->diffForHumans() }}</small>
                        @if($role->id == '1')
                            <form action="/order/{{ $order->id }}/delete" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete order</button>
                            </form>
                        @endif
                        <hr/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
