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
				<div id="info" class="col-md-2 col-md-offset-5 info">
	        		<div class="aideservice">
	        			<h2>DSP Services</h2><p>Le services d'aide à domicile: Nous sommes un services agrée qualité par l'Etat qui propose des services aux personnes dans tous les ages de la vie</p>
	        		</div>
	        		<div class="aidenettoyage">
	        			<h2>DSP Nettoyage</h2><p>Nous vous proposons une panoplie diversifiée de prestations de nettoyage en tout genre.</p>
	        		</div>
	        		<div class="aideinfo">
	        			<h2>DSP info</h2><p>Développement de site web, application et sécurite.</p>
	        		</div>
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
	<footer class="tm-footer">
                <p class="tm-copyright-text">Copyright © 2016 DSP</p>
    </footer>
        <script src="js/bootstrap.min.js"></script>     
        <script src="js/jquery-3.1.1.min.js"></script>     
        <script>

        $(document).ready(function(){
            $('.info,.aideservice,.aidenettoyage,.aideinfo').hide();
            $('.un').hover(function(){
            	$('.info').show();
            	$('.aidenettoyage').show(); },
            	function(){
                	$('.info').hide(); 
                	$('.aidenettoyage').hide();});
    	
	        $('.deux').hover(function(){
	        	$('.info').show();
	        	$('.aideservice').show(); },
	        	function(){
	            	$('.info').hide();
	            	$('.aideservice').hide(); });
    	
	        $('.trois').hover(function(){
	        	$('.info').show();
	        	$('.aideinfo').show(); },
	        	function(){
	            	$('.info').hide();
	            	$('.aideinfo').hide(); });
            
        });
        
       	 $(window).on('load', function() {
                $('body').addClass('loaded');
                
                
                           
         });
       	
        </script>
        
</body>
</html>
