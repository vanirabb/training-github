@extends('layouts.master')

@section('contents')
  <div class="container d-flex align-items-center justify-content-center">
    <div class="row d-flex justify-content-center">
      <form class="form-card" method="POST" action="{{ route('book_store') }}">
        @csrf
        <div class="form-group mb-5">
          <label for="exampleInputEmail1">Book</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="book">
        </div>
        <div class="form-group mb-5">
          <label for="exampleInputPassword1">author</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="author">
        </div>
        <div class="form-group mb-4">
          <label for="exampleFormControlTextarea1">review</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review"></textarea>
        </div>
        <div class="d-flex justify-content-end mb-3">
          <button type="submit" class="button">submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection
