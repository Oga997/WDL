@extends('layout.master')


@section('title')
@endsection


@section('content')
<style type="text/css">
  .inforide {
  box-shadow: 1px 2px 8px 0px #f1f1f1;
  background-color: white;
  border-radius: 8px;
  height: 125px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3)
}
.rideone {
  background-color: #6CC785;
  padding-top: 30px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}

.ridetwo {
  background-color: #9A75FE;
  padding-top: 30px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}

.ridethree {
  background-color: #4EBCE5;
  padding-top: 30px;
  border-radius: 8px 0px 0px 8px;
  text-align: center;
  height: 125px;
  margin-left: 15px;
}
.fontsty {
  margin-right: -15px;
}

.fontsty h2{
  color: #6E6E6E;
  font-size: 35px;
  margin-top: 15px;
  text-align: right;
  margin-right: 30px;
}

.fontsty h4{
  color: #6E6E6E;
  font-size: 25px;
  margin-top: 20px;
  text-align: right;
  margin-right: 30px;
}
</style>
<br>
 <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">

      <!-- Icon Cards-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                    <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Active Users</h4>
                    <h2>20</h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                    <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Book Available</h4>
                    <h2>120</h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                    <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Downdloads</h4>
                    <h2>50</h2>
                </div>
              </div>
            </div>
        </div>

    </div>
  </div>
</div>

        <hr>
        <div class="row mb-3">
          <div class="col-lg-3 col-md-4">

    <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><center>New News Added</center></div>
  <div class="card-body">
    <p class="card-text"><center>News Added By Muktar</center></p>
    <center><a href="#" class="btn btn-info">View</a></center>
  </div>
</div>
 <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header"><center>New Books Added</center></div>
  <div class="card-body">
    <p class="card-text"><center>New Books Added Python In Category Technical</center></p>
    <center><a href="#" class="btn btn-success">View</a></center>
  </div>
</div>
 <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><center>User Deleted</center></div>
  <div class="card-body">
    <p class="card-text"><center>2 New User Deleted</center></p>
    <center><a href="#" class="btn btn-danger">View</a></center>
  </div>
</div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <h3><center><b>USER Feedback</b></center></h3>
                <thead class="thead-inverse">
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Description</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>responsive</td>
                    <td>bootstrap</td>
                    <td>grid</td>
                  </tr>
                  <tr>
                    <td>1,002</td>
                    <td>rwd</td>
                    <td>web designers</td>
                
                    <td>responsive</td>
                  </tr>
                  <tr>
                    <td>1,003</td>
                    <td>free</td>
                    <td>open-source</td>
                    
                    <td>template</td>
                  </tr>
                  <tr>
                    <td>1,003</td>
                    <td>frontend</td>
                    <td>developer</td>
                 
                    <td>card panel</td>
                  </tr>
                  <tr>
                    <td>1,004</td>
                    <td>migration</td>
                    <td>bootstrap 4</td>
                   
                    <td>design</td>
                  </tr>
                  <tr>
                    <td>1,005</td>
                    <td>navbar</td>
                    <td>sticky</td>
                  
                    <td>header</td>
                  </tr>
                  <tr>
                    <td>1,006</td>
                    <td>collapse</td>
                    <td>affix</td>
        
                    <td>footer</td>
                  </tr>
                  <tr>
                    <td>1,007</td>
                    <td>layout</td>
                    <td>examples</td>
            
                    <td>grid</td>
                  </tr>
                  <tr>
                    <td>1,008</td>
                    <td>migration</td>
                    <td>bootstrap 4</td>
                  
                    <td>design</td>
                  </tr>
                   <tr>
                    <td>1,008</td>
                    <td>migration</td>
                    <td>bootstrap 4</td>
                  
                    <td>design</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--/row-->
@endsection

@section('scripts')
@endsection