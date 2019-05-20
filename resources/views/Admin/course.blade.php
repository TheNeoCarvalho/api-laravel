@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin:5px">
      <a href="{{ route('form')}}" class="btn btn-primary">Adicionar curso</a>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>image</th>
              <th>Title</th>
              <th>Description</th>
              <th>CH</th>
              <th>Price</th>
              <th>Acões</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cursos as $curso)
               <tr>
                <td>{{$curso->id}}</td>
                <td><img src="{{ asset('img/cursos/react.png') }}" width="90"></td>
                <td>{{$curso->title}}</td>
                <td>{{$curso->description}}</td>
                <td>{{$curso->ch}}</td>
                <td>{{ number_format($curso->price, 2,",",".")}}</td>
                <th>
                  <a class="btn btn-danger" href="{{ route('delete', $curso->id) }}">Deletar</a> 
                  <a class="btn btn-success" href="{{ route('update', $curso->id) }}">Editar</a></th>
               </tr>
            @endforeach
            
          </tbody>
        </table>  

            <h4>
            Qnt de usuarios:{{ $userCount }} 
            Qnt de cursos:{{ $count }} 
            Soma:{{ $soma }} 
            Media:{{ $avg }} 
            Max:{{ $max }} 
            Min:{{ $min }} 
           </h4>

        
    </div>
</div>
@endsection
