@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Supplier
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
      <form method="post" action="{{ route('suppliers.update', $supplier->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Supplier Name:</label>
          <input type="text" class="form-control" name="supplierName" value={{ $supplier->supplierName }} />
        </div>
        <div class="form-group">
          <label for="name">Address:</label>
          <input type="text" class="form-control" name="supplierAddress" value={{ $supplier->supplierAddress }} />
        </div>
        <div class="form-group">
          <label for="name">House Number:</label>
          <input type="text" class="form-control" name="supplierHousenumber" value={{ $supplier->supplierHousenumber }} />
        </div>
        <div class="form-group">
            <label for="name">Postal Code:</label>
            <input type="text" class="form-control" name="supplierPostalcode" value={{ $supplier->supplierPostalcode }} />
          </div>
          <div class="form-group">
            <label for="name">City:</label>
            <input type="text" class="form-control" name="supplierCity" value={{ $supplier->supplierCity }} />
          </div>
          <div class="form-group">
            <label for="name">Country:</label>
            <input type="text" class="form-control" name="supplierCountry" value={{ $supplier->supplierCountry }} />
          </div>
          <div class="form-group">
            <label for="name">Phone Number:</label>
            <input type="text" class="form-control" name="supplierPhone" value={{ $supplier->supplierPhone }} />
          </div>
          <div class="form-group">
            <label for="name">Email Address:</label>
            <input type="text" class="form-control" name="supplierEmail" value={{ $supplier->supplierEmail }} />
          </div>




        <button type="submit" class="btn btn-primary">Update Supplier</button>
      </form>
  </div>
</div>
@endsection