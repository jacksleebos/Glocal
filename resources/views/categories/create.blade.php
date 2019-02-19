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
      <form method="post" action="{{ route('categories.store') }}">

        <div class="form-group">
              @csrf
              <label for="name">Category name:</label>
              <input type="text" class="form-control" name="categoryName"/>
          </div>

          <div class="form-group">
              <label for="description">Category description:</label>
              <input type="text" class="form-control" name="categoryDescription"/>
          </div>


          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>

@endsection
