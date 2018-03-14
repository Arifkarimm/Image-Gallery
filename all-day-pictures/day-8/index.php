<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="_assets/magnifix-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
		<link href="_assets/css/main.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="_assets/css/bootstrap.min.css">
		<title>Day-8 Gallery</title>

</head>

<body>

	<section class="container qt-photo-gallery">


			<div class="row">


			<?php

/* ========================================================================== */

			 $qt_folder_name = 'images'; // change this to a folder of your choice for images
			 $qt_handle = opendir( dirname( realpath( __FILE__ ) ) . '/' . $qt_folder_name . '/' );



/* ========================================================================== */

			$qt_counter = 0;

			while( $qt_file = readdir( $qt_handle ) ) :


				if( $qt_file !== '.' && $qt_file !== '..' && !stristr($qt_file,'thumbs.db')) :

					$qt_counter++;

					$qt_file_path = $qt_folder_name . '/' . $qt_file;

					?>

<!-- ======================================================================= -->

			<div class="col-sm-6 col-md-4 qt-photo-gallery-item qt-image-no-<?php echo $qt_counter; ?>">
				<a class="qt-photo-gallery-item-link" href="<?php echo $qt_file_path; ?>" title="File name: <?php echo $qt_file; ?>">
					<div class="qt-photo-gallery-item-image-wrapper">
						<img src="<?php echo $qt_file_path; ?>" class="qt-photo-gallery-item-image" />
					</div>

				</a>
			</div>

<!-- ======================================================================= -->

					<?php

					if( $qt_counter == 3 ) {
						$qt_counter = 0;
					}

				endif;

			endwhile;

/* ========================================================================== */

			?>


	      </div>

<!-- ======================================================================= -->
	      <div class="row">
	      	<div class="col-md-12">
		      	<div class="btn btn-info" role="button">
		      		<?php
					  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
					   echo "<a href='$url'>zurück</a>";
					?>
				</div>
	      	</div>
	      </div>
<!-- ======================================================================= -->
		  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- ======================================================================= -->

	</section>






		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		 <!-- <script src="_assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>  -->
		 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="_assets/magnifix-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<script src="_assets/js/main.js" type="text/javascript"></script>



  </body>
</html>
