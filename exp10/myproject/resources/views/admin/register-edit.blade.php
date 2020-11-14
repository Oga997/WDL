@extends('layout.master')


@section('title')
@endsection


@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-12">
         <div class="card">
          <div class="card-header">
            <h3>Edit Role for Registered User</h3>
          </div>
         <div class="card-body">
       <form action="/role-register-update/{{ $users->id }}" method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}

         <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" value="{{ $users->name }}" name="username" placeholder="Enter email">
  </div>

<div class="form-group" >
    <label>Give Role</label>
    <select name="usertype"  class="form-control">
      <option value="admin" class="form-control">Admin</option>
      <option value="normal" class="form-control">Normal</option>
      <option value="" class="form-control">None</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Update</button>
  <a href="/role-register" type="submit" class="btn btn-danger">Cancel</a>

       </form>
     </div>
     </div>
     </div>
   </div>
 </div>
@endsection

@section('scripts')
@endsection