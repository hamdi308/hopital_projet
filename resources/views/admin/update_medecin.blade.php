<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.css')
   <style>
       label{
           display: inline-block;
           width:200px;
       }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div style="padding-top:10px;">
<img  class="rounded float-right" height="300px" width="300px" src="doctorimage/{{$doctors->image_med}}"><span class="text-light font-weight-bold">Photo de Dr</span>
</div>
            <div class="container" style="padding-top:100px" align="center">
            @if(session()->has('message'))
              <div class="alert alert-success">{{session()->get('message')}}
              <button type="button" class="close" style="color:black" data-dismiss="alert">X</button>
                </div>
            @endif
            <form action="{{ url('update_medecin', $doctors->id)}}" method="post" enctype="multipart/form-data">
 @csrf

 <div class="form-row">
<div class="form-group col-md-5 mb-4">
  <label for="inputEmail4">nom de medecin</label>
  <input type="email" class="form-control" id="inputEmail4" style="color:red;" name="nom_med" placeholder="{{$doctors->nom_med}}" disabled>
</div>
<div class="form-group col-md-5 mb-4">
  <label for="inputEmail4">prenom de medecin</label>
  <input type="email" class="form-control" id="inputEmail4"  name="prenom_med" placeholder="{{$doctors->prenom_med}}" disabled>
</div>
</div>
<div class="form-group col-md-5 mb-4">
<label for="inputAddress">Specialite</label>
<input type="text" class="form-control" name="N_telephone" id="inputAddress" placeholder="{{$doctors->specialite}}" disabled>
</div>
<div class="form-group col-md-5 mb-4">
<label for="inputAddress">Numero de telephone</label><span style="color:red;">*</span>
<input type="text" class="form-control" name="N_telephone" id="inputAddress" placeholder="{{$doctors->N_telephone}}">
</div>
<div class="form-group col-md-5 mb-4">
<label for="inputAddress2">Numero de chambre</label><span style="color:red;">*</span>
<input type="text" class="form-control" id="inputAddress2" name="N_chambre" placeholder="{{$doctors->N_chambre}}">
</div>

<div class="form-row">
<div class="form-group col-md-5 mb-4">
  <label for="inputCity">photo</label><span style="color:red;">*</span>
  <input type="file"  name="image_med" class="form-control" id="inputCity">
</div>
<div class="form-group col-md-1 mb-4">
  <input type="submit" class="btn btn-success" value="Modifier" >
</div>
</div>

</form>
            </div>
        </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>