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
            <form action="{{url('ajouter_medecin')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                
                    <label>Nom du medecin</label>
                    <input type="text" style="color:black" name="nom_med" placeholder="Entrer le nom de medecin a ajouter" required>
                
            </div>
            <div style="padding:15px">
               
                    <label>Prenom du medecin</label>
                    <input type="text" style="color:black" name="prenom_med" placeholder="Entrer le prenom de medecin a ajouter" required>
                
            </div>
            <div style="padding:15px">
            
                    <label>N° de telephone</label>
                    <input type="number" style="color:black" name="N_telephone" placeholder="Entrer le N° de telephone" required>
               
            </div>
            <div style="padding:15px">
                
                    <label>specialite du medecin</label>
                    <select style="color:black ; width:260px" name="specialite" required>
                        <option>--</option>
                      <option value="Médecine interne">Médecine interne</option>
                      <option value="Maladies infectieuses">Maladies infectieuses</option>
                      <option value="Réanimation médicale">Réanimation médicale</option>
                      <option value="Carcinologie médicale">Carcinologie médicale</option>
                      <option value="Nutrition et maladies nutritionnelles">Nutrition et maladies nutritionnelles</option>
                      <option value="Hématologie clinique">Hématologie clinique</option>
                      <option value="Endocrinologie">Endocrinologie</option>
                      <option value="Cardiologie">Cardiologie</option>
                      <option value="Néphrologie">Néphrologie</option>
                      <option value="Neurologie">Neurologie</option>
                      <option value="Pneumologie">Pneumologie</option>
                      <option value="Rhumatologie">Rhumatologie</option>
                      <option value="Gastro-entérologie">Gastro-entérologie</option>
                      <option value="Médecine physique(rééducation et réadaptation fonctionnelle)">Médecine physique(rééducation et réadaptation fonctionnelle)</option>
                      <option value="Dermatologie">Dermatologie</option>
                      <option value="Pédiatrie">Pédiatrie</option>
                      <option value="Psychiatrie">Psychiatrie</option>
                      <option value="Imagerie médicale">Imagerie médicale</option>
                      <option value="Radiothérapie carcinologique">Radiothérapie carcinologique</option>
                      <option value="Médecine légale">Médecine légale</option>
                      <option value="Médecine du travail">Médecine du travail</option>
                      <option value="Médecine préventive et communautaire">Médecine préventive et communautaire</option>
                      <option value="Anesthésie - réanimation">Anesthésie - réanimation</option>
                      <option value="Anatomie et cytologie pathologique">Anatomie et cytologie pathologique</option>
                      <option value="Médecine d'urgence">Médecine d'urgence</option>
                    </select>
                
            </div>
            <div style="padding:15px">
                
                    <label>N° de chambre</label>
                    <input type="number" style="color:black" name="N_chambre" placeholder="Entrer le N° de chambre" required>
               
            </div>
            <div style="padding:15px">
                
                    <label>image de medecin</label>
                    <input type="file" style="color:black" name="image_med" required >
               
            </div>
            <div style="padding:15px">
                    <input type="submit" class="btn btn-success" >
            </div>
</form>
            </div>
        </div>
    <!-- container-scroller -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>