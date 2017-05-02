<?php
  include "languages.php"; 
?>

<html lang="<?php echo $lang['SITE_LANG']; ?>" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title><?php echo $lang['TITLE']; ?></title>  

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    .info {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        .info {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
	img
	{
	  width: 38px;
	  height: 22px;
	  border-radius: 3px; 
	  box-shadow: 0 0 5px #000;  
	  margin: 0 0 0 3px;
	  transition: all .3s ease-in-out;
	  float: right;
	}
	img:hover
	{
	  transform: scale(1.2);
	}
    </style>    
	
</head>

<body>

<div class = "info">
  <a href="http://thehistoryofkhorinis.com/?lang=ru"><img src="img/lang/ru.jpg"></a>
  <a href="http://thehistoryofkhorinis.com/?lang=en"><img src="img/lang/gb.jpg"></a>
  <a href="http://dzieje-khorinis.pl" ><img src="img/lang/pl.jpg"></a>

    <h1> <?php echo $lang['ADBLOCK_WARNING_T']; ?> </h1>
    <p> <?php echo $lang['ADBLOCK_WARNING_1']; ?> </p>
	<a href = "."> <?php echo $lang['ADBLOCK_WARNING_2']; ?>  </a>
</div>
</body>
</html>
