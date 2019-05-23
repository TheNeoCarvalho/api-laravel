@extends('layouts.app-admin')

@section('content')
<div class="container">

    <div class="row" style="margin:5px">
      <a href="{{ route('form')}}" class="btn btn-primary">Add Course</a>
        <table id="table" class="display table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>image</th>
              <th>Title</th>
              <th>Description</th>
              <th>CH</th>
              <th>Price</th>
              <th>Category</th>
              <th>Acões</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cursos as $curso)
               <tr>
                <td>{{$curso->id}}</td>
                <td><img src="{{ asset('img/curso.jpg') }}" width="90"></td>
                <td>{{$curso->title}}</td>
                <td>{{$curso->description}}</td>
                <td>{{$curso->ch}}</td>
                <td>{{ number_format($curso->price, 2,",",".")}}</td>
                <td>{{ $id }}</td>
                <th>
                  <a class="btn btn-danger" href="{{ route('deleteCourse', $curso->id) }}">Deletar</a> 
                  <a class="btn btn-success" href="{{ route('updateCourse', $curso->id) }}">Editar</a></th>
               </tr>
            @endforeach
            
          </tbody>

        </table> 
        {{ $cursos->links()}}
    </div>
</div>


@endsection
