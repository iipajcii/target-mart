@extends('layout.default')
@section('title',$product->name)
@section('content')
    <div class="columns is-centered">
        <div class="column is-9">
            <div class="columns has-text-centered">
                <div class="column">
                    <h1 class="is-size-2">{{$product->name}}</h1>
                </div>
            </div>
            <figure class="image">
                <img src="{{asset(str_replace('public','storage',$product->image))}}" alt="Placeholder image"/>
            </figure>
            <p>{{$product->description}}</p>
            <button class="button is-primary" style="font-weight: bold;"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;Click Here to Purchase&nbsp;&nbsp;</button>
        </div>
    </div>
@endsection
