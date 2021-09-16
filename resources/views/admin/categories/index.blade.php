@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <a href="{{route('admin.categories.create')}}" class="btn btn-secondary btn-sm float-right">カテゴリー新規作成</a>
    <h1>カテゴリーリスト</h1>
@stop

@section('content')

    @if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit',$category)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.categories.destroy',$category)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

