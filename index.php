<?php
  include "languages.php"; 
?>
<html lang="<?php echo $lang['SITE_LANG']; ?>" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title><?php echo $lang['TITLE']; ?></title>  

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="title" content= "<?php echo $lang['TITLE'];?>">
  <meta name="description" content= "<?php echo $lang['INFO'];?>">
  <meta name="keywords" content= "dzieje khorinis the history of khorinis soulfire gothic gothic2 noc kruka piranha bytes premiera night of the raven" />
  
  <meta property="og:image" content="img/company_og_<?php echo $lang['SITE_LANG'];?>.png" />
  
  <link href="https://fonts.googleapis.com/css?family=Metamorphous" rel="stylesheet"> 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/mobile.css" />
  <link rel="stylesheet" href="css/lightbox.css" />   

  <link rel="shortcut icon" href="img/favicon.ico" /> 

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/jquery.scrollme.js"></script>

  <script src="js/parallax.js"></script>
  <script src="js/stickymenu.js"></script>
  <script src="js/scroll.js"></script>
  <script src="js/modernizr.custom.js"></script>  
  
  <script src="/js/ads.js"></script>
</head>  

<script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
</script> 
	
<body>
  <?php include_once("google_analytics.php") ?>

  <!-- <div class="se-pre-con"> <div class="loading"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </br> </br> <?php //echo $lang['ADBLOCK_WARNING_LOADING']; ?> </div> </div> -->
  
  <a id="top" class="anchor magnetic"></a>
  <div class="top" data-parallax="scroll" data-image-src="img/bg.jpg"> 
    <div class="bar-top"><?php echo $lang['HELLO']; ?> | <?php echo $lang['SITE_URL']; ?> <span class="fr"><?php echo $lang['SITE_EMAIL']; ?></span></div>
    <div class="social-bar">  
      <a href="https://www.facebook.com/dziejekhorinis/" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'facebook', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/facebook.png"></a>
	  
	   <?php 
		if ($lang['SITE_LANG'] == 'ru') {
			?><a href="http://vk.com/gothic2_historyofkhorinis" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'vk', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/vk.png"></a><?php 
		}		  
	   ?>
	  
      <a href="https://www.youtube.com/c/dziejekhorinismod" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'youtube', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/youtube.png"></a>
      <a href="http://www.moddb.com/mods/the-history-of-khorinis" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'moddb', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/moddb.png"></a>
    </div>
	
    <div class="lang-bar">
      <a href="http://dzieje-khorinis.pl" onClick="ga('send', 'event', 'lang', 'pl');"><img src="img/lang/pl.jpg"></a>
      <a href="http://thehistoryofkhorinis.com/?lang=en" onClick="ga('send', 'event', 'lang', 'en', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/en.jpg"></a>
	  <a href="http://thehistoryofkhorinis.com/?lang=de" onClick="ga('send', 'event', 'lang', 'de', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/ge.jpg"></a>     
	  <a href="http://thehistoryofkhorinis.com/?lang=sk" onClick="ga('send', 'event', 'lang', 'sk', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/sk.jpg"></a>     
	  </br>
      <a href="http://thehistoryofkhorinis.com/?lang=ru" onClick="ga('send', 'event', 'lang', 'ru', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/ru.jpg"></a>
      <a href="http://thehistoryofkhorinis.com/?lang=cs" onClick="ga('send', 'event', 'lang', 'cs', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/cs.jpg"></a>
	  <a href="http://thehistoryofkhorinis.com/?lang=it" onClick="ga('send', 'event', 'lang', 'it', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/it.jpg"></a>
	  <a href="http://thehistoryofkhorinis.com/?lang=sr" onClick="ga('send', 'event', 'lang', 'sr', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/lang/sr.jpg"></a>
    </div>
	
    <div class="top-container scrollme">	 
      <img src="img/company_<?php echo $lang['SITE_LANG']; ?>.png" id="logo"> 
      <p><?php echo $lang['INFO']; ?></p>	  
	  
	  <a href="#intro" class="arrows white"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>    
  </div>
         
  <script>
	jQuery(document).ready(function(){
        jQuery('#hideshow').on('click', function(event) {        
             jQuery('#hide').toggle('hide');
        });
    });
  </script>           
  
	<div id="block" class="modal">
		<div class="modal-content">	
			<span class="close">&times;</span>
			<h1 style = "font-size: 2.5em;"><font face = "Helvetica"> <?php echo $lang['ADBLOCK_WARNING_T']; ?> </font></h1>
			<p style = "font-size: 1.5em;"> <font color = "black"> <?php echo $lang['ADBLOCK_WARNING_1']; ?></font> </p>		
		</div>
	</div>
	
	<script>
		document.getElementsByClassName("close")[0].onclick = function() {
			document.getElementById('block').style.display = "none";
		}
		
		if (window.canRunAds === undefined) {        
			document.getElementById('block').style.display = "block";
		} else {
			document.getElementById('block').style.display = "none";
		}
    </script>
	
  <div class="menu" id="stickyheader">
    <nav>
      <ul>
        <li id="hideshow"><i class="fa fa-bars" aria-hidden="true"></i> MENU</li> 
        <div id="hide">                        
        <li><a href="#intro"><?php echo $lang['INTRO_T']; ?></a></li>
        <li><a href="#features"><?php echo $lang['FEATURES_T']; ?></a></li>
        <li><a href="#story"><?php echo $lang['STORY_T']; ?></a></li>
        <li><a href="#team"><?php echo $lang['TEAM_T']; ?></a></li>
        <li><a href="#gallery" onClick="ga('send', 'event', 'insite', 'gallery', '<?php echo $lang['SITE_LANG']; ?>');"><?php echo $lang['GALLERY_T']; ?></a></li>
        <li><a href="#download" onClick="ga('send', 'event', 'insite', 'download', '<?php echo $lang['SITE_LANG']; ?>');"> <?php echo $lang['DOWNLOAD_T'] ?></a></li>
        <li><a href="http://dzieje-khorinis.pl/forum" target = "_blank" onClick="ga('send', 'event', 'socialmedia', 'forum', '<?php echo $lang['SITE_LANG']; ?>');"> <?php echo $lang['FORUM'] ?></a></li>
        </div>
      </ul>
    </nav>
  </div>      
  
  <div class="container" id="to">
  
    <a id="intro" class="anchor"></a>
	
    <div>
      <img src="img/knights.png" align="left" class="scrollme animateme"
				data-when="enter"
				data-from="0.5"
				data-to="0"
				data-crop="false"
				data-opacity="0"
				data-scale="1.2">
      <h1><i class="fa fa-fire" aria-hidden="true"></i> <?php echo $lang['INTRO_T']; ?></h1>
      <p class="wer"><?php echo $lang['INTRO']; ?></p>
    </div>   
    
    <hr class="style1">

    <a id="features" class="anchor"></a>
	
    <div>
      <h1><i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $lang['FEATURES_T'] ?></h1>
      <img src="img/cat.png" align="right" class="mt60 mb20 scrollme animateme"
				data-when="span"
				data-from="0.5"
				data-to="0"
				data-crop="false"
				data-opacity="0"
				data-scale="1.5">
      <ul>
        <li class="dkali"><b><span>+</span> <?php echo $lang['FEATURES_1'] ?></b></li>      
        <li><span>+</span> <?php echo $lang['FEATURES_2'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_3'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_4'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_5'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_6'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_7'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_8'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_9'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_10'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_11'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_12'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_13'] ?></li>  
      </ul>
    </div>     
    
    <hr class="style1">
  
	<a id="story" class="anchor"></a>
	
	<div>
     <h1><i class="fa fa-book" aria-hidden="true"></i> <?php echo $lang['STORY_T']; ?></h1>
		
	<div class="slideshow-container" style = "margin: 0;">
		<div class="mySlides fade" style = "margin: 0;">		
		  <p class="wer"><?php echo $lang['STORY_1']; ?></p>		
		</div>

		<div class="mySlides fade" style = "margin: 0;">	 
		  <p class="wer"><?php echo $lang['STORY_2']; ?></p>
		  <p class="wer"><?php echo $lang['STORY_3']; ?></p>		  
		</div>

		<div class="mySlides fade" style = "margin: 0;">		 
		  <p class="wer"><?php echo $lang['STORY_4']; ?></p>	
		  <p class="wer"><?php echo $lang['STORY_5']; ?></p>		  
		</div>
		
		<div class="mySlides fade" style = "margin: 0;">		 
		  <p class="wer"><?php echo $lang['STORY_6']; ?></p>	  
		  <p class="wer"><?php echo $lang['STORY_7']; ?></p>	  
		</div>
		
		<div class="mySlides fade" style = "margin: 0;">		 
		  <p class="wer"><?php echo $lang['STORY_8']; ?></p>
		  <p class="wer"><?php echo $lang['STORY_9']; ?></p>  			  
		</div>
	</div>
	
	<br>

	<div style="margin: 0; text-align:center">
	  <span class="dot" onclick="currentSlide(1); ga('send', 'event', 'insite', 'story_slide_1', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	  <span class="dot" onclick="currentSlide(2); ga('send', 'event', 'insite', 'story_slide_2', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	  <span class="dot" onclick="currentSlide(3); ga('send', 'event', 'insite', 'story_slide_3', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	  <span class="dot" onclick="currentSlide(4); ga('send', 'event', 'insite', 'story_slide_4', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	  <span class="dot" onclick="currentSlide(5); ga('send', 'event', 'insite', 'story_slide_5', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	</div>

	<br>
	
    </div>
  
    <div class="mt40 list scrollme animateme"
		data-when="enter"
		data-from="0.5"
		data-to="0"
		data-crop="false"
		data-opacity="0"
		data-scale="1.2">
      <h2><i class="fa fa-map" aria-hidden="true"></i> <?php echo $lang['STORY_LIST_T']; ?>:</h2>
      <ul>
        <li><span>+</span> <?php echo $lang['STORY_LIST_1']; ?></li>
        <li><span>+</span> <?php echo $lang['STORY_LIST_2']; ?></li>
        <li><span>+</span> <?php echo $lang['STORY_LIST_3']; ?></li>
        <li><span>+</span> <?php echo $lang['STORY_LIST_4']; ?></li>
        <li><span>+</span> <?php echo $lang['STORY_LIST_5']; ?></li>
      </ul>
      <p style="text-indent: 0; margin: 30px 10px 10px 10px; line-height: 2em;"><?php echo $lang['STORY_LIST_I']; ?></p>
    </div>
  </div>

  <div class="second">
    <a id="team" class="anchor"></a>
    <div class="mb40">
      <h1><?php echo $lang['TEAM_T']; ?></h1>
      
	  <div class="slideshow-container" style = "margin: 0;">
		<div class="mySlides1 fade1" style = "margin: 0;">		
		   <p class="wer"><?php echo $lang['TEAM_1']; ?></p>
		</div>

		<div class="mySlides1 fade1" style = "margin: 0;">	 
		   <p class="wer"><?php echo $lang['TEAM_2']; ?></p>
		</div>	
	</div>
	
	<br>

	<div style="margin: 0; text-align:center">
	  <span class="dot1" onclick="currentSlide1(1); ga('send', 'event', 'insite', 'team_slide_1', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	  <span class="dot1" onclick="currentSlide1(2); ga('send', 'event', 'insite', 'team_slide_2', '<?php echo $lang['SITE_LANG']; ?>');"></span> 
	</div>
	    
	  <a id="jobs" class="anchor"></a>
		
      <hr class="style2">
  
      <div class="list2 scrollme animateme"
		data-when="enter"
		data-from="0.5"
		data-to="0"
		data-crop="false"
		data-opacity="0"
		data-scale="1.2">
        <h2><?php echo $lang['TEAM_REC_T']; ?></h2>
        <?php echo $lang['TEAM_REC_1']; ?>
        <p class="wer"><?php echo $lang['TEAM_REC_2']; ?>
        <p class="wer" onClick="ga('send', 'event', 'insite', 'job_email', '<?php echo $lang['SITE_LANG']; ?>');"><?php echo $lang['TEAM_REC_3']; ?></p>
        <p class="wer"><?php echo $lang['TEAM_REC_4']; ?></p>
      </div>
    </div>
  </div>

  <a id="gallery" class="anchor"></a>
  
  <div>
	<iframe class="gallery" src="https://www.youtube.com/embed/EWjxMZIeLjY" frameborder="0" allowfullscreen onClick="ga('send', 'event', 'insite', 'video_1', '<?php echo $lang['SITE_LANG']; ?>');"></iframe>
	<iframe class="gallery" src="https://www.youtube.com/embed/vnoVmUTamXM" frameborder="0" allowfullscreen onClick="ga('send', 'event', 'insite', 'video_2', '<?php echo $lang['SITE_LANG']; ?>');"></iframe>	
    <iframe class="gallery" src="https://www.youtube.com/embed/SS_RRuNCe6Y" frameborder="0" allowfullscreen onClick="ga('send', 'event', 'insite', 'video_3', '<?php echo $lang['SITE_LANG']; ?>');"></iframe>
    <iframe class="gallery" src="https://www.youtube.com/embed/O9-r6dbUpfQ" frameborder="0" allowfullscreen onClick="ga('send', 'event', 'insite', 'video_4', '<?php echo $lang['SITE_LANG']; ?>');"></iframe>
	
	<a class="gallery" href="img/screens/1.jpg" style="background-image: url(img/screens/1.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_1', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/2.jpg" style="background-image: url(img/screens/2.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_2', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/3.jpg" style="background-image: url(img/screens/3.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_3', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/4.jpg" style="background-image: url(img/screens/4.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_4', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/5.jpg" style="background-image: url(img/screens/5.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_5', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/6.jpg" style="background-image: url(img/screens/6.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_6', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/7.jpg" style="background-image: url(img/screens/7.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_7', '<?php echo $lang['SITE_LANG']; ?>');"></a>
    <a class="gallery" href="img/screens/8.jpg" style="background-image: url(img/screens/8.jpg);" data-lightbox="gallery" onClick="ga('send', 'event', 'insite', 'scr_8', '<?php echo $lang['SITE_LANG']; ?>');"></a>		
  </div>
  <div class="third">
    <a id="download" class="anchor"></a>
    <div>
      <h1><i class="fa fa-download" aria-hidden="true"></i> <?php echo $lang['DOWNLOAD_T'] ?></h1>
      <p class="wer mb20 fwb"><?php echo $lang['DOWNLOAD'] ?></p>
      <p class="wer"><?php echo $lang['RELEASE_DATE'] ?></p>  
    </div>
  </div>

  <footer>	
  <center>
	<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup {background: #111111; clear: left; font: 14px Helvetica,Arial,sans-serif; width: 90%; }
		#mc_embed_signup .button {background: #2E2E2E;}		
	</style>

	<div id="mc_embed_signup">
		<a id="newsletter" class="anchor"></a>
		
		<form action= "<?php echo $lang['NEWSLETTER_URL'] ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL"> <?php echo $lang['NEWSLETTER_TEXT'] ?> </label>
			<input onClick="ga('send', 'event', 'other', 'newsletter', '<?php echo $lang['SITE_LANG']; ?>');" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php echo $lang['NEWSLETTER_EMAIL'] ?>" required>		
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="<?php echo $lang['NEWSLETTER_EMAIL'] ?>" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="<?php echo $lang['NEWSLETTER_BUTTON'] ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
	</div>
	
	</center>
	</br>
	
    <div class = "social-media-footer">
      <!-- <a href="#" target="_blank"><img src="img/footer/twitter.png"></a> -->
      <a href="https://www.facebook.com/dziejekhorinis/" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'facebook', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/facebook.png"></a>
	  
	   <?php 
			if ($lang['SITE_LANG'] == 'ru') {
			 ?><a href="http://vk.com/gothic2_historyofkhorinis" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'vk', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/vk.png"></a> <?php 
		}	  
	  ?>
	  
      <a href="https://www.youtube.com/c/dziejekhorinismod" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'youtube', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/youtube.png"></a>
      <a href="http://www.moddb.com/mods/the-history-of-khorinis" target="_blank" onClick="ga('send', 'event', 'socialmedia', 'moddb', '<?php echo $lang['SITE_LANG']; ?>');"><img src="img/footer/moddb.png"></a>  	  
    </div>
	
	<!-- <a href = "https://www.dropbox.com/sh/ob5ax4k1a9ygg5t/AAAanAujZDHjmH6QwyOiSh80a?dl=0" onClick="ga('send', 'event', 'other', 'presspack', '<?php echo $lang['SITE_LANG']; ?>');" target="_blank"> <font color = "green"> <?php echo $lang['PRESS_PACK']; ?> </font> </a> -->
	
	</br> </br>
	
    <img src="img/logo.png" class="logo">
    Copyright 2017 © SoulFire. All rights reserved <br>
    <span class="small"> <?php echo $lang['AUTHOR_AND_TRANSLATOR']; ?> </br></span>
	
  </footer>  
  
  <a href="#top" class="scrolltop" onClick="ga('send', 'event', 'other', 'to_top', '<?php echo $lang['SITE_LANG']; ?>');"><i class="fa fa-arrow-up" aria-hidden="true"></i> <?php echo $lang['TOP']; ?></a> 
  
  <script src="js/lightbox.js"></script> 
  <script src="js/jquery.dlmenu.js"></script>
 
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}

		var slideIndex1 = 1;
		showSlides1(slideIndex1);	
		  		  
		function plusSlides1(n) {
		  showSlides1(slideIndex1 += n);
		}

		function currentSlide1(n) {
		  showSlides1(slideIndex1 = n);
		}

		function showSlides1(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides1");
		  var dots = document.getElementsByClassName("dot1");
		  if (n > slides.length) {slideIndex1 = 1}    
		  if (n < 1) {slideIndex1 = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active1", "");
		  }
		  slides[slideIndex1-1].style.display = "block";  
		  dots[slideIndex1-1].className += " active1";
		}
	</script>
</body>

</html>
