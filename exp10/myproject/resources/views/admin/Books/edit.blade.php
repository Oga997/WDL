@extends('layout.master')


@section('title')
@endsection


@section('content')
<div class="container">
   <div class="row">
     <div class="col-md-12">
         <div class="card">
          <div class="card-header">
            <h3>Edit Books</h3>
          </div>
          <form action="{{ url('books-update/'.$books->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Book Name:</label>
            <input type="text" name="bk_nm" class="form-control" value="{{ $books->bk_nm }}">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Book Category:</label>
            <select name="bk_catg" class="form-control" value="{{ $books->bk_catg }}">
            <option>Technical</option>
            <option>Biography</option>
            <option>Comic</option>
            <option>Philosphy</option>
            <option>Social Science</option>
            <option>Engineering</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Author Name:</label>
            <input type="text" name="bk_aut" class="form-control" value="{{ $books->bk_aut }}">
          </div>

          <div class="">
            <label for="message-text" class="col-form-label">Book Pdf:</label>
            <input type="file" class="form-control" name="bk_pd" value="{{ $books->bk_pd }}">
          </div>

      </div>

      <div class="modal-footer">
        <a href="{{ url('books')}}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
       </form>
         </div>
       </div>
     </div>
   </div>
@endsection





@section('scripts')
@endsection