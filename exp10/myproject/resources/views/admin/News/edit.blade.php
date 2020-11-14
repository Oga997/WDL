@extends('layout.master')


@section('title')
@endsection


@section('content')
<div class="container">
   <div class="row">
     <div class="col-md-12">
         <div class="card">
          <div class="card-header">
            <h3>Edit News</h3>
          </div>
          <form action="{{ url('news-update/'.$news->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="modal-body">
 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $news->title }}">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name Of Person:</label>
            <input type="text" name="nop" class="form-control" value="{{ $news->nop }}">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description">{{ $news->description }}</textarea>
          </div>

      </div>

      <div class="modal-footer">
        <a href="{{ url('news')}}" class="btn btn-secondary">Back</a>
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