@extends('layout.master')

@section('title')
News
@endsection


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="/save-news" method="post">
        {{ csrf_field() }}
      <div class="modal-body">
 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name Of Person:</label>
            <input type="text" name="nop" class="form-control" id="recipient-name">
          </div>

          <div class="">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description" id="message-text"></textarea>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
       </form>
    </div>
  </div>
</div>

 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> News
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                </h4>
                <br>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
<style type="text/css">
  .w-10p{
    width: 10% !important;
  }
</style>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th style="width:5%;">
                        Title
                      </th>
                      <th class="w-10p">
                        Name of Person
                      </th>
                      <th class="w-10p">
                       Description
                      </th>
                      <th class="w-10p">
                        Edit
                      </th>
                      <th class="w-10p">
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($news as $row)
                      <tr>        
                        <td>
                          {{ $row->title }}
                        </td>
                        <td>
                          {{ $row->nop }}
                        </td>
                        <td>
                         {{ $row->description}}
                        </td>
                        <td>
                          <a href="{{ url('news/'.$row->id)}}" class="btn btn-success">Edit</a>
                        </td>

                        <td>
                           <form action="/news-delete/{{ $row->id }}" method="post">
                         {{ csrf_field() }}
                        {{method_field('Delete') }}
                         <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
@endsection