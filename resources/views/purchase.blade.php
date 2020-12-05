@extends('layout.default')
@section('title',"Purchase - ".$product->name)
@section('content')

    <h1 class="is-size-2 mt-6 mb-6 has-text-centered">Purchase Page</h1>
    <div class="columns mt-0" style="background-color: #FAFAFA;">
        <div class="column is-full">
            <div class="columns has-text-centered is-multiline" style="background-color: #F4F4F4;  height: 100%; padding-bottom: 0; margin-bottom: 0;">
                <div class="column is-full has-text-centered">
                    <h1 class="is-size-2 mt-6 mb-6">Complete your purchase of '{{$product->name}}'</h1>
                    <a href="{{route('index')}}" onclick="alert('You have purchased ' + '\'{{$product->name}}\'')"><button class="button is-primary mt-6" style="font-weight: bold;"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Click Here to Complete Purchase&nbsp;&nbsp;</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
