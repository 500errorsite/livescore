<?php
if(!file_exists('config.php')){header('Location: /install/'); exit;} // Check if the script was installed and config file was created
$FollowPage = 'page';
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Privacy Notice / <?=$DefaultTitle?></title>
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

<!-- Custom CSS -->
<link rel="stylesheet" media="screen" href="/css/ls/style.css?c=<?=$ThemeColor?>">
<!-- Custom JS -->
<script src="/js/ls/custom_beta_1.0.js" type="text/javascript"></script>

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
			<div class="content content-wider">
			    <h2 class="pp-bt bb">Privacy Notice</h2>
			    <div class="pp bb">
			        <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
			    </div>
			</div>
        </div>
    	<!-- Footer -->
        <?php include ('./inc/footer.php'); ?>
    </div>
</body>
</html>