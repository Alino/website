<?php
  //require "_connect.php";
  include "_functions.php"; 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title><?php echo $lang['TITLE']; ?></title>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
</head>  
<script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});
</script> 
<body>   
  <div class="se-pre-con">
    <div class="loading"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>
  </div>
  <a id="top" class="anchor magnetic"></a>
  <div class="top" data-parallax="scroll" data-image-src="img/bg.jpg"> 
    <div class="bar-top"><?php echo $lang['HELLO']; ?> | www.dzieje-khorinis.pl <span class="fr">kontakt@dzieje-khorinis.pl</span></div>
    <div class="social-bar">
      <!-- <a href="#" target="_blank"><img src="img/footer/twitter.png"></a> -->
      <a href="https://www.facebook.com/dziejekhorinis/" target="_blank"><img src="img/footer/facebook.png"></a>
      <a href="https://www.youtube.com/c/dziejekhorinismod" target="_blank"><img src="img/footer/youtube.png"></a>
      <a href="http://www.moddb.com/mods/the-history-of-khorinis" target="_blank"><img src="img/footer/moddb.png"></a>
      <img src="img/logo-menu.png" class="logo-top">
    </div>
    <div class="lang-bar">
      <a href="/?lang=pl"><img src="img/lang/pl.jpg"></a>
      <a href="/?lang=en"><img src="img/lang/gb.jpg"></a>
      <!-- <a href="/?lang=en"><img src="img/lang/ru.jpg"></a> -->
    </div>
    <div class="top-container scrollme">
      <img src="img/<?php echo $lang['LOGO']; ?>" id="logo">
      <p><?php echo $lang['INFO']; ?></p>
    </div>    
  </div>
         
  <script>
