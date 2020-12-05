@extends('layout.default')
@section('title',"Search for '".$search."'")
@section('content')
    <div class="columns">
        <div class="column is-full">
            <h1 class="is-size-2 has-text-centered">Search for '{{$search}}'</h1>
        </div>
    </div>
    <div class="columns is-multiline p-5">
        @foreach($products as $product)
                <div class="column is-one-fifth">
                    <div class="card">
                        <div class="card-image">
                            <picture class="image is-square">
                                <source srcset="{{asset(str_replace('public','storage',$product->image).'.square.webp')}}" type="image/webp"/>
                                    <img src="{{asset(str_replace('public','storage',$product->image).'.square.jpeg')}}" type="image/jpeg" alt="Website Image"/>
                                </picture>
                        </div>
                        <div class="card-content">
                            <div class="media mb-1">
                                <div class="media-content">
                                    <p class="title is-5">{{$product->name}}</p>
                                    <p class="subtitle is-6">{{"@".$product->user}}</p>
                                </div>
                            </div>
                            <div class="content mt-3">
                                @foreach(explode("+",$product->categories) as $tag)<span class="tag is-info mr-1 mb-1">{{$tag}}</span>@endforeach
                                <br/><br/>
                                <a href="{{route('product',['id' => $product->id])}}" target="_blank" style="color:white"><button class="button is-primary" style="width: 100%; position: absolute; left: 0%; bottom: 0; border-radius: 0;">View Product</button></a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection
