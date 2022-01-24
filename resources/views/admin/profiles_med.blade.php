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
       .pp {
        background-color: #191C23;
        padding-top: 10px;
        padding-left: 10px;
    }
   </style>
   <link rel="stylesheet" href="assets/css/med_profil.css" type="text/css">
  </head>
  <body class="pp">
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
        
        <div class="container-fluid ">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
            
        <div class="container rounded bg-white mt-5 mb-5 ">
    <div class="row pp" >
        <div class="col-md-3 border-right">
        <td>  <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded float-right" height="300px" width="300px" src="{{ URL::to('/') }}/doctorimage/{{$doctors->image_med}}"><span class="text-light font-weight-bold">Dr {{$doctors->nom_med." ".$doctors->nom_med}}</span></div>
      
    </div>
        <div class="col-md-5 border-right" >
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3" >
                    <h4 class="text-light text-right">Profile de Dr {{$doctors->nom_med." ".$doctors->nom_med}}</h4>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="text-light labels">Nom</label><input type="text" class="form-control text-dark" placeholder="Nom" value="{{$doctors->nom_med}}" disabled></div>
                    <div class="col-md-6"><label class="text-light labels">Prenom</label><input type="text" class="form-control text-dark" value="{{$doctors->prenom_med}}" placeholder="Prenom"  disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="text-light labels">Numero de Telephone</label><input type="text" class="form-control text-dark" placeholder="enter phone number" value="{{$doctors->N_telephone	}}" disabled></div>
                    <div class="col-md-12"><label class="text-light labels">Specialite</label><input type="text" class="form-control text-dark" placeholder="education" value="{{$doctors->specialite}}" disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="text-light labels">Numero de chambre</label><input type="text" class="form-control text-dark" placeholder="country" value="{{$doctors->N_chambre}}" disabled></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
        </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>