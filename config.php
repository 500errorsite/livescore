<?php
// Unique License Key used to active and identify your purchase
$LicenseKey = '44e754756f5b502ffd57';

// Domain name
$SiteUrl = '//score.bongda365.club';

// Default Page Title 
$DefaultTitle = 'Bongda365 LiveScore: 100% Free LIVESCORE Football & match RESULTS today';

// Admin email address
$AdminEmail = 'contact@bongda365.club';

// Scores Source URL
$ScoresSource = 'http://alpha.livescores.com';

// Facebok social Link used for facebook buttons - > right-col.php
$FacebookLink = '#';

// Twitter account Name used for Twitter button - > right-col.php
$TwitterUsername = 'bongda365_club';

// Scores Refresh Rate (default 60 seconds = 60000)
$RefreshRate = 60000;

// Change theme colors 
$ThemeColor = '00e6e6'; // Comment this to enable the RAINBOW mode

// RAINBOW mode
// You can remove or add more colors by adding HTML color code without #
/* // Uncomment to active RAINBOW mode (RANDOM COLORS from list)
$ThemeColor = array(
    "00e6e6", // Cyan
    "ff8a00", // Orange
    "e8d20c", // Mustart Yellow
    "92cc00", // Forest Green
    "e80c7a", // Magenta
    "705fd7", // Purple
    "bb66bb", // Violet
    "10b6e8", // Sea Blue
    "1873cc", // Facebook Blue
);
$rand_keys = array_rand($ThemeColor, 2);
$ThemeColor = $ThemeColor[$rand_keys[0]]; 
*/

// Developer Mode
// This will minify the code and optimize website speed
$DevMode = 1; 

//Minify code and hide comments 
if($DevMode==1){
	function HTMLMinify($minOutput){
	    $minOutput = preg_replace(array('/<!--[^\[](.*)[^\]]-->/Uuis', "/[[:blank:]]+/u", '/\s+/u'), array('', ' ', ' '), str_replace(array("\n", "\r", "\t"), '', $minOutput));
	    return $minOutput;
	}
	ob_start('HTMLMinify');
}

// ! ! ! DO NOT CHANGE OR MODIFY any code below. 
// This action might cause script malfunctioning and your website might not work anymore

// Current path
$ActualPath = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

include ('./inc/getdata.php');
switch ($FollowPage) {
    case 'home':
        $DataSource = get_data($ScoresSource.$_SERVER['REQUEST_URI']);
        $DataGrab = specific($DataSource, '<div class="content', '<aside class="right-bar">');
        $LeagueWidget = specific($DataSource, '<div id="leagueTableBodyContainer">', '</div><iframe title="" id="b300"'); 
        break;
    case 'league':
        $DataSource = get_data($ScoresSource.$_SERVER['REQUEST_URI']);
        $DataGrab = specific($DataSource, '<div class="content', '<aside class="right-bar">');
        $LeagueWidget = specific($DataSource, '<div id="leagueTableBodyContainer">', '</div><iframe title="" id="b300"'); 
        break;
    case 'results':
        $DataSource = get_data($ScoresSource.substr($_SERVER['REQUEST_URI'], 6));
        $DataGrab = specific($DataSource, '<div class="row row-tall">', '<div class="cal row bt mt hidden" data-id="odds" data-type="tab">');
        break;
    case 'page':
        $DataSource = get_data($ScoresSource.$_SERVER['REQUEST_URI']);
        // Do something later
        break;
}
// Get pages title
$GetTitle = specific($DataSource, '<title>', '</title>');
?>