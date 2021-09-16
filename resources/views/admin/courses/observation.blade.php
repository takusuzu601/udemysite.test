@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>コースを掲載しない理由 :{{$course->title}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                {!!Form::open(['route'=>['admin.courses.reject',$course]])!!}
                <div class="form-group">
                    {!!Form::label('body','コースを掲載しない理由:本文')!!}
                    {!!Form::textarea('body',null)!!}

                    @error('body')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                {!!Form::submit('コースを拒否する',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop
