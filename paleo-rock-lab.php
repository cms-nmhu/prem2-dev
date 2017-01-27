<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Paleomagnetic - Rock Magnetic Laboratory</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9] -->
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <!-- [endif] -->
  </head>
  <body>
    
    <?php include "header.html" ?>

    <div class="container" style="background:white">
      <h2 class="text-center" style="color:purple">Paleomagnetic - Rock Magnetic Laboratory</h2>
      <p class="col-md-12 col-xs-12">Paleomagnetic - Rock Magnetic Laboratory at NMHU allows to perform a series of magnetic studies of the different compounds. The main laboratory's equipment includes: Thermal Demagnetizer, Alternating Field Demagnetizer and Multi-Function Kappabridge.</p>
	  
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-1.jpg"><img width="100%" src="images/rock-lab-1.jpg"></a>
        <p class="text-center">7-Tesla Cryogenic Quantum Design Magnetic Measurement System (MPMS-7)</p>
      </div>	
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-2.jpg"><img width="100%" src="images/rock-lab-2.jpg"></a>
        <p class="text-center">Dynamic 15.6 m<sup>3</sup> magnetically shielded low-field room (Magnetic Measurements Ltd.)</p>
      </div>	  
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-3.jpg"><img width="100%" src="images/rock-lab-3.jpg"></a>
        <p class="text-center">Undergraduate student Billy Romero working with Thermal Demagnetizer Model TD-48-SC</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 35px 0">
        <a class="popupimage" href="images/rock-lab-4.jpg"><img width="100%" src="images/rock-lab-4.jpg"></a>
        <p class="text-center">Samples set up in Thermal Demagnetizer Model TD-48-SC</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-5.jpg"><img width="100%" src="images/rock-lab-5.jpg"></a>
        <p class="text-center">MFK1-A Multi-Function Kappabridge with CS-4 attachment for low-field susceptibility versus temperature experiments</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 35px 0">
        <a class="popupimage" href="images/rock-lab-6.JPG"><img width="100%" src="images/rock-lab-6.JPG"></a>
        <p class="text-center">JR-6A Spinner Magnetometer</p>
      </div>	  
	  <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-7.jpg"><img width="100%" src="images/rock-lab-7.jpg"></a>
        <p class="text-center">Thermal Demagnetizer Model TD-48-SC</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/rock-lab-8.jpg"><img width="100%" src="images/rock-lab-8.jpg"></a>
        <p class="text-center">D-Tech Model D-2000. Alternating field demagnetizer with ARM/PARM capabilities</p>
      </div>
    </div>
	
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">	
			<img width="110%" src="">
		</div>
	  </div>
	</div>  

    <?php include "footer.html" ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('.popupimage').click(function(event){
			event.preventDefault();
			$('.modal img').attr('src', $(this).attr('href'));
			$('.modal').modal('show');
		});
	});
	</script>
  </body>
</html>
