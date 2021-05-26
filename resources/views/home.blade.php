
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="cont" align="center" style="margin-top: 15%">
                <p>Welcome Back</p>
                <h1 style="font-size: 100px">{{Auth::user()->username}}</h1>
                <div class="line" style="height: 1px; background-color: black; width: auto">

                </div>
                <div class="row" style="margin-top: 28px">
                    <div class="col-4" style="text-align: right">
                        <p>Name: </p>
                    </div>
                    <div class="col-8">
                        <p>
                            {{Auth::user()->name}}
                        </p>
                    </div>

                    <div class="col-4" style="text-align: right">
                        <p>Email: </p>
                    </div>
                    <div class="col-8">
                        <p>
                            {{Auth::user()->email}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
