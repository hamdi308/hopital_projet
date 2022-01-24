<!DOCTYPE html>
<html lang="en">
  <head>
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
      <!-- partial -->
      <div class="container-fluid col-md-12">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
            <div style="padding-top:75px ;padding-left:0px;position:relative">
          <table style="width:50%;border: 1px  white;">
         <tr style="width:50%;background-color:black;border: 1px solid white;" >
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">id</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">id patient</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">nom patient</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">prenom patient</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">email patient</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">N° tel patient</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">date</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">medecin</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">message</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">Status</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">décision</th>
         <th style="padding:25px;font-size:20px;color:white; border: 1px solid white;">Envoyer Notification</th>

         </tr>
         @foreach($appointments as $appointment)
         <tr style="width:50%; background-color:black;border: 1px solid white;">
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->id}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->user_id}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->user_nom}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->user_prenom}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->user_email}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->user_tel}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->date}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->medecin}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->message}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;">{{$appointment->status}}</td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;"><div class="row btn-group"><a class="btn btn-success" href="{{ url('modifier_status', $appointment->id) }}">approuver</a>
             <a onclick="return confirm('êtes-vous sûr de rejecter ce status')" class="btn btn-danger" href="{{ url('rejecter_status', $appointment->id) }}">rejecter</a></div></td>
             <td style="padding:25px;font-size:20px;color:white; border: 1px solid white;"><a class="btn btn-primary" href="{{ url('envoyer_email', $appointment->id) }}">Saisie</a>
         </tr>
         @endforeach

     </table>
        </div>
      </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>