@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin:5px">

        @foreach ($cursos as $curso)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('img/cursos/react.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$curso->title}}</h5>
                <p class="card-text">
                  {{ $curso->description}}
                </p>
                <p>Price:
                  {{ 
                    number_format("$curso->price","2", ",",".")
                  }} </p>
                <a href="#" class="btn btn-primary">Buy Now </a>
              </div>
          	</div>
        </div>
        @endforeach

        
    </div>
</div>
@endsection
