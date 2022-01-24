<nav class="navbar navbar-expand-lg navbar-light shadow-sm" >
      <div class="container">
        <a class=" navbar-brand" style="color:#E5A4A4; margin-left:-250px;" href="#"><span class="text-danger">One</span>-Health</a>
        <div class="collapse navbar-collapse" id="navbarSupport" >
          <ul class="navbar-nav ml-auto" style="padding-left: 100px " >
            <li class="nav-item active" >
              <a class="nav-link" href="index.html" style="padding-right: 60px ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html" style="padding-right: 42px ">About Us</a>
            </li>
           
          
            <li class="nav-item">
              <a class="nav-link" href="contact.html" style="padding-right: 50px ">Contact</a>
            </li>
            <li class="nav-item">
            <form action="#">
          <div class="input-group input-navbar" style="color:red; margin-left:100px; position:relative">
            
            <input type="text" class="form-control"  placeholder="chercher..." aria-label="Username" aria-describedby="icon-addon1">

              <button class="input-group-text" style="color:red;" href="#"  id="icon-addon1"><span class="mai-search"></span></button>
            
          </div>
          
        </form>
        </li>

            @if(Route::has('login'))
             @auth 
             <li class="nav-item">
              <a class="nav-link" href="doctors.html" style="padding-right: 42px ">Doctors</a>
            </li>
             <li class="nav-item" >
              <a class="nav-link" href="{{url('mes_avis')}}">Mes-Avis</a>
            </li>
            <div>
            <x-app-layout ></x-app-layout>      
            </div>
            @else
            <li class="nav-item" style="padding-left:60px" >
              <a class="btn btn-danger " href="{{ route('login') }}" >Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger ml-lg-3" href="{{ route('register') }}" >Register</a>
            </li>
                          
            </div>
             @endauth 
            @endif
            <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a style="color:#4267B2" href="#"><span class="mai-logo-facebook-f"></span></a>
              <a style="color:#E1306C;" href="#"><span class="mai-logo-instagram"></span></a>
              <a style="color:#1DA1F2;" href="#"><span class="mai-logo-twitter"></span></a>
            </div>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>