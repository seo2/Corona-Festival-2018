<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Compra tu entrada para Corona Festival, Descubre quienes ser&aacute;n parte del festival y participa por estad&iacute;a, entradas y m&aacute;s!">
        <meta name="author" content="">
        <meta name="google-site-verification" content="iD2ZolRJpDayBxD05UtblQBEh23CDPlAY4vOX_x6xck" />
        <title>Cerveza Corona</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="https://pjax.herokuapp.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script> 
		<link rel="icon" type="image/png" href="img/favicon.png" />
        <style>
            @media (min-width: 320px) and (max-width: 479px){
                .boximg{
                    width: 200px !important;
                }
            }
        </style>        
    </head>
    <body id="home">
		<div class="row">
			<div class="col-md-12" id="agegate">
				<div class="cta">
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2 col-md-10 col-md-offset-1">
							<img src="img/logo-corona.png" class="img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h1>¿ERES MAYOR DE EDAD?</h1>
						</div>
					</div>
					<div class="row">
						
                        <div class="col-xs-5 col-xs-offset-1 col-md-6 col-md-offset-0">
                            <a href="javascript:void(0);" id="si" class="btn btn-default btn-lg" onclick="ga('send', 'event', 'descubre', 'Home', 'Coronasunsets');">
                                <span class="network-name">
                                	SI
                                </span>
                            </a>
                        </div>
						
                        <div class="col-xs-5 col-md-6">
                            <a href="javascript:void(0);" id="no" class="btn btn-default btn-lg" onclick="ga('send', 'event', 'descubre', 'Home', 'Coronasunsets');">
                                <span class="network-name">
                                	NO
                                </span>
                            </a>
                        </div>
					</div>
				</div>
			</div>
			
		</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/js.cookie.js"></script>


<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-69908134-1', 'auto');
 ga('send', 'pageview');

</script>

<script>
	
	$('#si').on('click', function(){
	  	Cookies.set('oldenough', '1', { expires: 7, path: '' });
	  	window.location.href = "index.php";
	});
	$('#no').on('click', function(){
		alert('Lo sentimos, debes ser mayor de edad para acceder.');
	});
</script>	

    </body>
</html>
