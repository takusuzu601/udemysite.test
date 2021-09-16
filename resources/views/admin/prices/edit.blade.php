@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>料金編集画面</h1>
@stop

@section('content')
@if(session('info'))
   <div class="alert alert-success">
       {{session('info')}}
   </div>
@endif
   <div class="card">
       <div class="card-body">
           {!!Form::model($price,['route'=>['admin.prices.update',$price],'method'=>'put'])!!}
            <div class="form-group">
                {!!Form::label('name','Name')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'料金名を入力してください'])!!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!!Form::label('value','値')!!}
                {!!Form::number('value',null,['class'=>'form-control','placeholder'=>'料金を入力してください'])!!}
                @error('value')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!!Form::submit('料金を設定する',['class'=>'btn btn-primary'])!!}
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
