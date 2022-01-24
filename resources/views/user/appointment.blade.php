<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Votre-Avis</h1>

      <form class="main-form" action="{{url('appointement')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="user_nom" placeholder="nom">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="user_prenom" placeholder="prenom">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="user_email" placeholder="adresse Email..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="medecin" id="departement" class="custom-select">
            <option value="general">selectionne un medecin</option>
              @foreach($doctors as $doctor)
              <option value="general">{{$doctor->nom_med."  (".$doctor->specialite.")"}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="user_tel" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-danger mt-3 wow zoomIn">Envoyer</button>
      </form>
    </div>
  </div> <!-- .page-section -->