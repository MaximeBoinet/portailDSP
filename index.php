<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portail DSP</title>
	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
	    <div id="content">
	    	<div class="row">
	    		<div class="col-md-4 col-md-offset-4">
	    			<div id="dspico" class="ico deux"><img class="img-responsive" src="picmg/DSP SERVICES 2015.gif"></div>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4">
					<div id="dspico" class="ico un"><img class="img-responsive" src="picmg/DSPnettoyageLOGO.PNG"></div>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div id="dspico" class="ico trois"><img class="img-responsive" src="picmg/DSPnettoyageLOGO.PNG"></div>
				</div>
			</div>
	        <div class="row">
	        	<div id="loader-wrapper">
	            
		            <div id="loader"></div>
		            <div class="loader-section section-left"></div>
		            <div class="loader-section section-right"></div>
	
	        	</div>
	        </div>
        </div>
	</div> 
        <script src="js/bootstrap.min.js"></script>     
        <script src="js/jquery-3.1.1.min.js"></script>     
        <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
        
       	 $(window).on('load', function() {
                $('body').addClass('loaded');
                           
            });

        </script>
        
</body>
</html>
