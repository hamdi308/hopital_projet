<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <script src="bootstrap-icons-1.7.2/trash.svg"></script>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    @include('user.navbar')
  </header>
 <div align="center" style="padding:70px;">
     <table style="border: 1px solid white;border: 1px solid white;">
         <tr style="background-color:black;border: 1px solid white;" align="center">
         <th style="padding:25px;font-size:20px;color:white;border: 1px solid white;">Nom de medecin</th>
         <th style="padding:25px;font-size:20px;color:white;border: 1px solid white;">Date</th>
         <th style="padding:25px;font-size:20px;color:white;border: 1px solid white;">Avis</th>
         <th style="padding:25px;font-size:20px;color:white;border: 1px solid white;">Status</th>

         </tr>
         @foreach($appointments as $appointment)
         <tr style="background-color:black;">
             <td style="padding:25px;font-size:20px;color:white;border: 1px solid white;">{{$appointment->medecin}}</td>
             <td style="padding:25px;font-size:20px;color:white;border: 1px solid white;">{{$appointment->date}}</td>
             <td style="padding:25px;font-size:20px;color:white;border: 1px solid white;">{{$appointment->message}}</td>
             <td style="padding:25px;font-size:20px;color:white;border: 1px solid white;">{{$appointment->status}}</td>
             <td style="border: 1px solid white;"><a onclick="return confirm('êtes-vous sûr de supprimer ceci')" class="btn btn-danger" href="{{ url('supprimer_avis', $appointment->id) }}">Supprimer</a></td>
         </tr>
         @endforeach

     </table>
 </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
