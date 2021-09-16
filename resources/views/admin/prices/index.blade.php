@extends('adminlte::page')

@section('title', 'UdemySite')

@section('content_header')
    <a class="btn btn-secondary" href="{{route('admin.prices.create')}}">新規作成</a>
    <h1>PRICE価一覧</h1>
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
              <tbody>
                  @foreach($prices as $price)
                  <tr>
                      <td>{{$price->id}}</td>
                      <td>{{$price->name}}</td>
                      <td width="90px"><a class="btn btn-primary" href="{{route('admin.prices.edit',$price)}}">編集</a></td>
                      <td width="90px">
                          <form action="{{route('admin.prices.destroy',$price)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">削除</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
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
