 <?php
// ! ! ! DO NOT CHANGE OR MODIFY any code below. 
// This action might cause script malfunctioning and your website might not work anymore
function get_data($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return web page
    //curl_setopt($ch, CURLOPT_HEADER, false);      // don't return headers
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);        // stop after 10 redirects
    curl_setopt($ch, CURLOPT_ENCODING, "");         // handle compressed
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);    // set referrer on redirect
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);  // time-out on connect
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);         // time-out on response
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.63' : 'Unknown - no user agent';
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        
    $data = curl_exec($ch);
    
    $data = str_replace('/\s+/', '',$data); //clean whitespaces
    $data = str_replace('> ','>',$data); //clean whitespaces
    
    // Scores Content Page
    /////////////////////////////////
    $data = str_replace('//livescore.com','//'.$_SERVER['HTTP_HOST'], $data);
    $data = str_replace('<div class="sco"><a href="/soccer/','<div class="sco"><a href="/score/soccer/', $data); // Link conversion
    $data = str_replace('<a class="col-4 br', '<a class="col-4', $data); // Remove 1px right border from top menu (near today)
    $data = str_replace('</strong></a>-', '</strong></a> -', $data); // Fix League title display
    $data = str_replace('</strong>- <a', '</strong> - <a', $data); // Fix League title display country page
    $data = str_replace('? - ?', ' x ', $data); // Replace Question marks with X
    $data = str_replace('<div class="min"><img src="//cdn3.livescore.com/web/img/flash.gif" alt="live"/>', '<div class="min"><span class="live-match"></span>', $data); // Remove live image from time background ( Results / Scores Page )
    $data = str_replace('<div class="min"><img src="/assets/images/flash.gif" alt="live"/>', '<div class="min"><span class="live-match"></span>', $data); // Remove live image from time background ( Results / Scores Page )

    
    $data = str_replace('<div class="content">', '<div class="content"><div class="loader"><span>Loading...</span></div>', $data); // Insert loading into content
    $data = str_replace('<img alt="" src="/assets/images/tv_black.svg">', '', $data); // Insert loading into content

    // Leagues Page
    /////////////////////////////////
    $data = str_replace('<img src="//cdn3.livescore.com/web/img/flash.gif" alt="live"/>', '', $data); // Remove live icon from league tables

    // Results / Scores Page
    /////////////////////////////////
    $data = str_replace('<div class="row row-tall">', '<div class="row row-tall"><div class="loader"><span>Loading...</span></div>', $data); // Insert loading into content
    $data = str_replace('<i class="ico ico-arrow"></i>','',$data); //Remove show assist icon

    // Widget Remove//
    /////////////////////////////////
    $data = str_replace('<span class="live">&nbsp; </span>', '', $data); // Fix Score Display
    // $data = str_replace('<span class="live"><img src="//cdn3.livescore.com/web/img/flash.gif" alt="live"/></span>', '', $data); // Fix Score Display

    // echo htmlspecialchars($data);
    return $data;
}

function specific($SpecificGrab, $str_start, $str_end){
	// echo $SpecificGrab;
	$start = strpos($SpecificGrab,$str_start);
    $end = strpos($SpecificGrab,$str_end);
    $content = substr($SpecificGrab , $start, $end - $start);

    /// Title style
    $content = str_replace('<title>','',$content);
    $content = str_replace('LiveScore Soccer - ','',$content);
    $content = str_replace(' - powered by LiveScore.com','',$content);
    $content = str_replace('LiveScore : ','LiveScore ',$content);
    // Test grabbed code
    // echo htmlspecialchars($content);
    return $content;
	}
?>


