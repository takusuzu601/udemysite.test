@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>レベルの新規作成</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!!Form::open(['route'=>'admin.levels.store'])!!}
            <div class="form-group">
                {!!Form::label('name','Name')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder="レベルの名前を入力してください"'])!!}
                @error('name')
                  <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>
            {!!Form::submit('Crear nivel',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
