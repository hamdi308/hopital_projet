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
        
        <div class="container-fluid ">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
            
            <div class="container" style="padding-top:100px; padding-left:0px;padding-right:1500px" >
            <table style="border: 1px solid white;">
         <tr style="background-color:black;border: 1px solid white;" >
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">id</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">nom</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">prenom</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">N° telephone</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">specialite</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">N° chambre</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">Options</th>

         </tr>
         @foreach($doctors as $doctor)
         <tr style="background-color:black;border: 1px solid white;">
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->id}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->nom_med}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->prenom_med}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->N_telephone}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->specialite}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$doctor->N_chambre}}</td>
             <td><div class="btn-group" role="group">
            <a class="btn btn-success btn-sm" href="{{ url('update_medecin', $doctor->id) }}"  >Mise a jour</a>
            <a class="btn btn-danger btn-sm" href="{{ url('supprimer_medecin', $doctor->id) }}" onClick="return confirm('voulez vous supprimer ce medecin ')"
 >Supprimer</a>
            <a class="btn btn-primary btn-sm" href="{{ url('profil_med', $doctor->id) }}"  >afficher profile</a>
            </div></td>
         @endforeach

     </table>
            </div>
        </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>