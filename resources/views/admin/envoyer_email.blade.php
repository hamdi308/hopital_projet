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
        <div class="container" style="padding-top:100px" align="center">
            @if(session()->has('message'))
              <div class="alert alert-success">{{session()->get('message')}}
              <button type="button" class="close" style="color:black" data-dismiss="alert">X</button>
                </div>
            @endif
            <form action="{{url('envoyer_email',$avis->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                
                    <label>A Monsieur</label>
                    <input type="text" style="color:black" name="greeting" placeholder="..." required>
                
            </div>
            <div style="padding:15px">
               
                    <label>contenu de mail</label>
                    <textarea type="text" style="color:black" width="100px" height="50px" name="body" placeholder="..." required></textarea>
                
            </div>
            <div style="padding:15px">
            
                    <label>Text d'action</label>
                    <input type="text" style="color:black" name="actiontext" placeholder="..." >
               
            </div>
            <div style="padding:15px">
                
                    <label>URL's</label>
                    <input type="text" style="color:black" name="actionurl" placeholder="..." >
               
            </div>
            <div style="padding:15px">
                
                    <label>phrase de fin e-mail</label>
                    <input type="text" style="color:black" name="endpart" placeholder="..." >
               
            </div>
            <div style="padding:15px">
                    <input type="submit" value="Envoyer mail" class="btn btn-success" >
            </div>
</form>
            </div>
        </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>