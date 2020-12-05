@extends('layout.default')
@section('title',"Blog")
@section('content')
    <div class="columns is-centered">
        <div class="column" >
            <div class="has-text-centered">
                <h1 class="is-size-2">Sign Up Form</h1>
            </div>
        </div>
    </div>
    <div class="columns is-centered">
        <div class="column is-5" >
            <form action="{{route('dashboard')}}" method="post">
                @csrf
                <div class="field">
                    <label class="label">First Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="e.g. John" name="fname">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Last Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="e.g. Doe" name="lname">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="e.g. email@@exmaple.com" name="email">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="e.g. my-business-name" name="username">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="Confirm Password" name="password">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input class="input" type="password" placeholder="Password" name="confirm_password">
                    </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input type="submit" class="button is-danger" value="Out Of Order"/>
                  </div>
                </div>
            </form>
        </div>
    </div>
@endsection
