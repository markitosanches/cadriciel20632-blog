@extends('layouts.app')
@section('content')

<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center">Enregistrer</h3>
                    <div class="card-body">
                        <form action="{{ route('custom.registration')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="username" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary"> Enregistrer</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection;
