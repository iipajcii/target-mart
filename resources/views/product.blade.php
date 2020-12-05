@extends('layout.default')
@section('title',$product->name)
@section('content')

    <div class="columns mt-0" style="background-color: #FAFAFA;">
        <div class="column is-8 has-text-centered">
            <picture class="image" style="max-width: 80%; margin: auto;">
                <source srcset="{{asset(str_replace('public','storage',$product->image))}}" type="image/webp"/>
                <img src="{{asset(str_replace('public','storage',$product->image))}}" type="image/jpeg" alt="Website Image"/>
            </picture>
        </div>
        <div class="column is-4 mb-0 pb-0">
            <div class="columns has-text-centered is-multiline" style="background-color: #F4F4F4;  height: 100%; padding-bottom: 0; margin-bottom: 0;">
                <div class="column is-full has-text-centered pb-0 pt-0">
                    <h1 class="is-size-2 mt-6 mb-6">{{$product->name}}</h1>
                    <div style="width: 100%; text-align: left;">
                        <label class="label mr-3 mb-4" style="display: inline-block;">User:</label>
                        <span>{{"@".$product->user}}</span><br/>
                        <label class="label mr-3 mb-4" style="display: inline-block;">Tags:</label>
                        <span>@foreach(explode("+",$product->categories) as $tag)<span class="tag is-info mr-1 mb-1">{{$tag}}</span>@endforeach</span><br/>
                        <label class="label mr-3 mt-4" style="display: block;">Description:</label>
                        <p class="ml-6 mt-1 mb-1">{{$product->description}}</p>
                    </div>
                    <a href="{{route('purchase',['id' => $product->id])}}"><button class="button is-primary mt-6" style="font-weight: bold;"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;Click Here to Purchase&nbsp;&nbsp;</button></a>
                </div>
                <div class="column is-full pl-6 pb-0" style="text-align: left;">

                </div>
            </div>
        </div>
    </div>
    <div class="box" style="border-bottom: solid #DDD 1px; border-radius: 0;">
        <h2 class="is-size-4 mt-4 mb-5" style="text-align: center;">Related Products:</h2>
    <div class="columns">
        @foreach($related as $product)
                <div class="column is-2">
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
                                <br/><span style="font-size: 0.9rem;">{{--substr($product->description,0,68)--}} ...</span>
                                <a href="{{route('product',['id' => $product->id])}}" target="_blank" style="color:white"><button class="button is-primary" style="width: 100%; position: absolute; left: 0%; bottom: 0; border-radius: 0;">View Product</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
