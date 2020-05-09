@extends('backend.template')
@section('title')
    Quản Lý Loại
@endsection
@section('content')
    

<table class="table table-dark my-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($list_cat as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->created_by }}</td>

          </tr>
        @endforeach
     
      
    </tbody>
  </table>
@endsection