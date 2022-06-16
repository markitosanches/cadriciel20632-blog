@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
               <a href="{{ route('blog')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
               <hr>
               <h1  class="display-one">{{ ucfirst($blogPost->title) }}</h1>
               <p>{!! $blogPost->body !!}</p>
               <hr>
               <a href="" class="btn btn-outline-primary">Modifier l'article</a>
               <hr>
               <form action="">
                <button class="btn btn-outline-danger">Supprimer</button>
               </form>
            </div>
        </div>
    </div>
@endsection