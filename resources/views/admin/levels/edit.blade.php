@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>UdemySite</h1>
@stop

@section('content')

@if(session('info'))
   <div class="alert alert-success">
    {{session('info')}}
   </div>
@endif
    <div class="card">
        <div class="card-body">
            {!!Form::model($level,['route'=>['admin.levels.update',$level],'method'=>'put'])!!}
            <div class="form-group">
                {!!Form::label('name','Name')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder="レベルの名前を入力してください"'])!!}
                @error('name')
                  <span class="text-danger text-sm">{{$message}}</span>
                @enderror
            </div>
            {!!Form::submit('レベルを更新する',['class'=>'btn btn-primary'])!!}
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
