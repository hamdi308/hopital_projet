<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="page-section">
    <div class="container">
      <div class="text-center mb-5 wow fadeInUp">
      <h1 >Nos medecin</h1>
      <a ><span style="font-size:60px;" class="	fa fa-user-md"></span></a>
      </div>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctors as $doctor)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctor->image_med}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctor->nom_med." ".$doctor->prenom_med}}</p>
              <span class="text-sm text-grey">{{$doctor->specialite}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
