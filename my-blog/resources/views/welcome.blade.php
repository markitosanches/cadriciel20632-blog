@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">   
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name')}}</h1>
                <p>Ce blog est cool</p>
                <a href="{{ route('blog') }}" class="btn btn-outline-primary">Afficher les messages</a>
            </div>
        </div>
    </div>
@endsection