@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <h1>コースの審査画面</h1>
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
                     <th>Name</th>
                     <th>Categoria</th>
                     <th></th>
                 </thead>
                 <tbody>
                     @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->title}}</td>
                            <td>{{$course->category->name}}</td>
                            <td>
                                <a href="{{route('admin.courses.show',$course)}}" class="btn btn-primary">内容確認</a>
                            </td>
                        </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>

         <div class="card-footer">
             {{$courses->links('vendor.pagination.bootstrap-4')}}
         </div>
     </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
