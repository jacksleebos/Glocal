@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Supplier
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('suppliers.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Supplier name:</label>
              <input type="text" class="form-control" name="supplierName"/>
          </div>
          <div class="form-group">
              <label for="name">Address:</label>
              <input type="text" class="form-control" name="supplierAddress"/>
          </div>
          <div class="form-group">
              <label for="name">Housenumber:</label>
              <input type="text" class="form-control" name="supplierHousenumber"/>
          </div>
          <div class="form-group">
            <label for="name">Postal Code:</label>
            <input type="text" class="form-control" name="supplierPostalcode"/>
        </div>
          <div class="form-group">
            <label for="name">City:</label>
            <input type="text" class="form-control" name="supplierCity"/>
        </div>
        <div class="form-group">
            <label for="name">Country:</label>
            <input type="text" class="form-control" name="supplierCountry"/>
        </div>
        <div class="form-group">
            <label for="name">Phone Number:</label>
            <input type="text" class="form-control" name="supplierPhone"/>
        </div>
        <div class="form-group">
            <label for="name">Email Address:</label>
            <input type="text" class="form-control" name="supplierEmail"/>
        </div>
          <button type="submit" class="btn btn-primary">Add Supplier</button>
      </form>
  </div>
</div>
@endsection