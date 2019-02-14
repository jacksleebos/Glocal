@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Category
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
      <form method="post" action="{{ route('stores.store') }}">

        <div class="form-group">
              @csrf
              <label for="name">Store Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
            <label for="number">Store PhoneNumber:</label>
            <input type="text" class="form-control" name="number"/>
        </div>

          <div class="form-group">
              <label for="address">Store Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>


          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
