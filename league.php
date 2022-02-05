<?php
if(!file_exists('config.php')){header('Location: /install/'); exit;} // Check if the script was installed and config file was created
$FollowPage = 'league';
include ('config.php');
if(isset($_GET['load-scores'])) {echo $DataGrab;exit();}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?=$GetTitle?> / <?=$DefaultTitle?></title>
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="description" content="GET FREE Livescore Football and Real-Time Football Results for all Countries, Leagues and Competitions! CLICK NOW! Alt. Nowgoal, 90bola, Unogoal, SPBO Live Score, Bola90, Live Score Bola, Livescore123, Nowgoal90, Live Score Bola or Football Livescore. <?=$GetTitle?>">
<meta name="keywords" content="Free Livescore Football, Livescores, Nowgoal, 90bola, Unogoal, SPBO Live Score, Bola90, Live Score Bola, Livescore123, Nowgoal90, Live Score Bola or Football Livescore.">
<link rel="canonical" href="<?=$ActualPath?>" />
<!-- Loading Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="512x512"  href="/img/favicon/android-icon-512x512.png">
<link rel="icon" type="image/png" sizes="256x256"  href="/img/favicon/android-icon-256x256.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#000">
<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#000">

<!-- You can use open graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<meta property="og:url"           content="<?=$ActualPath?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?=$GetTitle?> / <?=$GetTitle?>" />
<meta property="og:description"   content="LiveScore script for developers. Create your own LiveScore website with auto update content and no iframes or ads. <?=$GetTitle?>" />
<meta property="og:image"         content="http:<?=$SiteUrl?>/img/share.jpg" />
<meta property="og:image:alt"     content="<?=$GetTitle?>" />

<!-- Custom CSS -->
<link rel="stylesheet" media="screen" href="/css/ls/style.css?c=<?=$ThemeColor?>">
<!-- Custom JS -->
<script src="/js/ls/custom_beta_1.0.js" type="text/javascript"></script>

<script>
var tz = com.livescore.global.setTzCookie();
var refresh_rate = <?=$RefreshRate?>;

(function($) {
   $(document).ready(function() {
      $.ajaxSetup({
         cache: false,
         complete: function() {
            $('.loader').fadeOut();
         },
         success: function() {
            $('.loader').fadeOut(10000);
            $('.content').fadeIn();
         }
      });
      var $container = $(".load-scores");
      $container.load("./?load-scores&tz=" + tz);
      /* console.log("./?load-scores&tz=" + tz); */
      var refreshId = setInterval(function() {
         $container.load("./?load-scores&tz=" + tz);
      }, refresh_rate);
   });
})(jQuery);
</script>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/all.js#xfbml=1&cookie=1&version=v5.0"></script>
</head>
<body class="om soccer mob">
    <!-- Create SVG Icons -->
    <?php include ('./css/svg.php'); ?>
    <div class="wrapper">
		<!-- Header -->
	    <?php include ('./inc/header.php'); ?>
        <div class="content-wrap">
            <!-- Left Side -->
        	<?php include ('./inc/left-col.php'); ?>
                <!-- Content -->
                <div class="load-scores"></div>
            <!-- Right Side -->
			<?php include ('./inc/right-col.php'); ?>
        </div>
    	<!-- Footer -->
        <?php include ('./inc/footer.php'); ?>
    </div>
</body>
</html>