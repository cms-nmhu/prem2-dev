<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Computational Science Laboratory</title>

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
      <h2 class="text-center" style="color:purple">Computational Science Laboratory</h2>
      <p class="col-md-12 col-xs-12">High-perfomance computational science laboratory includes multiple setups of computers powered by NVIDIA Tegra K1 boards suitable for computational studies of plasmonic meta-materials.</p> 
	  <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
		<a class="popupimage" href="images/comp-lab-1.jpg"><img width="100%" src="images/comp-lab-1.jpg"></a>
        <p class="text-center">High-perfomance computational laboratory</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/comp-lab-2.jpg"><img width="100%" src="images/comp-lab-2.jpg"></a>
        <p class="text-center">NVIDIA Tegra K1 Board</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/comp-lab-3.jpg"><img width="100%" src="images/comp-lab-3.jpg"></a>
        <p class="text-center">Dell Cluster</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/comp-lab-4.JPG"><img width="100%" src="images/comp-lab-4.JPG"></a>
        <p class="text-center">Graduate students Jared Leyba, Luis Garcia and Rosario Vasquez working on computational studies of plasmonic meta-materials</p>
      </div>
      <div class="col-md-6 col-xs-12" style="margin:0 0 10px 0">
        <a class="popupimage" href="images/comp-lab-5.JPG"><img width="100%" src="images/comp-lab-5.JPG"></a>
        <p class="text-center">High-performance computing cluster</p>
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