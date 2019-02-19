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

  <a><button class="btn btn-danger">Add New Supplier</button></a>


  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Supplier Name:</td>
          <td>Address:</td>
          <td>House Number:</td>
          <td>Postal Code:</td>
          <td>City:</td>
          <td>Country:</td>
          <td>Phone Number:</td>
          <td>Email Address:</td>
          <td colspan="2">Action:</td>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{$supplier->id}}</td>
            <td>{{$supplier->supplierName}}</td>
            <td>{{$supplier->supplierAddress}}</td>
            <td>{{$supplier->supplierHousenumber}}</td>
            <td>{{$supplier->supplierPostalcode}}</td>
            <td>{{$supplier->supplierCity}}</td>
            <td>{{$supplier->supplierCountry}}</td>
            <td>{{$supplier->supplierPhone}}</td>
            <td>{{$supplier->supplierEmail}}</td>
            <td><a href="{{ route('suppliers.edit',$supplier->id)}}" class="btn btn-primary">Edit Supplier</a></td>
            <td>
                <form action="{{ route('suppliers.destroy', $supplier->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete Supplier</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection