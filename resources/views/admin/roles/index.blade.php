@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>Lista de routes</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-primary" role="alert">
            <strong>Well done!</strong>{{session('info')}}
        </div>
    @endif

  <div class="card">
      <div class="card-header">
          <a href="{{route('admin.roles.create')}}">Crear curso</a>
      </div>
      <div class="card-body">
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th colspa="2"></th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{route('admin.roles.edit' , $role)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                   @empty
                   <tr colspan="4">
                       <td>No kennsakukekkaga arimasenn</td>
                   </tr>

                  @endforelse
              </tbody>
          </table>
      </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop