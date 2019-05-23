@extends('layouts.app-admin')

@section('content')
<div class="container">
    <div class="row" style="margin:5px">
      <a href="{{ route('createCategory')}}" class="btn btn-primary">Add Category</a>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
               <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
               <tr>
                <td>{{$category->id}}</td>
                <td>{{ $category->name }}</td>

                <th>
                  <a class="btn btn-danger" href="{{ route('deleteCategory', $category->id) }}">Deletar</a> 
                  <a class="btn btn-success" href="{{ route('updateCategory', $category->id) }}">Editar</a>
                </th>
               </tr>
            @endforeach
            
          </tbody>
        </table>  
        
    </div>
</div>
@endsection
