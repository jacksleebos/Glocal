@extends('layout')



@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  {{-- href to create store --}}
  <a href="{{ route('stores.create')}}" class="btn btn-primary">Add a New Store</a></td>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Number</td>
          <td>Address</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->number}}</td>
            <td>{{$store->address}}</td>
            <td><a href="{{ route('stores.edit',$store->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('stores.destroy', $store->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
