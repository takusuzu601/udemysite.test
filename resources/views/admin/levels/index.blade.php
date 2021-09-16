@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')

<a class="btn btn-secondary float-right" href="{{route('admin.levels.create')}}">新規作成</a>
    <h1>レベルの一覧リスト</h1>
@stop

@section('content')

@if(session('info'))
   <div class="alert alert-danger">
    {{session('info')}}
   </div>
@endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <t-body>
                    @foreach($levels as $level)
                        <tr>
                            <td>{{$level->id}}</td>
                            <td>{{$level->name}}</td>
                            <td width="10px">
                                <a  class="btn btn-primary" href="{{route('admin.levels.edit',$level)}}">edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.levels.destroy',$level)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </t-body>
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
