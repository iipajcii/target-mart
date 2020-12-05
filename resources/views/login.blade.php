@extends("layout.management")
@section("title","Login")
@section('content')
<div style="height: 30rem;">
    <div class="columns is-centered">
        <div class="column" >
            <div class="has-text-centered">
                <h1 class="is-size-2">Login Form</h1>
            </div>
        </div>
    </div>
    <div class="columns is-centered">
        <div class="column is-5" >
            <form action="{{route('dashboard')}}" method="post">
                @csrf
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input type="submit" class="button is-link" value="Login"/>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
