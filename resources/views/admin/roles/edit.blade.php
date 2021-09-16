@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>Roleの編集</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($role,['route'=>['admin.roles.update',$role],'method'=>'put']) !!}

        @include('admin.roles.partials.form')

        {!!Form::submit('編集する',['class'=>'btn btn-primary mt-2'])!!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop