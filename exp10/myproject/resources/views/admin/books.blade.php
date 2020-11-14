@extends('layout.master')


@section('title')
BOOKS
@endsection


@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="/save-books" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="modal-body">
 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Book Name:</label>
            <input type="text" name="bk_nm" class="form-control">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Book Category:</label>
            <select name="bk_catg" class="form-control">
            <option>Technical</option>
            <option>Biography</option>
            <option>Comic</option>
            <option>Philosphy</option>
            <option>Social Science</option>
            <option>Engineering</option>
          </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Author Name:</label>
            <input type="text" name="bk_aut" class="form-control">
          </div>
          <div class="">
            <label for="recipient-name" class="col-form-label">Book Pdf:</label>
            <input type="file" name="bk_pd">
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
                <h4 class="card-title"> Books
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                </h4>
                <br>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>
                        Book Name
                      </th>
                      <th>
                        Book Category
                      </th>
                      <th>
                       Author Name
                      </th>
                      <th>
                        Book Pdf
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($books as $row)
                      <tr>        
                        <td>
                          <div style="height:100px;width:120px;">
                          {{ $row->bk_nm }}
                        </div>
                        </td>

                        <td>
                          {{ $row->bk_catg }}
                        </td>
                        <td>
                          <div style="height:100px;width:100px;">
                         {{ $row->bk_aut}}
                       </div>
                        </td>
                        <td>
                            <div style="height:100px;width:160px;">
                         {{ $row->bk_pd}}
                       </div>
                        </td>
                        <td>
                          <a href="{{ url('books/'.$row->id)}}" class="btn btn-success">Edit</a>
                        </td>

                        <td>
                           <form action="/books-delete/{{ $row->id }}" method="post">
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
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>
@endsection