<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Earth Materials Laboratory</title>

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
      <h2 class="text-center" style="color:purple">Earth Materials Laboratory</h2>
      <p class="col-md-12 col-xs-12">The Earth Materials Research Laboratory at Highlands maintains a GBC Mini Materials Analyzer (powder x-ray diffractometer), Franz Magnetic Separator, a Vreeland Spectroscope, five Bausch and Lomb binocular plane light microscopes, and six petrographic microscopes and accessories, including a Prior Scientific automated point counter and mechanical stage. Highlands also maintains a complete rock-cutting laboratory with a slab saw, two trim saws, various grinding wheels, a magnetic separator, a rock tumbler, and a rock splitter.</p>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
		<a class="popupimage" href="images/earth-mater-lab-1.JPG"><img width="100%" src="images/earth-mater-lab-1.JPG"></a>
        <p class="text-center">GBC Mini Materials Analyzer (powder x-ray diffractometer)</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/earth-mater-lab-2.JPG"><img width="100%" src="images/earth-mater-lab-2.JPG"></a>
        <p class="text-center">Nikon Eclipse Microscope LV100N POL</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 35px 0">
        <a class="popupimage" href="images/earth-mater-lab-3.JPG"><img width="100%" src="images/earth-mater-lab-3.JPG"></a>
        <p class="text-center">Complete rock-cutting laboratory</p>
      </div>
      <!--<div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/earth-mater-lab-4.JPG"><img width="100%" src="images/earth-mater-lab-4.JPG"></a>
        <p class="text-center"></p>
      </div>--> 
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