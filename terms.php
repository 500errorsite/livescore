<?php
if(!file_exists('config.php')){header('Location: /install/'); exit;} // Check if the script was installed and config file was created
$FollowPage = 'page';
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Terms of Use / <?=$DefaultTitle?></title>
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
                <h2 class="pp-bt bb">Terms of Use</h2>
                <div class="pp bb">
                    <h3>PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE USING OUR WEBSITE</h3>
                    <h3>BY USING OUR website, YOU ACCEPT THESE TERMS </h3>
                    <p>By using our website, you confirm that you accept these terms of use and that you agree to comply with them.</p>
                    <p>If you do not agree to these terms, you must not use our website.</p>
                    <h3>THERE ARE OTHER TERMS THAT MAY APPLY TO YOU</h3>
                    <p>These terms of use refer to the following additional terms, which also apply to your use of our website:</p>
                    <ul>
                        <li>Our Privacy & Cookies Policy, which can be found at URL <a href="/cookies/">http:<?=$SiteUrl?>/policy/</a>.</li>
                    </ul>

                    <h3>WE MAY MAKE CHANGES TO THESE TERMS</h3>
                    <p>We amend these terms from time to time. Every time you wish to use our website, please check these terms to ensure you understand the terms that apply at that time. The terms available at the time you use the website govern your use of the website.</p>
                    <h3>WE MAY MAKE CHANGES TO OUR website</h3>
                    <p>We may update and change our website from time to time to reflect changes to our services, our users’ needs and our business priorities.</p>
                    <h3>WE MAY SUSPEND OR WITHDRAW OUR website</h3>
                    <p>Our website are made available free of charge.</p>
                    <p>We do not guarantee that our website, or any content on it, will always be available or be uninterrupted. We may suspend or withdraw or restrict the availability of all or any part of our website for business and operational reasons.</p>
                    
                    <h3>WE ARE NOT RESPONSIBLE FOR THIRD PARTY ADVERTISEMENTS, CONTENT OR DATA DISPLAYED ON OUR website, OR WEBSITES TO WHICH WE LINK</h3>
                    <p>Our website may contain third party advertisements, content and data, as well as links that direct you to other websites and resources.</p>
                    <p>All links are provided for your information only and should not be interpreted as approval by us of those linked websites or any information you may obtain from them.</p>
                    <p>We have no control over the contents of any third party advertisements, content or data displayed on our website, or over any websites or resources to which you may be directed, and we accept no responsibility for these or for any loss or damage that may arise from your use of these.</p>
                    <h3>OUR RESPONSIBILITY FOR LOSS OR DAMAGE SUFFERED BY YOU</h3>
                    <p>We have no liability to you for any direct loss or indirect loss (such as loss of profit, loss of business, business interruption, or loss of business opportunity) that you may suffer as a result of or in connection with any use of our website. </p>
                    <p>You acknowledge and agree that we are not responsible for any non-performance, delay in performance, errors or omissions, damages, losses, expenses or claims which may be caused by any event beyond our reasonable control which prevents us from providing all or part of any of our website or fulfilling any of our obligations under these terms of use. Such events may include but are not limited to any of the following: act of God, disease, an outbreak of war or hostilities, strike, lock-out, industrial action, riot, civil disturbance, an act of terrorism, an act of any government or authority, fire, flood, explosion, natural cause, theft, malicious damage, strike, lock-out, failure in telecommunications services or unauthorised third party interference with either party’s website, systems or services (each, a “<strong>Force Majeure Event</strong>”).
                    <p>We do not exclude or limit in any way our liability to you where it would be unlawful to do so. This includes liability for death or personal injury caused by our negligence or the negligence of our employees, agents or subcontractors and for fraud or fraudulent misrepresentation.</p>
                    <p>Please note that we only provide our website for domestic and private use. You agree not to use our website for any commercial or business purposes.</p>
                    
                    <h3>HOW WE MAY USE YOUR PERSONAL INFORMATION</h3>
                    <p>We will only use your personal information as set out in our Privacy & Cookies Policy, which can be found at URL <a href="/cookies">http:<?=$SiteUrl?>/policy</a>.</p>
                    <p>If you have opted out or unsubscribed from any communications from us, we may take a reasonable amount of time to process your request. We shall not have any liability for any communications you may receive from us whilst processing your request.</p>

                    <h3>WE ARE NOT RESPONSIBLE FOR VIRUSES AND YOU MUST NOT INTRODUCE VIRUSES</h3>
                    <p>We do not guarantee that our website will be secure or free from bugs or viruses.</p>
                    <p>You are responsible for configuring your information technology, computer programmes and platform to access our website. You should use your own virus protection software.</p>
                    <p>You must not misuse our website by knowingly introducing viruses, trojans, worms, logic bombs or other material that is malicious or technologically harmful. You must not attempt to gain unauthorised access to our website, the server on which our website are stored or any server, computer or database connected to our website. You must not attack our website via a denial-of-service attack or a distributed denial-of service attack. By breaching this provision, you would commit a criminal offence under the Computer Misuse Act 1990. We will report any such breach to the relevant law enforcement authorities and we will co-operate with those authorities by disclosing your identity to them. In the event of such a breach, your right to use our website will cease immediately.</p>

                    <h3>RULES ABOUT LINKING TO OUR website</h3>
                    <p>You may link to our homepage, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it.</p>
                    <p>You must not establish a link in such a way as to suggest any form of association, approval or endorsement on our part where none exists.</p>
                    <p>You must not establish a link to our website in any websites or applications that are not owned by you.</p>
                    <p>Our website must not be framed on any other websites or applications, nor may you create a link to any part of our website other than the home page unless otherwise authorised by us.</p>
                    <p>We reserve the right to withdraw linking permission without notice.</p>
                    <p>The websites or applications in which you are linking to our website must comply in all respects with the content standards set out in these terms of use and any other standards that we provide to you from time to time.</p>

                    <h3>PROHIBITED USES</h3>
                    <p>You may use our website only for lawful purposes. You may not use our website:</p>
                    <ul>
                        <li>in any way that breaches any applicable local, national or international law or regulation;</li>
                        <li>in any way that is unlawful or fraudulent, or has any unlawful or fraudulent purpose or effect;</li>
                        <li>for the purpose of harming or attempting to harm minors in any way.</li>
                    </ul>
                    <p>You also agree:</p>
                    <ul>
                        <li>not to reproduce, duplicate, copy or re-sell any part of our website in contravention of the provisions of these terms of use;</li>
                        <li>not to access without authority, interfere with, damage or disrupt: <ul>
                                <li>any part of our website;</li>
                                <li>any equipment or network on which our website are stored;</li>
                                <li>any software used in the provision of our website; or</li>
                                <li>any equipment or network or software owned or used by any third party.</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Terms last updated: May 2020.</p>
                </div>
            </div>
        </div>
    	<!-- Footer -->
        <?php include ('./inc/footer.php'); ?>
    </div>
</body>
</html>