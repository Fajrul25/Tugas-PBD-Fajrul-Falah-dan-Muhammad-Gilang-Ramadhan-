<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>owkowkowwkow</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <link href="<?=base_url()?>assets/css/BootSideMenu.css" rel="stylesheet">
   <link href="<?=base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">
   
  <!-- HTML5 shim e Respond.js per rendere compatibile l'HTML 5 in IE8 -->
  <!-- ATTENZIONE: Respond.js non funziona se la pagina viene visualizzata in locale file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<style type="text/css">
  .user{
    padding:5px;
    margin-bottom: 5px;
  }
  #mapid { height: 480px; }
</style>
</head>
<body>

  <!--Test -->
  <div id="test">
    <h2>TUGAS UTS PBD</h2>
    <div class="list-group">
      <a href="#" class="list-group-item active">Fajrul falah 21120117120033</a>
      <a href="#" class="list-group-item">Muhammad Gilang Ramadhan 21120117140029</a>

    </div>



  </div>
  <!--/Test -->

 
  <!--Normale contenuto di pagina-->
  <div class="container">
    

    <div class="row">
      <div class="col-md-12">
          <h1>Ujian Tengah Semester</h1>       
      </div>
    </div>
	
	<div class="row">
      <div class="col-md-12">
          <div id="mapid"></div>      
      </div>
    </div>

    

  </div>
  <!--Normale contenuto di pagina-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/BootSideMenu.js"></script>
  <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>

  <script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:false});
    
	var map = L.map('mapid').setView([-6.8947, 110.6385], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-6.8947, 110.6385]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
  </script>
  
  <body>

               

</body>
</html>