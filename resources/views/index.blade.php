@extends("layout.default")
@section("title","index")
@section('content')
    <div id="app">
        <carousel/>
    </div>
{{--     <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
 --}}
    <div id="vue-router">
      <h1>Hello App!</h1>
      <p>
        <!-- use router-link component for navigation. -->
        <!-- specify the link by passing the `to` prop. -->
        <!-- <router-link> will be rendered as an `<a>` tag by default -->
        <router-link to="/foo">Go to Foo</router-link>
        <router-link to="/bar">Go to Bar</router-link>
      </p>
      <!-- route outlet -->
      <!-- component matched by the route will render here -->
      <router-view></router-view>
    </div>
    <style type="text/css">
        .router-link-active {
          color: red;
        }
    </style>
    Jamart, Jamaica's First Social Online Marketplace
@endsection
@section('scripts')
    <script src="{{asset('/js/index.js')}}"></script>
    <script type="text/javascript">

    </script>
@endsection