jQuery(document).ready(function(){
        jQuery('#hideshow').on('click', function(event) {        
             jQuery('#hide').toggle('hide');
        });
    });
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
        <li><a href="#calendar"><?php echo $lang['CALENDAR_T']; ?></a></li>
        <li><a href="#gallery"><?php echo $lang['GALLERY_T']; ?></a></li>
        <li><a href="#download">Download</a></li>
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
      <p><?php echo $lang['INTRO']; ?></p>
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
        <li><span>+</span> <?php echo $lang['FEATURES_14'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_15'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_16'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_17'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_18'] ?></li>
        <li><span>+</span> <?php echo $lang['FEATURES_19'] ?></li>
      </ul>
    </div>     
    
    <hr class="style1">
  
    <a id="story" class="anchor"></a>
    <div>
      <h1><i class="fa fa-book" aria-hidden="true"></i> <?php echo $lang['STORY_T']; ?></h1>
      <p><?php echo $lang['STORY_1']; ?></p>
      <p class="wer"><?php echo $lang['STORY_2']; ?></p>
      <p class="wer"><?php echo $lang['STORY_3']; ?></p>
      <p class="wer"><?php echo $lang['STORY_4']; ?></p>
      <p class="wer"><?php echo $lang['STORY_5']; ?></p>
      <p class="wer"><?php echo $lang['STORY_6']; ?></p>
      <p class="wer"><?php echo $lang['STORY_7']; ?></p>
      <p class="wer"><?php echo $lang['STORY_8']; ?></p>
      <p class="wer"><?php echo $lang['STORY_9']; ?></p>
    </div>
  
    <div class="mt40 list scrollme animateme"
				data-when="enter"
				data-from="0.5"
				data-to="0"
				data-crop="true"
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
      <p style="text-indent: 0; margin: 30px 10px 10px 10px; line-height: 1em;"><?php echo $lang['STORY_LIST_I']; ?></p>
    </div>
  </div>

  <div class="second">
    <a id="team" class="anchor"></a>
    <div class="mb40">
      <h1><?php echo $lang['TEAM_T']; ?></h1>
      <img src="img/team.jpg" align="left" class="mr40 mb20 scrollme animateme"
				data-when="exit"
				data-from="0.5"
				data-to="0"
				data-crop="true"
				data-opacity="0"
				data-scale="1.5">
      <p><?php echo $lang['TEAM']; ?></p>
      
      <hr class="style2">
  
      <div class="list2 animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
        <h2><?php echo $lang['TEAM_REC_T']; ?></h2>
        <?php echo $lang['TEAM_REC_1']; ?>
        <p class="wer"><?php echo $lang['TEAM_REC_2']; ?>
        <p class="wer"><?php echo $lang['TEAM_REC_3']; ?></p>
      </div>
    </div>
  </div>

  <div class="container sword">      
    <a id="calendar" class="anchor"></a>
    <div>      
      <h1 class="smaller2"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $lang['CALENDAR_T'] ?>*</h1>

      <table class="table-kal">
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><b><h2 class="smaller"><?php echo $lang['CALENDAR_T_L'] ?></h2></b></td>   
          <td><b><h2 class="smaller"><?php echo $lang['CALENDAR_T_R'] ?></h2></b></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_1'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_1'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_2'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_2'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_3'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_3'] ?></td>
        </tr>
        <tr class="dka animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><i class="fa fa-check mr5" aria-hidden="true"></i> <?php echo $lang['CALENDAR_L_4'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_4'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_5'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_5'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_6'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_6'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_7'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_7'] ?></td>
        </tr>
        <tr class="animateme scrollme"
	data-when="enter"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
          <td><?php echo $lang['CALENDAR_L_8'] ?></td>   
          <td><?php echo $lang['CALENDAR_R_8'] ?></td>
        </tr>
      </table>
      <p class="wer fsi">* <?php echo $lang['CALENDAR_I'] ?></p>
    </div>

    <hr class="style1">
  </div> 
  <a id="gallery" class="anchor"></a>
  <div>
    <a class="gallery" href="img/screens/1.jpg" style="background-image: url(img/screens/1.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/2.jpg" style="background-image: url(img/screens/2.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/3.jpg" style="background-image: url(img/screens/3.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/4.jpg" style="background-image: url(img/screens/4.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/5.jpg" style="background-image: url(img/screens/5.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/6.jpg" style="background-image: url(img/screens/6.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/7.jpg" style="background-image: url(img/screens/7.jpg);" data-lightbox="gallery"></a>
    <a class="gallery" href="img/screens/8.jpg" style="background-image: url(img/screens/8.jpg);" data-lightbox="gallery"></a>
    
    <iframe class="gallery" src="https://www.youtube.com/embed/O9-r6dbUpfQ" frameborder="0" allowfullscreen></iframe>
    <iframe class="gallery" src="https://www.youtube.com/embed/ZAo2kCCU7oQ" frameborder="0" allowfullscreen></iframe>
    <iframe class="gallery" src="https://www.youtube.com/embed/jarXyWleCDc" frameborder="0" allowfullscreen></iframe>
    <iframe class="gallery" src="https://www.youtube.com/embed/vnoVmUTamXM" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="third">
    <a id="download" class="anchor"></a>
    <div class="animateme scrollme"
	data-when="span"
	data-from="0.75"
	data-to="0"
	data-opacity="0"
	data-translatex="200">
      <h1><i class="fa fa-download" aria-hidden="true"></i> Download</h1>
      <p class="wer mb20 fwb"><?php echo $lang['DOWNLOAD'] ?></p>
      <p class="fsi">"Produkcja jest w stanie składania wszystkiego w całość – przekuwamy skrypty na język gry, wstawiając postacie do ukończonego już świata i dodając od razu na tym samym etapie na bieżąco dubbing. Nie rzucam tu datami bo nie wiadomo na razie czy zajmie im to dwa miesiące, czy osiem. Są pewne dane szacunkowe, ale też kilka rzeczy których oszacować się nie da. Chłopaki to w każdym razie profesjonaliści i wiem, że złożą wszystko w całość, najszybciej jak tylko mogą."</p>
    </div>
  </div>

  <footer>
    <div>
      <!-- <a href="#" target="_blank"><img src="img/footer/twitter.png"></a> -->
      <a href="https://www.facebook.com/dziejekhorinis/" target="_blank"><img src="img/footer/facebook.png"></a>
      <a href="https://www.youtube.com/c/dziejekhorinismod" target="_blank"><img src="img/footer/youtube.png"></a>
      <a href="http://www.moddb.com/mods/the-history-of-khorinis" target="_blank"><img src="img/footer/moddb.png"></a>
    </div>
    <img src="img/logo.png" class="logo">
    Copyright 2017 © SoulFire. All rights reserved <br>
    <span class="small">Design & Code: <a href="https://myxoske.pl" target="_blank">myxoske.pl</a></span>
  </footer>       
  <a href="#top" class="scrolltop"><i class="fa fa-arrow-up" aria-hidden="true"></i> <?php echo $lang['TOP']; ?></a>  
  <script src="js/lightbox.js"></script> 
  <script src="js/jquery.dlmenu.js"></script>
</body>
</html>
