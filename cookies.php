<?php
if(!file_exists('config.php')){header('Location: /install/'); exit;} // Check if the script was installed and config file was created
$FollowPage = 'page'; 
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Cookies / <?=$DefaultTitle?></title>
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
			    <h2 class="pp-bt">Privacy & Cookies Policy</h2>
			    <div class="pp">
                    <strong>Non-personal data:</strong>
                    <p>We do not collect, we do not use and we don't need visitors personal data such as: name, address, credit card, bank accounts, etc. We collect statistical information and other data in the form of cookies from our users. Information of this type is called non-personal data and is thus such information that can not be used to identify any person in any way. The information gathered is such that it allows us to see your location, time zone, device, and information on navigating the website. We use <strong>Google Analytics</strong> to collect these data.</p><p>
                    <strong>USING COOKIES:</strong>
                    </p><p>The information below is intended to inform the user about the placement, use, and administration of "cookies" used by <?php echo substr($SiteUrl, 2);?></p>
                    <strong>Please read carefully the following information:</strong>
                    <p>This website uses cookies to provide visitors with a much better browsing experience and services tailored to the needs and interests of everyone.</p>
                    <p>Cookies are designed to facilitate access to and delivery of Internet-based services such as personalization of certain settings (language, country, display prices in national currency.</p>
                    <p>Cookies, based on the information they gather about users, help site owners make their products more efficient so that users can easily access them, and also increase the effectiveness of online advertising and last but not least, allow multimedia applications or other types of other sites to be included in a sock for making browsing more useful.</p>
                    <strong>What is a cookie?</strong>
                    <p>Cookie is a small file of letters and numbers that is stored on any terminal with internet access issued by a webserver to a browser (e.g., Internet Explorer, Chrome).</p>
                    <p>Please note: Cookies do not contain software, viruses or spyware and can not access the information on the user's hard drive. Cookies do not require personal information and do not personally identify Internet users.</p>
                    <p>A cookie consists of name and content, the duration of which is determined, and can be accessed again by the webserver when a user returns to the website associated with the respective webserver.</p>
                    <strong>Cookies are categorized into:</strong>
                    <p>- Session cookies - these are temporarily stored in the browser's history that stores them until the user exits the site or closes the browser window.</p>
                    <p>- Persistent cookies - These are stored, according to the preset time, on the hard drive of a computer or equipment. Persistent cookies also include those placed on a website other than the one the user is currently visiting - known as "third party cookies" - that can be used anonymously to store a user's interests, so so that advertising is delivered as relevant as possible to users.</p>
                    <strong>What are the benefits of cookies?</strong>
                    <p>A cookie contains information linking users to a particular website. If a browser accesses that web-server again, it can read the already stored information and react accordingly. Cookies provide users with a pleasant browsing experience and support the efforts of many websites to provide comfortable user services: ex - online privacy preferences, site language options, shopping carts, or relevant advertising.</p>
                    <strong>What is the lifetime of a cookie?</strong>
                    <p>The lifetime of a cookie may be different depending on the purpose for which it is placed. There are only one-session cookies - they are no longer retained after the user leaves the site. Permanent cookies - are retained and reused whenever the user returns to that site, but can be deleted at any time by the user.</p>
                    <strong>What are cookies placed by third parties?</strong>
                    <p>Certain parts of content on certain sites may be placed on the website accessed by third parties through banners, boxes or links - and all of these tools may contain cookies. They are termed "third party cookies" because they are not placed by the owner of that website, and third-party vendors are subject to the laws and privacy policies of the site owner.</p>
                    <strong>How cookies are used by this site:</strong>
                    <p>A visit to this site may place cookies for purposes of:</p>
                    <p>Site performance cookies</p>
                    <p>Visitor analysis cookies</p>
                    <p>Cookies for geotargetting</p>
                    <p>Recording cookies</p>
                    <p>Cookies for advertising</p>
                    <p>Advertiser cookies</p>
                    <p>These cookies may come from third parties.</p>
                    <strong>Performance cookies:</strong>
                    <p>This type of cookie retains the user's preferences on this site, so they no longer need to be set on every site visit. For example: volume settings for video player, streaming video speed with which browser is compatible.</p>
                    <strong>Cookies for Visitor Analysis:</strong>
                    <p>Whenever a user visits this site, third-party analytics software generates a user's analysis cookie. This cookie tells us if you have visited this site so far. The browser will tell us if you have this cookie, and if not, we will generate one. It allows the monitoring of the unique users who visit us and how often they do it. As long as you are not registered on this site, this cookie can not be used to identify individuals, they are used for statistical purposes only. If you are registered, we also know the details you have provided us, such as your e-mail address and username - subject to the confidentiality and provisions of the Terms and Conditions,</p>
                    <strong>Cookies for geotargetting:</strong>
                    <p>These cookies are used by software that determines where you come from. It is completely anonymous and is only used to target the content - even when you are on our page in Romanian or in another language you receive the same advertisement.</p>
                    <strong>Cookies for registration:</strong>
                    <p>When you sign up for this site, we generate a cookie that tells us if you are registered or not. Our servers use these cookies to show us your account and if you have permission for a particular service. It also allows us to associate any comments you post on our site with your username. If you did not select "keep me registered," this cookie will automatically delete when you close your browser or computer.</p>
                    <strong>Cookies for advertising:</strong>
                    <p>These cookies let us know whether or not you viewed an online ad, what is its type and how long it has been since you saw the ad message. These cookies are also used to target online advertising. We may also use third-party cookies for better advertising targeting, for example, to show ads about holidays if the user has recently visited an article on the vacancy site. These cookies are anonymous, they store information about the viewed content, not the users. We also set up anonymous cookies through other sites that we advertise. By accepting them, we can use them to recognize you as a visitor to that site if you later visit our site,</p>
                    <strong>Advertiser cookies:</strong>
                    <p>Much of the advertising you find on this site belongs to third parties. Some of these parties use their own anonymous cookies to analyze how many people have been exposed to an ad, or to see how many people have been exposed multiple times to the same ad. The companies that generate these cookies have their own privacy policies and this site does not have access to read or write these cookies. Third-party cookies can be used to show your target advertising on other sites, based on your browsing on this site.</p>
                    <strong>Other cookies of third parties:</strong>
                    <p>On some pages, third parties can set their own anonymous cookies in order to track the success of an application, or to customize an application. Because of its use, this site can not access these cookies, just as third parties can not access cookies owned by this site. For example, when you share an article using the social network button on this site, that social network will record your activity.</p>
                    <strong>What type of information is stored and accessed through cookies?</strong>
                    <p>Cookies keep information in a small text file that allows a website to recognize a browser. The Webserver will recognize the browser until the cookie expires or is deleted. The cookie stores important information that enhances Internet browsing experience (eg, setting the language of a site, keeping a user logged in to your webmail account, online banking security, keeping your products in the shopping cart)</p>
                    <strong>Why are Internet Cookies Important?</strong>
                    <p>Cookies are the central focus of the efficient Internet, helping to generate a friendly browsing experience and tailored to the preferences and interests of each user. Denying or disabling cookies can make some sites unusable.</p>
                    <p>Denying or disabling cookies does not mean you will not receive online advertising - just that it will no longer be able to keep track of your preferences and interests highlighted by your browsing behavior.</p>
                    <p>Examples of important uses of cookies (which do not require authentication of a user through an account):</p>
                    <p>Content and services tailored to user preferences - news categories, weather, sports, maps, public and government services, entertainment sites and travel services.</p>
                    <p>Offers tailored to users' interests - remembering passwords, language preferences (Ex: displaying search results in English).</p>
                    <p>Retrieve Child Protection Filters for Content on the Internet (Family Mode Options, Safe Search Functions)</p>
                    <p>Limit ad serving frequency - limit the number of impressions of an ad for a particular user on a site.</p>
                    <p>Provide more relevant advertising for the user.</p>
                    <p>Measurement, optimization and analytics features - such as confirming a certain level of traffic on a website, what type of content is viewed, and how a user reaches a website (eg through search engines, directly from other websites etc.). Websites run these analyzes of their use to improve sites for the benefit of users.</p>
                    <p>Security and privacy issues</p>
                    <p>Cookies are NOT Viruses! They use plain text formats. They are not made up of pieces of code so they can not be executed or can auto-run. Consequently, they can not duplicate or replicate on other networks to run or replicate again. Because they can not perform these functions, they can not be considered viruses.</p>
                    <p>Cookies can still be used for negative purposes. Because it stores information about user preferences and browsing history, both on a particular site and on several other sites, cookies can be used as a form of Spyware. Many anti-spyware products are aware of this and consistently mark cookies to be deleted in anti-virus / anti-spyware removal / scanning procedures.</p>
                    <p>In general, browsers have built-in privacy settings that provide different levels of cookie acceptance, shelf life, and automatic deletion after the user has visited a particular site.</p>
                    <strong>Other security issues related to cookies:</strong>
                    <p>Since identity protection is very valuable and is the right of every internet user, it is advisable to know what issues can create cookies. In order to transmit constant information in both ways between the browser and the website, if an attacker or unauthorized person intervenes during the data transmission, the information contained in the cookie can be intercepted. Although very rarely, this can happen if the browser connects to the server using an unencrypted network (eg an unsecured WiFi network).</p>
                    <p>Other cookie-based attacks involve bad cookie settings on servers. If a website does not require the browser to use only encrypted channels, attackers can use this vulnerability to prevent browsers from sending information through insecure channels. Attackers then use the information for the purpose of unauthorized access to certain sites. It is very important to be careful in choosing the most appropriate method of protecting personal information.</p>
                    <strong>Tips for safe and responsible cookie-based navigation:</strong>
                    <p>Due to their flexibility and the fact that most of the most visited sites and the biggest ones use cookies, they are almost inevitable. Disabling cookies will not allow the user to access the most popular and used sites including Youtube, Gmail, Yahoo and others. Here are some tips to make sure you do not worry about cookies:</p>
                    <p>Customize your cookie browser settings to reflect a comfortable cookie security level for you If you do not mind cookies and you are the only person using your computer, you can set expiration deadlines for storing your history navigation and personal access data. If you share your computer access, you can consider the browser setting to delete your individual browsing data each time you close your browser. This is a way to access sites that place cookies and delete any business information when you close the browsing session. Install and constantly update your antispyware applications.</p>
                    <p>Many of the applications for detection and prevention of spyware include the detection of attacks on sites. This prevents the browser from accessing websites that could exploit browser vulnerabilities or download dangerous software. Make sure your browser is always up-to-date. Many of the cookies attacks are exploited by exploiting the weaknesses of the old versions of browsers.</p>
                    <p>Cookies are everywhere and can not be avoided if you want to enjoy access to the best and greatest websites on the Internet - local or international. With a clear understanding of how they work and the benefits they bring, you can take the necessary security measures so you can browse with confidence on the internet.</p>
                    <strong>Disabling and declining cookies:</strong>
                    <p>Disabling and refusing to receive cookies can make some sites unfeasible or difficult to visit and use. Also, refusing to accept cookies does not mean you will not get / see online advertising anymore.</p>
                    <p>It is possible to set up the browser so that these cookies are no longer supported or you can set the browser to accept cookies from a particular site. But for example, if you are not registered using cookies, you will not be able to leave comments.</p>
                    <p>All modern browsers offer the ability to change cookie settings. These settings are usually found in your browser's "options" or "preferences" menu.</p>
                    <p>To understand these settings, the following links may be useful, otherwise you can use the browser's "help" option for more details.</p>
                    <p><a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="nofollow noopener noreferrer">Cookie settings in Internet Explorer</a> </p>
                    <p><a href="https://addons.mozilla.org/en-US/firefox/addon/a-cookie-manager/" target="_blank" rel="nofollow noopener noreferrer">Cookie settings in Firefox</a> </p>
                    <p><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&amp;hl=en" target="_blank" rel="nofollow noopener noreferrer">Cookie settings in Chrome</a> </p>
                    <p><a href="https://support.apple.com/" target="_blank" rel="nofollow noopener noreferrer">Cookie settings in Safari</a></p>
                    <p>If you want to know more about cookies and what they are used for, we recommend the following links:</p>
                    <p><a href="https://support.microsoft.com/en-us/help/260971/description-of-cookies" target="_blank" rel="nofollow noopener noreferrer">Microsoft Cookies guide</a> <a href="https://www.allaboutcookies.org/" target="_blank" rel="nofollow noopener noreferrer">All About Cookies</a></p>
                    <p>Policy last updated: May 2020.</p>
			    </div>
			</div>
        </div>
    	<!-- Footer -->
        <?php include ('./inc/footer.php'); ?>
    </div>
</body>
</html>