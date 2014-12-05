<?php

require_once 'functions.php';
$title='Encrypted Text ';
$msg= 'is';
$en= Encrypt('Feras');
$result='Example: Feras = '.$en;

	if (isset($_POST['encrypt'])) {
		# code...
		$encText=Encrypt($_POST['target_text']);
		$title= 'Encrypted Success';
		$msg= 'Resutl: ';
		$result= $encText;

	}

?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>enzo</title>

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.css"  rel="stylesheet">
		<link href="assets/css/enzo.css"  rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		 <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
    
	</head>
	<body>



		<div class="container center-block">

		<h1 class="text-center"> { Hello World, I'm Enzo } </h1>
		<hr>

			<div class="row">

				<div class="col-xs-12">

					<div class="panel panel-default">
						  <div class="panel-body">
							<form action="" method="POST" role="form">
									<div class="form-group">
										<input class="form-control input-md" type="text" name="target_text" id="inputLarge" placeholder="Write any text to encrypt it." required>
										<br />
										<button type="submit" class="btn btn-primary" name="encrypt" title="Encrypt Text">Encrypt Text</button>
									</div>
							</form>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong><?php echo $title; ?></strong> <?php echo $msg; ?> => { <span class="label label-info"><?php echo $result;?></span> }
							</div>
						 </div>
					</div>


					<div class="panel panel-info">
						  <div class="panel-heading">
								<h3 class="panel-title">Information</h3>
						  </div>
						  <div class="panel-body">
						  		Note:

								<ul>
									<li>Write text then press ( <span class="label label-info">'Encrypt Text'</span> ).</li>
									<li>In this version you can encrypt text for ( <span class="label label-info">md5 encryption</span> ).</li>
								</ul>

								<hr>

								<h4>Contact me:</h4>
								<ul>
									<li>Facebook: <a href="https://www.fb.com/iFeras93">iFeras93</a></li>
									<li>Twitter: <a href="https://twitter.com/iferas93">iFeras93</a></li>
									<li><a href="mailto:Feras-az3eem@hotmail.com">Send Email</a></li>
								</ul>

								<h3 class="text-center">Copyright © iFeras93</h3>

						  </div>
					</div>





				</div>

			</div>

		</div>


		<!-- jQuery -->
    	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>