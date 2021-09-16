@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>カテゴリーの編集</h1>
@stop

@section('content')
@if(session('info'))
 <div class="alert alert-success">
     {{session('info')}}
 </div>
@endif
     <div class="card">
         <div class="card-body">
             {!!Form::model($category,['route'=>['admin.categories.update',$category],'method'=>'put'])!!}
             <div class="form-group">
                {!!Form::label('name','Nombre')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'カテゴリー名を入力する'])!!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
             </div>
             {!!Form::submit('カテゴリーの更新',['class'=>'btn btn-primary'])!!}
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
