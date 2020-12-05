@extends("layout.default")
@section("title","Homepage")
@section('content')
    <div id="app">
        <carousel/>
    </div>
    <div id="vue-router">
        <div class="columns">
            <div class="column has-text-centered">
                <h1 class="is-size-2 mt-3 mb-3">Welcome to {{env('APP_NAME')}}!</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column has-text-centered is-full">
                <router-link id="recent-vue-button" to="/recent" class="has-text-white router-link-active"><button class="button is-rounded is-primary">Recent</button></router-link>
                <router-link to="/popular" class="has-text-white"><button class="button is-rounded is-primary">Popular</button></router-link>
            </div>
        </div>
        <router-view></router-view>
    </div>
    <style type="text/css">
        .router-link-active {
          font-weight: bold;
        }
    </style>
@endsection
@section('scripts')
    <script type="text/html" id="recent-vue-template">
        <div class="columns is-multiline p-5">
        @foreach($recent as $product)
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
                                    <p class="subtitle is-6">@johndoe</p>
                                </div>
                            </div>
                            <div class="content mt-3">
                                @foreach(explode("+",$product->categories) as $tag)<span class="tag is-info mr-1 mb-1">{{$tag}}</span>@endforeach
                                <br/><span style="font-size: 0.9rem;">{{substr($product->description,0,68)}} ...</span>
                                <a href="{{$product->link}}" target="_blank" style="color:white">
                                    <a href="{{route('product',['id' => $product->id])}}"><button class="button is-primary" style="margin:1%; padding: 1%; width: 90%; position: absolute; left: 3%; bottom: 2px;">View Product</button></a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </script>
    <script type="text/html" id="popular-vue-template">
        <div>Popular Template</div>
    </script>
    <script src="{{mix('/js/index.js')}}"></script>
    <script type="text/javascript">
        document.getElementById('recent-vue-button').click();
    </script>


@endsection
