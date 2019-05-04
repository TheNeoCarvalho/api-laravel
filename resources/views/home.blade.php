@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ReactJS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p>Price: </p>
                <a href="#" class="btn btn-primary">Buy Now </a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
