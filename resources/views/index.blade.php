@extends("layout.default")
@section("title","index")
@section('content')
    <div id="app">
        <carousel/>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('/js/index.js')}}"></script>
@endsection
