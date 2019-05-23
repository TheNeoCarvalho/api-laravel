@extends('layouts.app-admin')

@section('content')
<div class="container">
 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Usuários</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
           
           <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Email</th>
			      <th scope="col">Ações</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($users as $user)
			    <tr>
			      <th scope="row">{{ $user->id }}</th>
			      <td>{{ $user->name }}</td>
			      <td>{{ $user->email }}</td>
			      <td>
			      	<a class="btn btn-danger" href=""><i class="fa fa-trash"></i> Deletar</a> 
                  	<a class="btn btn-success" href=""><i class="fas fa-sync-alt"></i> Editar</a>
			      </td>
			    </tr>
			    @endforeach

			
			  </tbody>
			</table>

        </div>
    </div>

</div>
@endsection
