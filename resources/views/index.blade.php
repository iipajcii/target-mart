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
                <router-link to="/recent" class="has-text-white"><button class="button is-rounded is-primary">Recent</button></router-link>
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
        <div>Recent Template</div>
    </script>
    <script type="text/html" id="popular-vue-template">
        <div>Popular Template</div>
    </script>
    <script src="{{mix('/js/index.js')}}"></script>
    <script type="text/javascript"></script>


@endsection
