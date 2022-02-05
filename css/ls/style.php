<?php
$ThemeColor = $_GET['c'];
$DevMode = 1; //Unlock Developer Mode 

//Code Minify for optimization 
if($DevMode==1){

    function CSSMinify($minOutput) {
        $search = array(
            '!/\*[^*]*\*+([^/][^*]*\*+)*/!','/; /','/ }/','/}\n+/','/{\n+/','/ {/','/\r\n/','/\r/','/\n/','/\t/','/  /','/   /','/    /','/: /',
        );
        $replace = array(
            '',';','}','}','{','{','','','','','','','',':',
        );

        $minOutput = preg_replace($search, $replace, $minOutput);

       return $minOutput;
    }
    ob_start("CSSMinify");
    
}
header("Content-type: text/css");
?>
@font-face {
    font-family: "sr-pro-display-black";
    src: url("/fonts/SF-Pro-Display-Black.otf");
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: "sr-pro-display-regular";
    src: url("/fonts/SF-Pro-Display-Regular.otf");
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: "norwester";
    src: url("/fonts/norwester.otf");
    font-weight: normal;
    font-style: normal;
}

@media (max-width: 1000px) {
    .mob .flag {
        background: url("/img/fl22.png") no-repeat 0 -450px;
    }

    .mob.om .flag {
        background: url("/img/fl22.webp") no-repeat 0 -450px;
    }
}

@media (min--moz-device-pixel-ratio: 1.5),
(-o-min-device-pixel-ratio: 3/2),
(-webkit-min-device-pixel-ratio: 1.5),
(min-device-pixel-ratio: 1.5),
(min-resolution: 1.5dppx) {
    .mob .flag {
        background: url("/img/fl22@2x.png") no-repeat 0 -450px;
        -moz-background-size: 200% auto;
        background-size: 200% auto;
        -webkit-background-size: 200% auto;
    }

    .mob.om .flag {
        background: url("/img/fl22@2x.webp") no-repeat 0 -450px;
        -moz-background-size: 200% auto;
        background-size: 200% auto;
        -webkit-background-size: 200% auto;
    }
}

.lsh {
    display: none !important;
}

.flag {
    background: url("/img/fl22.png") no-repeat 0 -450px;
}

.flag {
    background: url("/img/fl22.webp") no-repeat 0 -450px;
}

.clear,
.clear:after,
.match-row,
.row-gray,
.match-row,
.row-gray:after,
.row,
.row-gray,
.row-gray .row-wrapper,
.row-gray .row-wrapper:after,
.row-gray:after,
.row:after {
    clear: both
}

.pp table,
.table-default {
    border-collapse: collapse
}

.content,
.left-bar,
.right-bar .table *,
.right-bar .table :after,
.right-bar .table :before {
    box-sizing: border-box
}

.cal a,
.settings-box label,
.social-box .disabled img,
.social-box .switch,
a.blue:hover,
button {
    cursor: pointer
}

.main-banner>a,
.newsletter-box .form input:focus,
a,
button:focus,
input[type=radio]:focus {
    outline: 0
}

.home-link {
    width: 300px;
    height: 240px;
    position: absolute;
}


#smartbanner .sb-info em,
.advertise h2.title,
.cal-sel a,
.date-bar>a,
.fs11,
.modal-header,
.new,
.tabs>a {
    text-transform: uppercase
}

.date-bar,
.players-row,
.pp table {
    table-layout: fixed
}

body,
br,
fieldset,
form,
h1,
h2,
html,
img,
li,
p,
th,
ul {
    padding: 0;
    margin: 0;
    list-style: none;
    font-weight: 400;
    border: 0
}

.p5,
h2 {
    padding: 4px
}

html {
    background-color: #000
}

body {
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    color: #aaa
}

a {
    text-decoration: none;
    color: #<?=$ThemeColor?>
}

a:hover {
    color: #ccc
}

a.blue {
    color: #fff
}

a.blue:hover {
    color: #fff;
    text-decoration: underline
}

.b {
    font-weight: 700
}

fieldset,
h2,
h3,
th {
    font-size: 12px
}

h1 {
    font: 700 12px Arial, Tahoma, Sans-serif
}

.content-note,
.nav a,
.scored,
h2,
tr.menu th {
    font-weight: 700
}

h2 {
    color: #ccc
}

.left {
    float: left
}

.right {
    float: right
}

.clear:after,
.clear:before,
.match-row,
.row-gray:after,
.match-row,
.row-gray:before,
.row-gray .row-wrapper:after,
.row-gray .row-wrapper:before,
.row-gray:after,
.row-gray:before,
.row:after,
.row:before {
    content: "";
    display: table
}

.tright {
    text-align: right !important
}

.tleft {
    text-align: left !important
}

.tcenter {
    text-align: center !important
}

.bcenter {
    margin: auto
}

.hidden {
    display: none !important
}

.ml5 {
    margin-left: 5px
}

.mn {
    margin: 0 !important
}

.mbn {
    margin-bottom: 0 !important
}

.mtn {
    margin-top: 0 !important
}

.mrn {
    margin-right: 0 !important
}

.mln {
    margin-left: 0 !important
}

.mr {
    margin-right: 10px
}

.ml {
    margin-left: 10px
}

.mt {
    margin-top: 10px
}

.mt1 {
    margin-top: 1px
}

.mt20,
.pp h3 {
    margin-top: 20px
}

.mb20 {
    margin-bottom: 20px
}

.mt30 {
    margin-top: 30px
}

.bn {
    border: none !important
}

.bb {
    border-bottom: solid 1px #212121 !important
}

.bt {
    border-top: solid 1px #212121 !important
}

.br {
    border-right: solid 1px #212121 !important
}

.brn {
    border-right: none !important
}

.bbn {
    border-bottom: none !important
}

.btn {
    border-top: none !important
}

.pb {
    padding-bottom: 10px
}

.pr {
    padding-right: 10px !important
}

.pr13 {
    padding-right: 13px !important
}

.pn {
    padding: 0 !important
}

.pln {
    padding-left: 0 !important
}

.prn {
    padding-right: 0 !important
}

.mt4 {
    /* margin-top: 4px */
}

.mb4 {
    margin-bottom: 4px
}

.ml4 {
    margin-left: 4px
}

.mr4 {
    margin-right: 4px
}

.mr15 {
    margin-right: 15px
}

.ml20 {
    margin-left: 20px
}

.pt4 {
    padding-top: 4px !important
}

.pr4 {
    padding-right: 4px !important
}

.pb4 {
    padding-bottom: 4px !important
}

.pl4 {
    padding-left: 4px !important
}

.pbn {
    padding-bottom: 0
}

.p10 {
    padding: 10px !important
}

.fs11 {
    font-size: 11px !important;
    color: #999;
    line-height: 16px
}

.back {
    text-align: right;
    color: #ccc;
    font-size: 12px
}

.content-note,
.nav li,
.provider-bullet,
tr.menu th {
    text-align: center
}

.back a {
    color: #<?=$ThemeColor?>
}

.back a:hover {
    color: #fff;
    text-decoration: underline
}

.content-note {
    color: #fff;
    padding: 20px 4px;
    font-size: 13px
}

.content-note .icon {
    fill: #<?=$ThemeColor?>;
    width: 20px;
    height: 20px;
    position: relative;
    top: 5px;
    margin-right: 10px
}

td.space {
    background: #000 !important;
    border: none !important;
    padding: 0 !important
}

td.space span {
    border-top: solid 1px #212121;
    border-bottom: solid 1px #212121;
    display: block;
    margin: 10px 0 6px;
    height: 1px;
    line-height: 1px
}

iframe {
    border: 0;
    overflow: hidden
}

.sm {
    font-size: 11px !important
}

.bh th {
    background: #333 !important;
    color: #aaa !important
}

.ln36 {
    line-height: 36px
}

.gray {
    color: #666 !important
}

.assists-link,
.orange {
    color: #<?=$ThemeColor?>
}

.orange.selected {
    color: #fff
}

.visible-inline-xxs,
.visible-xs,
.visible-xxs {
    display: none
}

.visible-md,
.visible-sm {
    display: block
}

.hidden-md {
    display: none
}

.hidden-sm {
    display: none !important
}

.highlight {
    background-color: #333 !important
}

.min-short.highlight:before,
.min.highlight:before {
    position: absolute;
    content: '';
    width: 4px;
    height: 18px;
    display: block;
    left: 0;
    background: #333;
    top: 0
}

.tennis-double .min-short.highlight:before {
    height: 36px
}

.well {
    border: 1px solid #666;
    padding: 10px;
    margin: 4px;
    border-radius: 4px;
    background: #222
}

ol.ss {
    list-style-type: none;
    counter-reset: item;
    margin: 0;
    padding: 0
}

ol.ss>li {
    display: table;
    counter-increment: item;
    margin-bottom: .6em
}

ol.ss>li:before {
    content: counters(item, ".") ". ";
    display: table-cell;
    padding-right: .6em
}

ol.ss li ol>li {
    margin: 0
}

ol.ss li ol>li:before {
    content: counters(item, ".") " "
}

@-ms-viewport {
    width: device-width
}

.banner-footer>div {
    overflow: hidden;
    margin: 0 auto;
    position: fixed;
    text-align: center;
    z-index: 100
}

.league-cricket,
.league-wc {
    color: #000;
    border-collapse: collapse;
    width: 100%;
    margin-top: 4px;
    background: #dfdfdf
}

.league-cricket .league a,
.league-wc th a {
    color: #ccc;
    text-decoration: underline
}

.league-cricket .league a:hover,
.league-wc th a:hover {
    color: #fff
}

th .date,
th .league {
    display: block;
    height: 18px;
    line-height: 18px
}

th .league {
    margin-left: 4px;
    float: left
}

th .date {
    margin-right: 4px;
    font-size: 11px;
    float: right
}

tr.menu th {
    color: #666;
    font-size: 11px
}

tr.menu th a:hover {
    color: #fff;
    text-decoration: none
}

.label {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin: 0 9px 0 5px;
    border-radius: 3px;
    border: 1px solid #666;
    vertical-align: sub
}

.label-row {
    line-height: 22px;
    padding-left: 30px;
    text-indent: -30px
}

.settings-box {
    width: 100%;
    position: absolute;
    right: 0;
    top: 24px;
    border-bottom: 1px solid #666
}

.settings-box .row {
    padding: 10px 4px
}

input[type=radio] {
    vertical-align: top;
    cursor: pointer
}

.right-bar .league-table-container {
    position: relative;
    overflow: hidden
}

.right-bar .sticky-bnr {
    position: sticky;
    top: 5px
}

.hidden-desktop {
    display: none
}

.provider-bullet {
    position: absolute;
    right: 28px;
    top: 1px;
    background: #<?=$ThemeColor?>;
    border-radius: 50%;
    width: 16px;
    height: 16px;
    color: #000;
    font-size: 9px;
    line-height: 16px
}

.provider-bullet.mapped {
    width: 14px;
    height: 14px;
    line-height: 14px;
    border: 1px solid #<?=$ThemeColor?>;
    color: #<?=$ThemeColor?>;
    background: 0 0
}

.provider-bullet.provider1 {
    background: #70b6ff
}

.provider-bullet.provider1.mapped {
    color: #70b6ff;
    border-color: #70b6ff;
    background: 0 0
}

.provider-bullet.provider2 {
    background: #0052AA
}

.provider-bullet.provider2.mapped {
    color: #0052AA;
    border-color: #0052AA;
    background: 0 0
}

.provider-bullet.provider3 {
    background: #6E6200
}

.provider-bullet.provider3.mapped {
    color: #6E6200;
    border-color: #6E6200;
    background: 0 0
}

.provider-bullet.provider4 {
    background: #006400
}

.provider-bullet.provider4.mapped {
    color: #006400;
    border-color: #006400;
    background: 0 0
}

.provider-bullet.provider5 {
    background: #945894
}

.provider-bullet.provider5.mapped {
    color: #945894;
    border-color: #945894;
    background: 0 0
}

.provider-bullet.provider6 {
    background: #5bb1b1
}

.provider-bullet.provider6.mapped {
    color: #5bb1b1;
    border-color: #5bb1b1;
    background: 0 0
}

.provider-bullet.provider7 {
    background: #6E0000
}

.provider-bullet.provider7.mapped {
    color: #6E0000;
    border-color: #6E0000;
    background: 0 0
}

@media (max-width:800px) {
    .provider-bullet {
        display: none
    }
}

.min-short .provider-bullet {
    position: relative;
    right: initial;
    display: inline-block
}

.soccer .provider-bullet {
    top: 8px
}

@media (max-width:800px) {
    .visible-md {
        display: none
    }

    .hidden-desktop,
    .hidden-md {
        display: block
    }

    .mob .hidden-xs {
        display: none
    }

    .mob .visible-xs {
        display: block
    }

    .mob .hidden-sm {
        display: block !important
    }

    .tagline {
        width: 340px;
        height: 68px
    }

    .mob .back {
        margin: 5px
    }

    .mob .back span {
        display: none
    }

    .mob .back a {
        background: #<?=$ThemeColor?>;
        padding: 1px 8px 3px;
        font-weight: 700;
        color: #111 !important;
        border-radius: 4px
    }
}

.main-banner img,
.nav {
    width: 100%
}

@media (max-width:480px) {
    .hidden-xxs {
        display: none
    }

    .visible-xxs {
        display: block
    }

    .visible-inline-xxs {
        display: inline
    }

    .visible-inline-block-xxs {
        display: inline-block
    }
}

@media (max-width:400px) {
    .popup .hidden-xs {
        display: none
    }

    .popup .hidden-sm {
        display: block !important
    }
}

.main-banner {
    border-bottom: solid 1px #212121;
    height: 92px
}

.nav {
    color: #aaa;
    background: #212121;
    display: table;
    border-bottom: solid 1px #<?=$ThemeColor?>
}

.nav ul {
    display: table-row
}

.nav li {
    display: table-cell
}

.nav li.first a {
    border-left: none
}

.nav li:last-child a {
    border-right: none
}

.nav a {
    line-height: 11px;
    height: 11px;
    padding: 12px 0;
    color: #aaa;
    display: block;
    position: relative;
    border-left: solid 1px #000
}

.nav a.selected,
.nav a:hover {
    color: #<?=$ThemeColor?>
}

.nav a.selected:after {
    bottom: 0;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 138, 0, 0);
    border-bottom-color: #<?=$ThemeColor?>;
    margin-left: -7px;
    border-width: 5px 7px
}

.footer-switch,
footer {
    border-top: solid 1px #212121
}

.nav a .icon-info {
    display: inline-block;
    width: 10px;
    top: 2px;
    height: 14px;
    position: relative
}

.nav .timezone {
    padding: 10px;
    border-bottom: solid 1px #444;
    background: #333;
    color: #<?=$ThemeColor?>;
}

.nav .timezone span {
    margin-left: 10px
}

@media (max-width:800px) {
    .mob .nav {
        border-bottom: none;
        background: #111;
        padding-bottom: 100px
    }

    .mob .nav a,
    .mob .nav-footer {
        border-bottom: solid 1px #212121
    }

    .mob .nav li,
    .mob .nav ul {
        display: block
    }

    .mob .nav a {
        font-size: 13px;
        padding: 20px 10px;
        border-left: none;
        border-right: none;
        color: #ccc
    }

    .mob .nav a.selected,
    .mob .nav a:hover {
        color: #<?=$ThemeColor?> !important
    }

    .mob .nav a.selected:after,
    .mob .nav a:hover:after {
        display: none
    }

    .mob .nav-footer {
        position: fixed;
        top: 0;
        box-sizing: border-box;
        width: 100%;
        z-index: 100;
        background: #111;
        font-size: 9px;
        table-layout: fixed
    }

    .mob .nav-footer.hidden-sm {
        display: table !important
    }

    .mob .nav-footer:after,
    .mob .nav-footer:before {
        content: none
    }

    .mob .nav-footer .item {
        display: table-cell;
        vertical-align: middle
    }

    .mob .nav-footer .item svg {
        display: inline-block;
        stroke-width: 0;
        fill: #ccc;
        width: 24px;
        height: 24px
    }

    .mob .nav-footer .item span {
        display: block;
        color: #aaa
    }

    .mob .nav-footer .item .active span,
    .mob .nav-footer .item .active svg,
    .mob .nav-footer .item:hover span,
    .mob .nav-footer .item:hover svg {
        color: #<?=$ThemeColor?>;
        fill: #<?=$ThemeColor?>;
        font-weight: bolder
    }

    .mob .nav-footer .item .menu-icon,
    .mob .nav-footer .item a {
        height: 40px;
        padding: 8px 0 2px;
        text-align: center;
        display: block;
        position: relative
    }

    .mob .nav-footer .item.logo {
        width: 140px
    }

    .mob .nav-footer .item.logo a {
        height: 50px;
        padding: 0
    }

    .mob .nav-footer .item.logo a img {
        height: 50px
    }

    .mob .nav-footer .item .menu-icon.menu-icon-new span:after {
        position: absolute;
        content: '!';
        width: 12px;
        height: 12px;
        line-height: 12px;
        vertical-align: middle;
        background: #<?=$ThemeColor?>;
        color: #000;
        right: -14px;
        top: -23px;
        font-weight: 700;
        text-align: center;
        border-radius: 50%
    }

    .mob footer {
        text-align: center
    }

    .mob footer .copy,
    .mob footer .keywords {
        float: none
    }
}

footer {
    background: #000;
    padding: 10px
}

footer .info,
footer .links {
    padding: 5px 0;
    text-align: center
}

footer .info {
    color: #ccc
}

footer .info h2 {
    background: 0 0;
    font-weight: 400
}

footer .info a {
    color: #ccc;
    text-decoration: underline
}

footer .links a {
    color: #aaa
}

footer .links .item {
    position: relative;
    margin: 0 5px;
    color: #555
}

footer .links .item:after {
    position: absolute;
    content: '';
    width: 1px;
    height: 10px;
    right: -8px;
    top: 2px;
    background: #555
}

.cright {
    padding: 10px;
    text-align: center;
}

.footer-switch,
.inc,
.left-bar li,
.wrapper {
    position: relative
}

footer .links .item:last-child:after {
    display: none
}

.footer-switch {
    text-align: center
}

.footer-switch a {
    color: #ccc;
    padding: 10px;
    display: inline-block
}

@media (min-width:800px),
(max-width:800px) {

    /*   Here Flags     */
    .mob .flag {
        display: inline-block;
        width: 25px;
        height: 15px;
        margin-right: 10px;
        top: 4px;
        position: relative
    }

    .mob.tennis .flag {
        background-position: 0 -1995px
    }

    .mob.basketball .flag {
        background-position: 0 -2055px
    }

    .mob.hockey .flag {
        background-position: 0 -2010px
    }

    .mob.cricket .flag {
        background-position: 0 -2055px
    }

    .adriatic {
        background-position: 0 0 !important
    }

    .africa {
        background-position: 0 -15px !important
    }

    .algeria {
        background-position: 0 -30px !important
    }

    .argentina {
        background-position: 0 -45px !important
    }

    .armenia {
        background-position: 0 -60px !important
    }

    .asia {
        background-position: 0 -75px !important
    }

    .asian-cup {
        background-position: 0 -1845px !important
    }

    .australia {
        background-position: 0 -90px !important
    }

    .austria {
        background-position: 0 -105px !important
    }

    .azerbaijan {
        background-position: 0 -120px !important
    }

    .baltic {
        background-position: 0 -135px !important
    }

    .belarus {
        background-position: 0 -150px !important
    }

    .belgium {
        background-position: 0 -165px !important
    }

    .bolivia {
        background-position: 0 -180px !important
    }

    .bosnia,
    .bosnia-herzegovina {
        background-position: 0 -195px !important
    }

    .brazil {
        background-position: 0 -210px !important
    }

    .britain,
    .great-britain {
        background-position: 0 -225px !important
    }

    .bulgaria {
        background-position: 0 -240px !important
    }

    .chile {
        background-position: 0 -255px !important
    }

    .china {
        background-position: 0 -270px !important
    }

    .colombia {
        background-position: 0 -285px !important
    }

    .concacaf,
    .concacaf-nations-league {
        background-position: 0 -300px !important
    }

    .confederation,
    .world-cup-u17 {
        background-position: 0 -315px !important
    }

    .costa-rica,
    .costarica {
        background-position: 0 -330px !important
    }

    .croatia {
        background-position: 0 -345px !important
    }

    .cyprus {
        background-position: 0 -360px !important
    }

    .czech-republic,
    .repubblica-ceca {
        background-position: 0 -375px !important
    }

    .denmark {
        background-position: 0 -390px !important
    }

    .ecuador {
        background-position: 0 -405px !important
    }

    .egypt {
        background-position: 0 -420px !important
    }

    .el-salvador,
    .elsalvador {
        background-position: 0 -435px !important
    }

    .england {
        background-position: 0 -465px !important
    }

    .estonia {
        background-position: 0 -480px !important
    }

    .europe {
        background-position: 0 -510px !important
    }

    .finland {
        background-position: 0 -525px !important
    }

    .france,
    .martinique {
        background-position: 0 -540px !important
    }

    .georgia {
        background-position: 0 -555px !important
    }

    .germany {
        background-position: 0 -570px !important
    }

    .greece {
        background-position: 0 -585px !important
    }

    .guatemala {
        background-position: 0 -600px !important
    }

    .holland,
    .netherlands {
        background-position: 0 -615px !important
    }

    .honduras {
        background-position: 0 -630px !important
    }

    .hungary {
        background-position: 0 -645px !important
    }

    .iceland {
        background-position: 0 -660px !important
    }

    .international {
        background-position: 0 -675px !important
    }

    .basketball .international {
        background-position: 0 -2025px !important
    }

    .hockey .international,
    .hockey .world-cup {
        background-position: 0 -2010px !important
    }

    .iran {
        background-position: 0 -690px !important
    }

    .ireland {
        background-position: 0 -705px !important
    }

    .israel {
        background-position: 0 -720px !important
    }

    .italy {
        background-position: 0 -735px !important
    }

    .japan {
        background-position: 0 -750px !important
    }

    .kazakhstan {
        background-position: 0 -765px !important
    }

    .korea {
        background-position: 0 -780px !important
    }

    .kuwait {
        background-position: 0 -795px !important
    }

    .latvia {
        background-position: 0 -810px !important
    }

    .lithuania {
        background-position: 0 -825px !important
    }

    .m {
        background-position: 0 -840px !important
    }

    .macedonia {
        background-position: 0 -855px !important
    }

    .mexico {
        background-position: 0 -870px !important
    }

    .mm {
        background-position: 0 -885px !important
    }

    .moldova {
        background-position: 0 -900px !important
    }

    .montenegro {
        background-position: 0 -915px !important
    }

    .morocco {
        background-position: 0 -930px !important
    }

    .mw {
        background-position: 0 -945px !important
    }

    .nba {
        background-position: 0 -960px !important
    }

    .ncaa {
        background-position: 0 -975px !important
    }

    .nhl {
        background-position: 0 -990px !important
    }

    .norway {
        background-position: 0 -1005px !important
    }

    .oceania {
        background-position: 0 -1020px !important
    }

    .paraguay {
        background-position: 0 -1035px !important
    }

    .peru {
        background-position: 0 -1050px !important
    }

    .poland {
        background-position: 0 -1065px !important
    }

    .portugal {
        background-position: 0 -1080px !important
    }

    .romania {
        background-position: 0 -1095px !important
    }

    .russia {
        background-position: 0 -1110px !important
    }

    .scotland {
        background-position: 0 -1125px !important
    }

    .serbia {
        background-position: 0 -1140px !important
    }

    .singapore {
        background-position: 0 -1155px !important
    }

    .slovakia {
        background-position: 0 -1170px !important
    }

    .slovenia {
        background-position: 0 -1185px !important
    }

    .south-africa,
    .south_africa,
    .sud-africa {
        background-position: 0 -1200px !important
    }

    .south-america {
        background-position: 0 -1215px !important
    }

    .south-corea,
    .south-korea {
        background-position: 0 -780px !important
    }

    .spain {
        background-position: 0 -1230px !important
    }

    .sweden {
        background-position: 0 -1245px !important
    }

    .switzerland {
        background-position: 0 -1260px !important
    }

    .thailand {
        background-position: 0 -1275px !important
    }

    .tunisia {
        background-position: 0 -1290px !important
    }

    .turkey {
        background-position: 0 -1305px !important
    }

    .u20_worldcup,
    .world-cup-u20 {
        background-position: 0 -315px !important
    }

    .u21_euro {
        background-position: 0 -1335px !important
    }

    .ukraine {
        background-position: 0 -1350px !important
    }

    .uruguay {
        background-position: 0 -1365px !important
    }

    .usa {
        background-position: 0 -1380px !important
    }

    .venezuela {
        background-position: 0 -1395px !important
    }

    .vietnam {
        background-position: 0 -1410px !important
    }

    .w {
        background-position: 0 -1425px !important
    }

    .wales {
        background-position: 0 -1440px !important
    }

    .wm {
        background-position: 0 -1455px !important
    }

    .wnba {
        background-position: 0 -1470px !important
    }

    .worldcup {
        background-position: 0 -1485px !important
    }

    .ww {
        background-position: 0 -1500px !important
    }

    .champions-league,
    .champions-league-2018-2019,
    .champions-league-2019-2020,
    .champions-league-2020-2021,
    .euro,
    .euro-2012,
    .euro-u-17-women,
    .euro-u-17-women-2021,
    .euro-u-19-2021,
    .euro-u-19-women,
    .euro-under-17,
    .euro-under-19,
    .euro-under-19-2018,
    .euro-under-19-2019,
    .euro-under-19-2020,
    .euro-under-19-2021,
    .euro-under-21,
    .euro-women,
    .euro-women-2017,
    .euro-women-2021,
    .eurocups,
    .european-cups,
    .european-cups-uefa-nations-league-2018-2019,
    .european-cups-uefa-nations-league-2020-2021,
    .european-cups-uefa-women-champions-league-2018-2019,
    .european-cups-uefa-women-champions-league-2019-2020,
    .eurou19,
    .u17_euro,
    .uefa-nations-league,
    .uefa-women-champions-league,
    .uefa-women-s-champions-league,
    .uefa-youth-league,
    .uefachampionsleague {
        background-position: 0 -495px !important
    }

    .euro {
        background-position: -25px -1590px !important
    }

    .intl {
        background-position: -25px -570px !important
    }

    .more {
        background-position: 0 -1560px !important
    }

    .europa-league,
    .europa-league-2020-2021,
    .uefaeuropaleague {
        background-position: 0 -1590px !important
    }

    .canada {
        background-position: 0 -1875px !important
    }

    .india {
        background-position: 0 -1785px !important
    }

    .new-caledonia {
        background-position: 0 -1935px !important
    }

    .new-zealand,
    .new_zealand {
        background-position: 0 -1770px !important
    }

    .qatar {
        background-position: 0 -1890px !important
    }

    .san-marino {
        background-position: 0 -1905px !important
    }

    .uzbekistan {
        background-position: 0 -1920px !important
    }

    .wimbledon {
        background-position: 0 -2085px !important
    }

    .australian-open {
        background-position: 0 -2100px !important
    }

    .roland-garros {
        background-position: 0 -2115px !important
    }

    .us-open {
        background-position: 0 -2130px !important
    }

    .davis-cup {
        background-position: 0 -2145px !important
    }

    .fed-cup {
        background-position: 0 -2160px !important
    }

    .hopman-cup {
        background-position: 0 -2175px !important
    }

    .atp-1000-masters {
        background-position: 0 -2190px !important
    }

    .atp-500 {
        background-position: 0 -2205px !important
    }

    .atp-250 {
        background-position: 0 -2220px !important
    }

    .wta,
    .wta-challenger {
        background-position: 0 -2235px !important
    }

    .atp-challenger {
        background-position: 0 -2250px !important
    }

    .atp-world-finals {
        background-position: 0 -2265px !important
    }

    .euro-cup {
        background-position: 0 -2280px !important
    }

    .euro-league {
        background-position: 0 -2295px !important
    }

    .n-ireland,
    .northern-ireland {
        background-position: -25px -1575px !important
    }

    .albania {
        background-position: 0 -2325px !important
    }

    .b-world-championship,
    .b-world-championship-u-20,
    .hockey .champions-league,
    .hockey .world-championship,
    .world-championship-u-18,
    .world-championship-u-20 {
        background-position: 0 -2340px !important
    }

    .malta {
        background-position: 0 -2355px !important
    }

    .korea-republic {
        background-position: 0 -2370px !important
    }

    .faroe-islands {
        background-position: 0 -2385px !important
    }

    .luxembourg {
        background-position: 0 -2400px !important
    }

    .oman {
        background-position: 0 -2415px !important
    }

    .saudi-arabia {
        background-position: 0 -2430px !important
    }

    .uae,
    .united-arab-emirates {
        background-position: 0 -2445px !important
    }

    .world-team-cup {
        background-position: 0 -2460px !important
    }

    .copa-america {
        background-position: 0 -2490px !important
    }

    .world-cup-2014 {
        background-position: 0 -2505px !important
    }

    .world-cup {
        background-position: -25px -1605px !important
    }

    .world-cup-women {
        background-position: 0 -2520px !important
    }

    .world-championship-u19,
    .world-championship-u19-women {
        background-position: 0 -2535px !important
    }

    .basketball .world-cup,
    .euro-champ-women-u20,
    .euro-u18,
    .euro-u18-women,
    .euro-u20,
    .eurobasket,
    .eurochallenge {
        background-position: 0 -2550px !important
    }

    .olympic-games,
    .olympics-men,
    .summer-olympics-2012,
    .summer-olympics-2012-women {
        background-position: 0 -2580px !important
    }

    .kenya {
        background-position: 0 -2565px !important
    }

    .nigeria {
        background-position: 0 -2595px !important
    }

    .senegal {
        background-position: 0 -2610px !important
    }

    .guinea {
        background-position: 0 -2625px !important
    }

    .yemen {
        background-position: 0 -2640px !important
    }

    .cameroon {
        background-position: 0 -2655px !important
    }

    .sudan {
        background-position: 0 -2670px !important
    }

    .mali {
        background-position: 0 -2685px !important
    }

    .togo {
        background-position: 0 -2700px !important
    }

    .botswana {
        background-position: 0 -2715px !important
    }

    .cape-verde {
        background-position: 0 -2730px !important
    }

    .ivory-coast {
        background-position: 0 -2745px !important
    }

    .burkina-faso {
        background-position: 0 -2760px !important
    }

    .taiwan {
        background-position: 0 -2775px !important
    }

    .gambia {
        background-position: 0 -2790px !important
    }

    .angola {
        background-position: 0 -2805px !important
    }

    .congo {
        background-position: 0 -2820px !important
    }

    .dr-congo {
        background-position: 0 -2835px !important
    }

    .fiji {
        background-position: 0 -2850px !important
    }

    .barbados {
        background-position: 0 -2865px !important
    }

    .grenada {
        background-position: 0 -2880px !important
    }

    .puerto-rico {
        background-position: 0 -2895px !important
    }

    .zambia {
        background-position: 0 -2910px !important
    }

    .sierra-leone {
        background-position: 0 -2925px !important
    }

    .zimbabwe {
        background-position: 0 -2940px !important
    }

    .mozambique {
        background-position: 0 -2955px !important
    }

    .malaysia {
        background-position: 0 -2970px !important
    }

    .haiti {
        background-position: 0 -2985px !important
    }

    .jordan {
        background-position: -25px 0 !important
    }

    .uganda {
        background-position: -25px -15px !important
    }

    .hong-kong {
        background-position: -25px -30px !important
    }

    .malawi {
        background-position: -25px -45px !important
    }

    .nicaragua {
        background-position: -25px -60px !important
    }

    .panama {
        background-position: -25px -75px !important
    }

    .indonesia {
        background-position: -25px -90px !important
    }

    .andorra {
        background-position: -25px -105px !important
    }

    .iraq {
        background-position: -25px -120px !important
    }

    .ghana {
        background-position: -25px -135px !important
    }

    .pakistan {
        background-position: -25px -150px !important
    }

    .bermuda {
        background-position: -25px -165px !important
    }

    .guadeloupe {
        background-position: -25px -180px !important
    }

    .jamaica {
        background-position: -25px -195px !important
    }

    .trinidad-and-tobago {
        background-position: -25px -210px !important
    }

    .bahrain {
        background-position: -25px -225px !important
    }

    .lebanon {
        background-position: -25px -240px !important
    }

    .palestine {
        background-position: -25px -255px !important
    }

    .vanuatu {
        background-position: -25px -270px !important
    }

    .namibia {
        background-position: -25px -285px !important
    }

    .rwanda {
        background-position: -25px -300px !important
    }

    .tanzania {
        background-position: -25px -315px !important
    }

    .antigua-and-barbuda {
        background-position: -25px -330px !important
    }

    .cuba {
        background-position: -25px -345px !important
    }

    .tahiti {
        background-position: -25px -360px !important
    }

    .lesotho {
        background-position: -25px -375px !important
    }

    .madagascar {
        background-position: -25px -390px !important
    }

    .mauritius {
        background-position: -25px -405px !important
    }

    .swaziland {
        background-position: -25px -420px !important
    }

    .gabon {
        background-position: -25px -435px !important
    }

    .saint-kitts-and-nevis {
        background-position: -25px -450px !important
    }

    .solomon-islands {
        background-position: -25px -465px !important
    }

    .benin {
        background-position: -25px -480px !important
    }

    .united-league {
        background-position: -25px -510px !important
    }

    .european-trophy {
        background-position: -25px -525px !important
    }

    .world-championship {
        background-position: -25px -495px !important
    }

    .africa-cup-of-nations,
    .africa-cup-of-nations-u17,
    .africa-cup-of-nations-u23 {
        background-position: -25px -540px !important
    }

    .syria {
        background-position: -25px -555px !important
    }

    .central-african-republic {
        background-position: -25px -585px !important
    }

    .equatorial-guinea {
        background-position: -25px -600px !important
    }

    .ethiopia {
        background-position: -25px -615px !important
    }

    .guyana {
        background-position: -25px -630px !important
    }

    .liberia {
        background-position: -25px -645px !important
    }

    .libya {
        background-position: -25px -660px !important
    }

    .niger {
        background-position: -25px -675px !important
    }

    .papua-new-guinea {
        background-position: -25px -690px !important
    }

    .samoa {
        background-position: -25px -705px !important
    }

    .confederations-cup {
        background-position: -25px -720px !important
    }

    .burundi {
        background-position: -25px -840px !important
    }

    .bangladesh {
        background-position: -25px -870px !important
    }

    .afghanistan {
        background-position: -25px -885px !important
    }

    .philippines {
        background-position: -25px -900px !important
    }

    .sri-lanka {
        background-position: -25px -915px !important
    }

    .myanmar {
        background-position: -25px -930px !important
    }

    .mongolia {
        background-position: -25px -945px !important
    }

    .nepal {
        background-position: -25px -975px !important
    }

    .cambodia {
        background-position: -25px -1005px !important
    }

    .tajikistan {
        background-position: -25px -1035px !important
    }

    .turkmenistan {
        background-position: -25px -1080px !important
    }

    .gibraltar {
        background-position: -25px -1440px !important
    }

    .liechtenstein {
        background-position: -25px -1485px !important
    }

    .khl {
        background-position: -25px -1425px !important
    }

    .kosovo {
        background-position: -25px -1620px !important
    }

    .wc_t20 {
        background-position: 0 -1620px !important
    }

    .wc_odi {
        background-position: 0 -1635px !important
    }

    .wc_t20_f {
        background-position: 0 -1650px !important
    }

    .wc_odi_f {
        background-position: 0 -1665px !important
    }

    .intl_t20 {
        background-position: 0 -1680px !important
    }

    .intl_odi {
        background-position: 0 -1695px !important
    }

    .intl_test {
        background-position: 0 -1710px !important
    }

    .icc_champ {
        background-position: 0 -1725px !important
    }

    .asia_cup {
        background-position: 0 -1740px !important
    }

    .cl_t20 {
        background-position: 0 -1755px !important
    }

    .west_indies {
        background-position: 0 -1830px !important
    }
}

.inc {
    width: 12px;
    height: 12px;
    top: 1px
}

.icon-warning {
    fill: #555
}

.icon-facebook {
    fill: #3B5998
}

.icon-twitter {
    fill: #1DA1F2
}

.icon-info {
    width: 16px;
    height: 16px;
    fill: #<?=$ThemeColor?>
}

.cricket-bat {
    fill: #907563;
    width: 11px;
    height: 11px
}

.cricket-ball {
    fill: #DD3E3E;
    width: 11px;
    height: 11px
}

.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-2-4,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9 {
    position: relative;
    min-height: 1px;
    padding-left: 0;
    padding-right: 0;
    float: left;
}

.col-12 {
    float: none;
    width: 100%
}

.col-11 {
    width: 91.66666667%
}

.col-10 {
    width: 83.33333333%
}

.col-9 {
    width: 75%
}

.col-8 {
    width: 66.66666667%
}

.col-7 {
    width: 58.33333333%
}

.col-6 {
    width: 50%
}

.col-5 {
    width: 41.66666667%
}

.col-4 {
    width: 33.33333333%
}

.col-3 {
    width: 25%
}

.col-2 {
    width: 16.66666667%
}

.col-1 {
    width: 8.33333333%
}

.col-offset-6 {
    margin-left: 50%
}

.col-offset-4 {
    margin-left: 33.33333333%
}

.col-offset-3 {
    margin-left: 25%
}

.col-offset-1 {
    margin-left: 8.33333333%
}

.top-add {
    margin: 20px auto;
    text-align: center;
    height: 90px
}

.wrapper {
    border: 1px solid #212121;
    width: 980px;
    margin: 0 auto 40px
}

.left-bar {
    background-color: #212121;
    border-right: solid 1px #000;
    flex: 0 0 160px;
    float: left;
    overflow: hidden;
    width: 160px
}

.left-bar li svg {
    display: none
}

.left-bar .new {
    position: absolute;
    right: 2px;
    top: 4px
}

.left-bar .buttons a {
    padding: 2px 4px 6px 4px;
    margin: 4px 0px 4px 0px;
    height: 18px;
    line-height: 18px;
    font-weight: 700;
    display: block;
    color: #fff;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    position: relative;
    border-bottom: solid 1px #000
}

.left-bar .buttons a.cat .arrow {
    display: none;
    position: absolute;
    top: 10px;
    width: 20px;
    height: 20px;
    fill: #555;
    right: 10px
}

.left-bar .buttons a.selected,
.left-bar .buttons a:hover {
    color: #<?=$ThemeColor?> !important;
    padding-left: 8px
}

.left-bar .buttons a.selected:before {
    background: #<?=$ThemeColor?>;
    position: absolute;
    content: '';
    height: 100%;
    width: 4px;
    display: block;
    left: 0;
    z-index: 20;
    top: 0
}

.left-bar .buttons ul {
    border: 0;
    margin-bottom: 0
}

.left-bar .buttons ul a {
    background-color: #555;
    border-bottom: 0;
    border-top: 0;
    font-weight: 400
}

.left-bar .buttons ul ul a {
    background-color: #777
}

.new {
    padding: 0 3px !important;
    border-radius: 4px;
    background: #<?=$ThemeColor?>;
    color: #000;
    font-size: 8px;
    margin-left: 3px;
    display: inline-block;
    vertical-align: middle;
    line-height: normal;
    font-weight: bolder
}

.new-large {
    padding: 0 5px !important
}

.right-bar {
    flex: 0 0 300px;
    float: left;
    width: 300px;
    position: relative
}

.right-bar img {
    margin: 0px 0 0px
}

.content .mb4:last-child,
.right-bar .buttons {
    margin-bottom: 0
}

.right-bar iframe {
    vertical-align: top
}

.social-title {
    font-size: 50pt;
    color: #333;
}

.social-buttons {
    margin-top: -20px;
    margin-left: 70px;
}

.social-box {
    background: #212121;
    padding: 4px;
    height: 90px;
    overflow: hidden;
    border-bottom: solid 3px #<?=$ThemeColor?>;
}

.social-box svg {
    width: 20px;
    height: 20px;
    fill: #ccc
}

.social-box .facebook,
.social-box .google {
    flex: 1;
    align-self: center
}

.social-box .disabled img {
    margin: 0;
    padding: 0
}

.social-box iframe {
    vertical-align: bottom;
    margin-left: 0
}

.social-box .switch {
    float: left
}

.social-box .switch-on .toggle-on {
    display: inline
}

.social-box .switch-off .toggle-on,
.social-box .switch-on .toggle {
    display: none
}

.social-box .switch-off .toggle {
    display: inline
}

.table-title {
    font-size: 44pt;
    color: #333;
}

.table-subtitle {
    font-size: 18pt;
    font-weight: bold;
    color: #666;
    margin-top: -20px;
    margin-left: 214px;

}

.table-box {
    background: #212121;
    padding: 4px;
    overflow: hidden;
    border-bottom: solid 3px #<?=$ThemeColor?>;
}

.table-box hr,
.table-left hr {
    border: 1px solid #333;
}

.table-left {
    background: #212121;
    padding: 4px;
    overflow: hidden;
    border-bottom: solid 3px #<?=$ThemeColor?>;
}

    {
    border: 1px solid #333;
}

.table-title1 {
    text-align: center;
    font-size: 14pt;
    font-weight: bold;
    margin: 4px;
    color: #666;
}

.content-wrap {
    display: flex
}

.content {
    flex: 1;
    padding: 0 0 67px;
    position: relative;
    border-right: solid 1px #212121
}

.content-wider {
    flex: 1;
    padding: 0;
    border-right: none;
    min-width: 0
}

.banner {
    position: absolute;
    top: -1px;
    left: -164px
}

@media (max-width:800px) {

    .mob .content,
    .mob .content-wrap {
        display: block
    }

    .mob .col-xs-1,
    .mob .col-xs-10,
    .mob .col-xs-11,
    .mob .col-xs-12,
    .mob .col-xs-2,
    .mob .col-xs-3,
    .mob .col-xs-4,
    .mob .col-xs-5,
    .mob .col-xs-6,
    .mob .col-xs-7,
    .mob .col-xs-8,
    .mob .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-left: 0;
        padding-right: 0;
        float: left
    }

    .mob .col-xs-12 {
        float: none;
        width: 100%
    }

    .mob .col-xs-11 {
        width: 91.66666667%
    }

    .mob .col-xs-10 {
        width: 83.33333333%
    }

    .mob .col-xs-9 {
        width: 75%
    }

    .mob .col-xs-8 {
        width: 66.66666667%
    }

    .mob .col-xs-7 {
        width: 58.33333333%
    }

    .mob .col-xs-6 {
        width: 50%
    }

    .mob .col-xs-5 {
        width: 41.66666667%
    }

    .mob .col-xs-4 {
        width: 33.33333333%
    }

    .mob .col-xs-3 {
        width: 25%
    }

    .mob .col-xs-2 {
        width: 16.66666667%
    }

    .mob .col-xs-1 {
        width: 8.33333333%
    }

    .mob .wrapper {
        width: 100% !important;
        background: 0 0 !important;
        border: 0;
        margin-top: 50px
    }

    .wrapper {
        margin-bottom: 75px
    }

    .wrapper.smartbanner {
        margin-top: 134px
    }

    .wrapper.smartbanner .nav-footer {
        top: 84px
    }

    .mob .content {
        border-right: none;
        padding-bottom: 0
    }

    .mob .left-bar,
    .mob .right-bar,
    .mob.show-menu .ad,
    .mob.show-menu .buttons-static,
    .mob.show-menu .content {
        display: none
    }

    .right-bar iframe {
        width: 300px
    }

    .mob .menu-open {
        opacity: .2;
        display: none
    }

    .mob.show-menu .left-bar {
        display: block;
        flex: none;
        border-right: none;
        width: 100%;
        float: none;
        padding: 0;
        margin: 0;
        background-color: #222
    }

    .mob.show-menu .buttons {
        border-top: none;
        margin-bottom: 0
    }

    .mob.show-menu .buttons:last-child {
        padding-bottom: 0;
        border-bottom: none
    }

    .mob.show-menu .buttons a {
        padding: 10px 4px;
        display: none;
        background: #212121;
        border-bottom: solid 1px #000
    }

    .mob.show-menu .buttons a.cat .arrow {
        fill: #fff
    }

    .mob.show-menu .buttons a.cat:before {
        background: 0 0
    }

    .mob.show-menu .buttons a.cat.pgls {
        display: none !important
    }

    .mob.show-menu .buttons a.cat,
    .mob.show-menu .submenu .buttons {
        display: block !important
    }

    .mob.show-menu .buttons ul a {
        padding-left: 4px !important;
        font-weight: 700
    }

    .mob.show-menu .flag {
        margin-right: 15px;
        top: 2px
    }

    .mob.show-menu ul a.cat .arrow {
        display: block
    }

    .om.mob .wrapper {
        margin-top: 0
    }

    .om.mob .nav-footer {
        position: relative
    }

    .om.mob .nav-footer .item {
        vertical-align: top
    }

    .om.mob .nav-footer .item .menu-icon,
    .om.mob .nav-footer .item a {
        height: auto;

    }
}

@media (max-width:480px) {
    .mob .col-xxs-12 {
        width: 100% !important
    }
}

.warningbar {
    margin: 4px 0;
    padding: 4px 10px;
    background: #212121;
    line-height: 20px;
    color: #aaa
}

.error-msg {
    padding: 5px;
    border: 2px solid #A00;
    background-color: #FCC;
    color: #900;
    margin-bottom: 5px
}

.col-12 .error-msg {
    margin: 5px 5px 0
}

.error-msg p {
    margin-bottom: 10px
}

.error-msg a {
    text-decoration: underline;
    color: inherit
}

.infobar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    background: #111
}

.infobar .well {
    margin: 0;
    border: 0;
    border-top: solid 1px #666;
    border-radius: 0;
    background: #333
}

.infobar .icon-info {
    width: 30px;
    height: 30px;
    display: inline-block
}

button {
    background: #<?=$ThemeColor?>;
    border-radius: 4px;
    font-weight: 700;
    border: none;
    color: #fff;
    font-size: 13px;
    padding: 10px 20px
}

button.btn-secondary {
    background: #848484
}

.date-bar,
.date-bar>a {
    background: #000;
    box-sizing: border-box
}

.date-bar {
    border-bottom: solid 1px #<?=$ThemeColor?>;
    display: table;
    width: 100%
}

.date-bar>a {
    vertical-align: middle;
    text-align: center;
    line-height: normal;
    padding: 9px 5px;
    display: table-cell;
    color: #aaa
}

.date-bar>a:last-child {
    border-right: none
}

.date-bar>a:hover {
    background: #444
}

.date-bar>a.selected {
    position: relative;
    background: #000;
    color: #<?=$ThemeColor?>;
    font-weight: bolder
}

.date-bar .calendar-link.selected,
.date-bar .live-link.selected {
    color: #<?=$ThemeColor?>
}

.date-bar .calendar-link.selected svg,
.date-bar .live-link.selected svg {
    fill: #<?=$ThemeColor?>
}

.date-bar .calendar-link span,
.date-bar .live-link span {
    display: none
}

.date-bar .calendar-link svg,
.date-bar .live-link svg {
    fill: #fff;
    width: 20px;
    height: 20px;
    position: relative;
    top: 5px;
    margin-top: -10px
}

.date-bar .calendar-link svg.icon-live2,
.date-bar .live-link svg.icon-live2 {
    height: 30px;
    width: 30px;
    margin-top: -20px;
    top: 10px
}

@media (max-width:800px) {
    .mob .date-bar>a {
        padding: 14px 0
    }

    .mob .date-bar>a.selected:after {
        bottom: 0;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(255, 138, 0, 0);
        border-bottom-color: #<?=$ThemeColor?>;
        margin-left: -7px;
        border-width: 5px 7px
    }
}

@media (max-width:320px) {
    .mob .date-bar>a span {
        display: block
    }
}

.modal-wrapper {
    opacity: .3
}

.modal {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 100
}

.modal .row {
    background: inherit;
    color: inherit;
    border-top: none;
    padding: 4px
}

.modal-content {
    width: 90%;
    max-width: 530px;
    margin: 30px auto 0;
    background: #333;
    color: #aaa;
    border-radius: 4px
}

.modal .close {
    text-decoration: none;
    color: #FFF;
    font-weight: 700;
    font-size: 14px
}

.modal label,
.settings-title {
    font-size: 13px
}

.modal-header {
    background: #171717;
    border-radius: 4px 4px 0 0;
    padding: 0 4px
}

.modal-header .row {
    border-radius: 4px 4px 0 0;
    height: 30px;
    line-height: 30px;
    color: #FFF
}

.modal-body {
    padding: 10px 4px
}

.modal-body h3 {
    border-bottom: solid 1px #222;
    padding-bottom: 10px;
    margin: 4px 0
}

.modal-footer {
    padding: 10px 4px
}

.modal label {
    line-height: 26px;
    margin-left: 4px
}

.modal label.timezone {
    display: inline-block;
    height: 38px;
    line-height: 38px;
    margin-right: 4px
}

.modal a.timezone-reset {
    display: inline-block;
    padding: 4px;
    margin-left: 4px;
    background-color: #777;
    color: #fff;
    border-radius: 3px
}

.dropdown-timezone {
    position: relative;
    display: inline-block;
    vertical-align: bottom;
    width: 120px
}

.dropdown-timezone .cal-sel a {
    border: none;
    background: #181818;
    text-align: center;
    padding-left: 0;
    line-height: 13px;
    color: #FFF
}

.dropdown-timezone .cal-sel a:hover {
    background: #181818;
    color: #<?=$ThemeColor?>
}

.dropdown-timezone .abs .item a {
    border-bottom-color: #999
}

.modal .dropdown-timezone .abs .item a {
    border-bottom-color: #111;
    line-height: inherit
}

.dropdown-content {
    max-height: 250px;
    overflow: auto
}

.settings-label {
    font-size: inherit;
    line-height: inherit
}

.pagination {
    display: table;
    width: 100%;
    border-top: solid 1px #000
}

.pagination .arrows {
    display: table-cell;
    width: 52px
}

.pagination .arrows.arrows-right a:last-child {
    border-right: none
}

.pagination .pages {
    text-align: center;
    display: table-cell;
    vertical-align: top
}

.timezone-box button,
.timezone-box select {
    vertical-align: middle;
    line-height: 18px;
    display: inline-block
}

.pagination .icon,
.pagination .item {
    background: #333;
    display: block;
    float: left;
    text-align: center;
    padding: 6px 0;
    width: 26px;
    border-right: solid 1px #000;
    height: 26px;
    box-sizing: border-box
}

.pagination .item {
    float: none;
    display: inline-block
}

.pagination .item:hover {
    background-color: #555;
    color: #aaa
}

.pagination .item.selected {
    background-color: #666;
    color: #cfcfcf
}

.pagination .icon:hover {
    background-color: #555;
    color: #aaa
}

.pagination .icon svg {
    fill: #AAA;
    width: 16px;
    height: 16px;
    position: relative;
    top: -2px
}

.cal a.selected:after,
.tab2>div.selected:after {
    left: 50%;
    content: " ";
    height: 0;
    margin-left: -7px;
    pointer-events: none
}

.cal-wrap {
    margin-bottom: 0
}

.cal,
.cal.row {
    padding: 0;
    border-bottom: solid 1px #<?=$ThemeColor?>
}

.cal a {
    text-align: center;
    line-height: 17px;
    background: #111;
    box-sizing: border-box;
    padding: 10px 0;
    color: #aaa;
    text-transform: uppercase;
}

.cal a:hover {
    background: #333
}

.cal a.selected,
.cal a.selected:hover {
    background: #111 !important;
    color: #<?=$ThemeColor?> !important;
    cursor: default;
    position: relative;
    font-weight: bolder
}

.tab2,
.tabs {
    background: #000
}

.cal a.selected:after {
    bottom: 0;
    border: solid transparent;
    width: 0;
    position: absolute;
    border-color: rgba(255, 138, 0, 0);
    border-bottom-color: #<?=$ThemeColor?>;
    border-width: 5px 7px
}

.cal a:last-child {
    border-right: none
}

.tab2 {
    display: table;
    width: 100%;
    padding: 12px 0;
    font-size: 11px
}

.tab2 a {
    color: #aaa
}

.tab2>div {
    display: table-cell;
    text-align: center;
    position: relative
}

.tab2>div.selected {
    color: #<?=$ThemeColor?>;
    font-weight: 700
}

.tab2>div.selected:after {
    bottom: -12px;
    border: solid transparent;
    width: 0;
    position: absolute;
    border-color: rgba(255, 138, 0, 0);
    border-bottom-color: #<?=$ThemeColor?>;
    border-width: 5px 7px
}

.num,
.tt .tip:before {
    content: ""
}

@media (max-width:480px) {
    .mob .tab2 span {
        display: none
    }
}

.filter-bar {
    display: flex
}

.filter-bar .filter-date,
.filter-bar .filter-round {
    flex: 1;
    position: relative
}

.filter-bar .filter-date a.icon-double_angle_down:before,
.filter-bar .filter-round a.icon-double_angle_down:before {
    font-size: 18px;
    margin-left: 0;
    right: 6px;
    left: inherit
}

.filter-bar .filter-action {
    flex: 0 0 38px
}

.filter-bar .filter-action .cal-sel a {
    border-right: none
}

@media (max-width:480px) {
    .filter-bar {
        display: block
    }

    .filter-bar .filter-date,
    .filter-bar .filter-round {
        flex: none;
        border-bottom: solid 1px #212121
    }

    .filter-bar .filter-date .cal-sel a,
    .filter-bar .filter-round .cal-sel a {
        border-right: none
    }

    .filter-bar .filter-action {
        flex: none
    }

    .filter-bar .filter-action .cal-sel {
        flex: none;
        height: 38px;
    }
}

.tabs {
    margin: 0 auto
}

.tabs>a {
    display: inline-block;
    padding: 15px 25px;
    font-weight: 600;
    text-align: center;
    margin: 4px 0 0 4px;
    color: #666;
    position: relative
}

.abs .cal-cell,
.abs .item a {
    display: block;
    text-align: center
}

.abs .cal-current,
.league-table .tot,
.mini-table .top,
.newsletter-box .text {
    font-weight: 700
}

.tabs>a:hover {
    color: #fff;
    cursor: pointer
}

.tabs>a.active {
    background: #333;
    color: #ccc
}

.tabs>a .icon-info {
    width: 16px;
    height: 16px;
    left: 17px;
    top: 14px
}

@media (max-width:800px) {
    .mob .cal-wrap {
        padding: 0;
        border: 0;
        margin-bottom: 0
    }

    .mob .cal a {
        line-height: normal;
        padding: 14px 0
    }
}

.abs {
    position: absolute;
    top: 38px;
    z-index: 1000;
    width: 100%;
    background: #444
}

.abs .item a {
    border-bottom: 1px solid #222;
    padding: 12px;
    margin-top: 0;
    color: #fff
}

.abs .item a:hover {
    background: #555;
    color: #FFF
}

.abs .cal-cell {
    background: #444;
    border-right: solid 1px #222;
    box-sizing: border-box;
    width: 14.28571429%;
    float: left;
    padding: 7px 4px
}

.abs .cal-cell:nth-child(7n+7) {
    border-right: none
}

.abs a.cal-cell:hover {
    background: #555;
    color: #FFF
}

.abs .cal-cell.light,
.abs a.light {
    background-color: #333
}

.abs .cal-cell.dark,
.abs a.dark {
    background-color: #000;
    color: #666
}

.abs .cal-row .cal-active {
    background: #333;
    color: #FFF
}

.abs .cal-row .cal-selected {
    background-color: #<?=$ThemeColor?>
}

.cal-sel {
    background: #111;
    display: flex;
    height: 100%;
}

.cal-sel a {
    display: inline-block;
    position: relative;
    text-align: center;
    border-right: solid 1px #222;
    box-sizing: border-box;
    float: left;
    padding: 12px 0;
    height: 38px;
    width: 100%
}

.league-table .team,
.league-table .team3,
.table .item .name {
    padding-left: 4px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}

.cal-sel a.icon {
    flex: 0 0 26px
}

.cal-sel a svg {
    fill: #aaa;
    width: 16px;
    height: 16px;
    cursor: pointer
}

.cal-sel a svg.icon-close {
    width: 12px;
    height: 12px;
    top: 1px;
    position: relative
}

.cal-sel a svg.icon-double_angle_down {
    position: absolute;
    right: 5px
}

.cal-sel a:hover {
    background: #333;
    color: #fff
}

.cal-sel.selected a,
.cal-sel.selected a:hover {
    background: #666 !important;
    color: #cfcfcf !important;
    cursor: default
}

.cal-sel2,
.cal-sel2 a {
    background: #444
}

.cal-sel .text {
    border: none;
    flex: 1
}

.cal-sel2 {
    border-top: solid 1px #222
}

.cal-sel2 .text:hover {
    background: inherit;
    color: #<?=$ThemeColor?>
}

.cal-sel2 a.icon {
    width: 23px
}

.cal-wrap .disabled {
    background: #cfcfcf
}

.disabled a,
.disabled a:before {
    opacity: .3;
    cursor: default
}

.disabled a:hover {
    background: inherit !important
}

.disabled .cal-sel a:hover {
    color: #<?=$ThemeColor?>
}

.dark-blue,
.label-dark-blue {
    background-color: #00356E;
    color: #fff
}

.label-medium-blue,
.medium-blue {
    background-color: #00448C;
    color: #fff
}

.label-light-blue,
.light-blue {
    background-color: #0052AA;
    color: #fff
}

.dark-yellow,
.label-dark-yellow {
    background-color: #6E6200;
    color: #fff
}

.label-light-yellow,
.light-yellow {
    background-color: #9B9B00;
    color: #fff
}

.dark-green,
.label-dark-green {
    background-color: #006400;
    color: #fff
}

.label-light-green,
.light-green {
    background-color: #1E821E;
    color: #fff
}

.dark-red,
.label-dark-red {
    background-color: #6E0000;
    color: #fff
}

.label-light-red,
.light-red {
    background-color: #A00000;
    color: #fff
}

.dark-purple,
.label-dark-purple {
    background-color: #570057;
    color: #fff
}

.label-light-purple,
.light-purple {
    background-color: purple;
    color: #fff
}

.dark-teal,
.label-dark-teal {
    background-color: #006E6E;
    color: #fff
}

.label-light-teal,
.light-teal {
    background-color: #008C8C;
    color: #fff
}

.num {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    border-left: 33px solid transparent;
    border-bottom: 18px solid transparent;
    z-index: -1;
    background: 0 0 !important
}

.num.sc {
    left: -7px;
    border-left-width: 27px
}

.num.tc {
    border-left-width: 24px;
    border-bottom-width: 15px
}

.num.dark-blue {
    border-bottom-color: #00356E
}

.num.medium-blue {
    border-bottom-color: #00448C
}

.num.light-blue {
    border-bottom-color: #0052AA
}

.num.dark-yellow {
    border-bottom-color: #6E6200
}

.num.light-yellow {
    border-bottom-color: #9B9B00
}

.num.dark-green {
    border-bottom-color: #006400
}

.num.light-green {
    border-bottom-color: #1E821E
}

.num.dark-red {
    border-bottom-color: #6E0000
}

.num.light-red {
    border-bottom-color: #A00000
}

.num.light-purple {
    border-bottom-color: purple
}

.num.dark-teal {
    border-bottom-color: #006E6E
}

.num.light-teal {
    border-bottom-color: #008C8C
}

.league-table {
    display: table;
    width: 100%;
    margin-top: 4px;
    overflow: hidden
}

.league-table .tt .tip {
    top: -2px;
    left: 40px
}

.league-table>div {
    display: table-row
}

.league-table>div>div {
    display: table-cell;
    border-bottom: solid 1px #333
}

.league-table .mt4 {
    display: block
}

.league-table .title>div {
    border-left: none
}

.league-table .color {
    width: 30px;
    text-align: center;
    z-index: 1;
    padding-right: 4px
}

.league-table .pts,
.league-table .pts2,
.league-table .pts3 {
    width: 27px;
    text-align: center;
    padding: 4px 0 4px 0;

}

.league-table .pts2 {
    width: 40px
}

.league-table .pts3 {
    width: 30px
}

.league-table .team,
.league-table .team3 {
    border-left: solid 1px #333
}

span.live {
    width: 8px;
    float: left;
    margin-left: 4px
}

.table .item .name {
    text-align: left
}

.table .item .color {
    position: relative;
    z-index: 10
}

.table .item span.tc {
    border-left-width: 21px;
    border-bottom-width: 11px
}

.table .item span.sc {
    border-left: 21px solid;
    left: 0;
    bottom: 8px;
    border-bottom: solid 11px transparent
}

.mini-table {
    display: none;
    position: absolute;
    margin-top: 4px;
    width: 100%
}

.mini-table .top {
    background: #212121;
    color: #ccc;
    font-size: 11px;
    padding: 6px 0
}

.mini-table .top .name,
.mini-table .top .pts {
    float: left;
    border: none;
    text-align: center
}

.mini-table .top .pts {
    width: 24px;
    padding: 4px 0
}

.mini-table .top .name {
    width: 219px;
    position: relative
}

.mini-table a {
    color: #<?=$ThemeColor?>
}

.mini-table a:hover {
    color: #fff
}

.mini-table .arrow {
    width: 18px;
    height: 18px;
    display: inline-block;
    cursor: pointer;
    left: 0;
    top: 2px;
    position: absolute;
    z-index: 10;
    fill: #ccc
}

.mini-table .arrow.icon-angle_right {
    right: 0;
    left: inherit
}


.mini-table a.league-name,
.league-name {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding: 4px 20px;
    box-sizing: border-box;
    width: 100%;
    display: inline-block;
    line-height: normal;
    position: relative
}

.mini-table .league-table {
    margin-top: 0
}

.mini-table .team {
    max-width: 0
}

.basketball .mini-table .pts:last-child {
    width: 37px
}

.basketball .mini-table .name {
    width: 209px;
    position: relative
}

.basketball .mini-table .top .pts:last-child {
    width: 37px
}

#mini-league-table {
    position: relative;
    overflow: hidden
}

@media (max-width:800px) {
    .mob .league-table>div>div {
        border-bottom: #212121;
        padding: 2px 4px
    }

    .mob .league-table .title>div {
        background: #222
    }

    .mob .league-table .row-gray {
        border-left: none
    }

    .mob .league-table .row-gray.even {
        background: #333
    }

    .mob .league-table .row-gray .pts,
    .mob .league-table .row-gray .pts2 {
        font-size: 11px;
        padding: 2px 0
    }

    .mob .league-table .row-gray span.live {
        width: 4px
    }

    .mob .league-table .row-gray span.live img {
        display: none
    }

    .mob .league-table .row-gray span.live:not(:empty) {
        border-left: solid 4px #20c020
    }

}

.timezone-box {
    padding: 5px;
    line-height: 20px;
    background: #333;
    color: #ccc;
    display: block;
    font-size: 12px
}

.timezone-box h3 {
    margin-top: 0;
    margin-bottom: 14px
}

.timezone-box form {
    margin-top: 14px;
    margin-bottom: 14px
}

.timezone-box div.offset {
    padding-top: 30px
}

.timezone-box select {
    padding: 0;
    font-size: 12px;
    color: #555;
    border-radius: 2px;
    height: 18px;
    border: none
}

.timezone-box button {
    padding: 0 7px;
    margin: 0 0 0 5px;
    font-size: 13px;
    color: #333;
    text-align: center;
    cursor: pointer;
    background-color: #f5f5f5;
    border: none;
    border-radius: 2px
}

.timezone-box button:active {
    outline: 0;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .05)
}

.tt {
    display: inline-block;
    position: relative
}

.tt .tip {
    display: none;
    color: #fff;
    background: #636262;
    border: 0;
    padding: 4px;
    border-radius: 4px;
    text-align: left;
    position: absolute;
    z-index: 100;
    right: inherit;
    top: -4px;
    left: 24px;
    line-height: normal;
    white-space: nowrap
}

.tt .tip:before {
    position: absolute;
    top: 5px;
    left: -6px;
    width: 0;
    height: 0;
    display: block;
    border-right: 6px solid #636262;
    border-bottom: 6px solid transparent;
    z-index: -1;
    border-top: 6px solid transparent
}

.tt:hover .tip {
    display: block
}

@media (max-width:800px) {
    .mob .tt:hover .tip {
        display: none
    }
}

.loader,
.loader:before,
.loader:after {
    background: #<?=$ThemeColor?>;
    -webkit-animation: load1 1s infinite ease-in-out;
    animation: load1 1s infinite ease-in-out;
    width: 5px;
}

.loader,
.loader:before,
.loader:after {
    -webkit-animation: load1 1s infinite ease-in-out;
    animation: load1 1s infinite ease-in-out;
}

.loader {

    color: #<?=$ThemeColor?>;
    z-index: 10;
    margin: 100px 50%;
    position: absolute;
    font-size: 11px;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
}

.loader:before,
.loader:after {
    position: absolute;
    top: 0;
    content: '';
}

.loader:before {
    left: -1.5em;
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
}

.loader:after {
    left: 1.5em;
}


.loader span {
    font-family: 'Helvetica Neue', sans-serif;
    font-size: 9px;
    position: absolute;
    color: #999;
    margin: 20px -14px;
}

@-webkit-keyframes load1 {

    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 10px;
    }

    40% {
        box-shadow: 0 -6px;
        height: 16px;
    }
}

@keyframes load1 {

    0%,
    80%,
    100% {
        box-shadow: 0 0;
        height: 10px;
    }

    40% {
        box-shadow: 0 -6px;
        height: 16px;
    }
}

.newsletter-box {
    border: 2px solid #212121;
    background-size: 100%;
    padding: 20px 15px;
    color: #fff
}

.newsletter-box .text span,
.newsletter-box .title span {
    color: #<?=$ThemeColor?>
}

.newsletter-box .title {
    margin-bottom: 15px;
    font-size: 24px;
    font-weight: 700;
    letter-spacing: -.5px;
    font-family: norwester;
    position: relative
}

.newsletter-box .title:before {
    position: absolute;
    content: '';
    width: 5px;
    height: 100%;
    background: #<?=$ThemeColor?>;
    display: block;
    left: -15px;
    top: 0
}

.newsletter-box .text-wrap {
    display: flex;
    flex-direction: row;
    margin-bottom: 10px
}

.newsletter-box .text {
    flex: 1;
    padding-right: 20px;
    font-size: 13px;
    align-self: center
}

.newsletter-box .logo {
    flex: 0 0 34px
}

.newsletter-box .logo img {
    width: 34px
}

.newsletter-box .form {
    display: flex;
    width: 266px
}

.newsletter-box .form input {
    background: #fff;
    height: 40px;
    line-height: 40px;
    padding: 0 15px;
    font-weight: 600;
    flex: 1;
    min-width: 0;
    border: none;
    font-size: 14px
}

.newsletter-box .form .btn {
    flex: 0 0 95px;
    border-radius: 0;
    font-size: 14px;
    color: #000
}

.newsletter-box .policy {
    font-size: 13px;
    margin-top: 6px
}

.newsletter-box .policy a {
    color: #fff;
    text-decoration: underline
}

.newsletter-box .policy a:hover {
    color: #<?=$ThemeColor?>
}

.newsletter-box .messages {
    padding-top: 5px;
    font-size: 10px
}

.newsletter-box .error {
    color: #eb0037
}

.newsletter-box .success {
    color: #6bc56b
}

.qc-cmp-ui-showing .qc-cmp-ui {
    position: fixed;
    bottom: 0;
    max-width: 100%;
    min-width: 100% !important;
    color: #444;
    background: #fff;
    box-shadow: none;
    border-radius: 0;
    min-height: 220px;
    overflow: hidden
}

.qc-cmp-ui-showing .qc-cmp-ui-content {
    overflow-y: auto;
    max-width: 900px;
    margin: 0 auto;
    display: block;
    padding: 15px
}

.qc-cmp-ui-showing .qc-cmp-ui-container {
    background: 0 0 !important
}

.qc-cmp-ui-showing.qc-cmp-ui-locked-content {
    min-height: 80vh;
    overflow: hidden !important;
    position: relative
}

.qc-cmp-ui-showing.qc-cmp-ui-locked-content .wrapper {
    overflow: hidden;
    max-width: 100%;
    position: fixed;
    left: 50%;
    margin-left: -473px
}

.qc-cmp-ui-showing.qc-cmp-ui-locked-content:after {
    position: fixed;
    content: '';
    background: 0 0;
    width: 100%;
    height: 100%;
    display: block;
    z-index: 10000;
    top: 0
}

.qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui,
.qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui-container {
    height: 80vh
}

@media screen and (max-width:1000px) {
    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .wrapper {
        margin-left: -405px
    }
}

@media (max-width:810px) {
    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .wrapper {
        margin-left: 0;
        left: 0
    }
}

@media screen and (max-width:700px) {
    .qc-cmp-ui-showing {
        padding-bottom: 300px
    }

    .qc-cmp-ui-showing .qc-cmp-ui {
        min-height: 300px
    }

    .qc-cmp-ui-showing.qc-cmp-ui-locked-content {
        min-height: 100vh
    }

    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui,
    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui-container {
        height: 100vh
    }
}

@media screen and (max-width:400px) {
    .qc-cmp-ui-showing {
        padding-bottom: 350px
    }

    .qc-cmp-ui-showing .qc-cmp-ui {
        min-height: 350px
    }

    .qc-cmp-ui-showing.qc-cmp-ui-locked-content {
        min-height: 85vh
    }

    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui,
    .qc-cmp-ui-showing.qc-cmp-ui-locked-content .qc-cmp-ui-container {
        height: 85vh
    }
}

.qc-cmp-ui-showing .qc-cmp-ui .qc-cmp-title {
    font-size: 24px;
    margin-bottom: 10px;
    padding: 0;
    color: #222
}

.qc-cmp-ui-showing .qc-cmp-main-messaging {
    float: left;
    width: calc(100% - 200px);
    padding: 0
}

.qc-cmp-ui-showing .qc-cmp-buttons {
    float: right;
    width: 200px;
    display: block;
    margin: 0;
    box-sizing: border-box
}

.qc-cmp-ui-showing .qc-cmp-buttons .qc-cmp-button {
    min-width: 100px;
    width: 100%;
    padding: 0;
    margin: 0
}

.qc-cmp-ui-showing .qc-cmp-button {
    background-color: #f60 !important;
    border-color: #f60;
    height: 50px !important;
    color: #fff
}

.qc-cmp-ui-showing .qc-cmp-button:hover {
    background-color: #ec3e09;
    color: #fff;
    border-color: #f60
}

.qc-cmp-ui-showing .qc-cmp-alt-action,
.qc-cmp-ui-showing .qc-cmp-link {
    color: #f60
}

.qc-cmp-ui-showing .qc-cmp-alt-buttons {
    padding-bottom: 0
}

@media screen and (max-width:700px) {

    .qc-cmp-ui-showing .qc-cmp-buttons,
    .qc-cmp-ui-showing .qc-cmp-main-messaging {
        float: none;
        width: 100%;
        padding: 0;
        text-align: center
    }

    .qc-cmp-ui-showing .qc-cmp-main-messaging {
        margin-bottom: 20px
    }
}

.qc-cmp-ui-showing .qc-cmp-secondary-button {
    color: #f60 !important;
    background: 0 0 !important;
    border-color: #f60
}

.qc-cmp-ui-showing .qc-cmp-secondary-button:hover {
    background-color: #f60 !important;
    color: #fff !important
}

.qc-cmp-ui-showing .qc-cmp-consent-content {
    padding: 40px 30px 30px
}

.qc-cmp-ui-showing .qc-cmp-ui,
.qc-cmp-ui-showing .qc-cmp-ui-container {
    overflow-y: auto
}

.qc-cmp-ui-showing .qc-cmp-arrow-down,
.qc-cmp-ui-showing .qc-cmp-flip-up {
    background: 0 0;
    border-style: solid;
    border-color: #f60;
    border-width: 2px 2px 0 0;
    height: 6px;
    top: 6px;
    vertical-align: top;
    width: 6px;
    left: 0;
    transform: rotate(135deg);
    cursor: pointer
}

.qc-cmp-ui-showing .qc-cmp-flip-up {
    transform: rotate(-45deg)
}

.qc-cmp-ui-showing .qc-cmp-initial-info {
    float: left;
    width: calc(100% - 200px)
}

.qc-cmp-ui-showing .qc-cmp-button.qc-cmp-secondary-button,
.qc-cmp-ui-showing .qc-cmp-button.qc-cmp-secondary-button:hover {
    color: #fff
}

.qc-cmp-ui-showing .qc-cmp-disable-button,
.qc-cmp-ui-showing .qc-cmp-enable-button {
    margin: 10px !important
}

.qc-cmp-ui-showing .qc-cmp-bold-messaging,
.qc-cmp-ui-showing .qc-cmp-vendor-info-list-title {
    text-shadow: none;
    color: #222;
    padding: 0;
    margin-bottom: 0
}

.qc-cmp-ui-showing .qc-cmp-scrolling-section {
    height: 300px
}

.qc-cmp-ui-showing .qc-cmp-table {
    border: 1px solid #ccc !important;
    font-size: 12px
}

.qc-cmp-ui-showing .qc-cmp-table-header,
.qc-cmp-ui-showing .qc-cmp-vendor-row-header {
    background: #ececec
}

.qc-cmp-ui-showing .qc-cmp-table-row {
    border-top: solid 1px #ccc !important;
    padding: 0 20px
}

.qc-cmp-ui-showing .qc-cmp-vendor-row {
    height: 30px !important
}

.qc-cmp-ui-showing .qc-cmp-company-cell {
    line-height: 20px
}

.qc-cmp-ui-showing .qc-cmp-table-row:last-child {
    border-bottom: none
}

.qc-cmp-ui-showing .qc-cmp-publisher-purposes-table .qc-cmp-table-header {
    background-color: #fafafa
}

.qc-cmp-ui-showing .qc-cmp-publisher-purposes-table .qc-cmp-table-row {
    background-color: #fff
}

.qc-cmp-ui-showing .qc-cmp-purpose-description {
    text-align: justify
}

.qc-cmp-ui-showing .qc-cmp-toggle {
    display: inline-block
}

.qc-cmp-ui-showing .qc-cmp-toggle-status {
    color: #666;
    margin: 6px 0 0 7px;
    display: inline-block;
    vertical-align: top
}

.qc-cmp-ui-showing .qc-cmp-vendor-list-container {
    overflow: auto
}

.qc-cmp-ui-showing .qc-cmp-show-vendors-link {
    margin-right: 6px;
    line-height: 25px !important
}

.qc-cmp-ui-showing .qc-cmp-small-toggle.qc-cmp-toggle-on,
.qc-cmp-ui-showing .qc-cmp-toggle.qc-cmp-toggle-on {
    background-color: #ff660f;
    border-color: #ff660f
}

.qc-cmp-ui-showing .qc-cmp-small-toggle.qc-cmp-toggle-off,
.qc-cmp-ui-showing .qc-cmp-toggle.qc-cmp-toggle-off {
    background-color: #a6a9ae;
    border-color: #a6a9ae
}

.qc-cmp-ui-showing .qc-cmp-nav-bar {
    width: auto
}

.qc-cmp-ui-showing .qc-cmp-nav-bar.qc-cmp-top {
    display: none
}

.qc-cmp-ui-showing .qc-cmp-nav-bar.qc-cmp-bottom {
    display: block;
    padding: 20px
}

.qc-cmp-ui-showing .qc-cmp-cancel,
.qc-cmp-ui-showing .qc-cmp-left-nav-link {
    flex: none;
    line-height: 50px;
    margin: 0
}

.qc-cmp-ui-showing .qc-cmp-cancel {
    margin-left: 50px
}

.qc-cmp-ui-showing .qc-cmp-button.qc-cmp-save-and-exit {
    margin: 0
}

.qc-cmp-ui-showing .qc-cmp-back:before {
    top: 0
}

.qc-cmp-horizontal-buttons {
    display: none !important
}

.qc-cmp-purposes-header button {
    display: none
}

.qc-cmp-ui-showing .qc-cmp-purposes-page-content {
    box-sizing: border-box;
    overflow-y: auto;
    height: calc(100% - 76px);
    max-height: calc(100% - 76px)
}

.qc-cmp-ui-showing .qc-cmp-all-vendors-list {
    height: 45vh
}

@media (max-width:700px) {
    .qc-cmp-ui-showing .qc-cmp-purposes-page-content {
        height: calc(100vh - 80px);
        max-height: calc(100% - 80px)
    }

    .qc-cmp-ui-showing .qc-cmp-purpose-actions {
        display: block;
        position: relative;
        right: 0;
        top: 0
    }

    .qc-cmp-ui-showing .qc-cmp-show-vendors-link {
        line-height: 19px;
        vertical-align: top;
        display: inline-block
    }

    .qc-cmp-ui-showing .qc-cmp-buttons {
        padding-top: 20px
    }

    .qc-cmp-ui-showing .qc-cmp-buttons.qc-cmp-primary-buttons {
        padding-top: 0
    }

    .qc-cmp-ui-showing .qc-cmp-alt-action.qc-cmp-cancel {
        float: right
    }

    .qc-cmp-ui-showing .qc-cmp-button.qc-cmp-save-and-exit {
        float: none;
        max-width: 100% !important;
        width: 100%;
        display: block
    }

    .qc-cmp-ui-showing .qc-cmp-cancel,
    .qc-cmp-ui-showing .qc-cmp-left-nav-link {
        line-height: normal;
        margin-bottom: 10px
    }

    .qc-cmp-ui-showing .qc-cmp-consent-content {
        padding: 40px 15px 30px
    }

    .qc-cmp-ui-showing .qc-cmp-ui-content {
        padding: 15px
    }

    .qc-cmp-alt-buttons {
        padding-bottom: 35px !important
    }

    .qc-cmp-ui-showing .qc-cmp-purpose-description {
        width: 100%
    }

    .qc-cmp-ui-showing .qc-cmp-purposes-header,
    .qc-cmp-ui-showing .qc-cmp-sub-title-container {
        display: block
    }
}

@media (max-width:400px) {
    .qc-cmp-ui-showing .qc-cmp-purposes-page-content {
        height: calc(100vh - 140px);
        max-height: calc(100% - 140px)
    }
}

#smartbanner {
    position: fixed !important;
    left: 0;
    top: 0;
    border-bottom: 1px solid #e8e8e8;
    width: 100%;
    height: 78px;
    font-family: 'Helvetica Neue', sans-serif;
    background: -webkit-linear-gradient(top, #000 0, #cdcdcd 100%);
    background-image: -ms-linear-gradient(top, #000 0, #CDCDCD 100%);
    background-image: -moz-linear-gradient(top, #000 0, #CDCDCD 100%);
    box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
    z-index: 9998;
    -webkit-font-smoothing: antialiased;
    overflow: hidden;
    -webkit-text-size-adjust: none
}

#smartbanner,
html.sb-animation {
    -webkit-transition: all .3s ease
}

#smartbanner .sb-container {
    margin: 0 auto
}

.pp h4,
.pp p,
.wapBox p {
    margin-bottom: 10px
}

#smartbanner .sb-close {
    position: absolute;
    left: 5px;
    top: 5px;
    display: block;
    border: 2px solid #fff;
    width: 14px;
    height: 14px;
    font-family: ArialRoundedMTBold, Arial;
    font-size: 15px;
    line-height: 15px;
    text-align: center;
    color: #fff;
    background: #070707;
    text-decoration: none;
    text-shadow: none;
    border-radius: 14px;
    box-shadow: 0 2px 3px rgba(0, 0, 0, .4);
    -webkit-font-smoothing: subpixel-antialiased
}

#smartbanner .sb-close:active {
    font-size: 13px;
    color: #aaa
}

#smartbanner .sb-icon {
    position: absolute;
    left: 30px;
    top: 10px;
    display: block;
    width: 57px;
    height: 57px;
    background: rgba(0, 0, 0, .6);
    background-size: cover;
    border-radius: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .3)
}

#smartbanner.no-icon .sb-icon {
    display: none
}

#smartbanner .sb-info {
    position: absolute;
    left: 98px;
    top: 9px;
    width: 55%;
    font-size: 11px;
    line-height: 1.2em;
    font-weight: 700;
    color: #aaa
}

#smartbanner #smartbanner.no-icon .sb-info {
    left: 34px
}

#smartbanner .sb-info strong {
    display: block;
    font-size: 13px;
    color: #4d4d4d;
    line-height: 18px
}

#smartbanner .sb-info>span {
    display: block
}

#smartbanner .sb-info em {
    font-style: normal
}

#smartbanner .sb-button {
    position: absolute;
    right: 20px;
    top: 28px;
    padding: 0 10px;
    min-width: 10%;
    height: 28px;
    font-size: 14px;
    line-height: 28px;
    text-align: center;
    font-weight: 700;
    color: #fff;
    background: #<?=$ThemeColor?>;
    border-radius: 3px
}

.pp h4,
.pp p,
.pp table th {
    font-size: 11px
}

#smartbanner .sb-button:active,
#smartbanner .sb-button:hover {
    background: -webkit-linear-gradient(top, #dcdcdc 0, #efefef 100%)
}

#smartbanner .sb-icon.gloss:after {
    content: '';
    position: absolute;
    left: 0;
    top: -1px;
    border-top: 1px solid rgba(255, 255, 255, .8);
    width: 100%;
    height: 50%;
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, .7) 0, rgba(255, 255, 255, .2) 100%);
    border-radius: 10px 10px 12px 12px
}

#smartbanner.android,
#smartbanner.ios {
    border-color: #212228;
    background: #fff;
    border-top: 5px solid #<?=$ThemeColor?>;
    box-shadow: none
}

#smartbanner.android .sb-close,
#smartbanner.ios .sb-close {
    border: 0;
    width: 17px;
    height: 17px;
    line-height: 17px;
    color: #b1b1b3;
    background: #1c1e21;
    text-shadow: 0 1px 1px #000;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .8) inset, 0 1px 1px rgba(255, 255, 255, .3)
}

.pp p,
.pp table {
    line-height: 16px
}

#smartbanner.android .sb-close:active,
#smartbanner.ios .sb-close:active {
    color: #eee
}

#smartbanner.android .sb-button:active,
#smartbanner.android .sb-button:hover,
#smartbanner.ios .sb-button:active,
#smartbanner.ios .sb-button:hover {
    background: 0 0
}

#smartbanner.android .sb-button:active span,
#smartbanner.android .sb-button:hover span,
#smartbanner.ios .sb-button:active span,
#smartbanner.ios .sb-button:hover span {
    background: #2AC7E1
}

#smartbanner.windows .sb-icon {
    border-radius: 0
}

.pp {
    background: #333;
    padding: 10px
}

.pp h3 {
    color: #FFF
}

.pp h3:first-child {
    margin-top: 0
}

.mobile img.mweb,
.pp h4 {
    margin-top: 20px
}

.pp h4 {
    text-shadow: none;
    color: #FFF;
    padding: 0
}

.pp ol li,
.pp ul li {
    list-style: inherit;
    margin-bottom: 10px;
    color: #fff;
    line-height: 16px
}

.pp ul li,
.slavery li {
    list-style: disc
}

.pp ul {
    margin-left: 40px
}

.pp a {
    text-decoration: underline;
    color: #<?=$ThemeColor?>
}

.pp a:hover,
.pp p,
.pp table,
.wapBox {
    color: #aaa
}

.pp table {
    width: 100%;
    border: 1px solid #B0B0B0
}

.pp table td,
.pp table th {
    border-bottom: solid 1px #B0B0B0;
    border-right: solid 1px #B0B0B0;
    padding: 4px
}

.pp table th {
    font-weight: 700;
    background: #181818
}

.pp table td {
    vertical-align: top;
    overflow-wrap: break-word;
    word-wrap: break-word
}

.field,
.field-wrap,
.match-row,
.row-gray .ply,
.odds-widget,
.row-tall .ply,
.ticker-content,
.tracker-widget {
    overflow: hidden
}

.pp table tr:last-child td {
    border-bottom: none
}

.pp-bt {
    border-top: solid 1px #222 !important;
    background: #181818;
    padding: 10px
}

.wapBox {
    font-size: 12px;
    padding: 15px 4px;
    text-align: center;
    background: #333
}

.frame .dismiss:after,
h4 {
    font-weight: 700;
    font-size: 16px
}

.wapBox a {
    color: #<?=$ThemeColor?>
}

.wapBox p {
    text-align: left
}

.android .wrapper,
.iphone .wrapper,
.mobile .wrapper {
    background: #000 !important
}

.android .left-bar,
.iphone .left-bar,
.mobile .left-bar {
    display: none
}

h4 {
    text-shadow: #111 1px 1px;
    color: #ccc;
    padding: 7px 10px 20px;
    margin: 0
}

.frame {
    position: relative
}

.frame .row {
    padding: 0;
    background: 0 0
}

.frame .dismiss:after {
    position: absolute;
    width: 14px;
    height: 14px;
    content: '\00D7';
    display: block;
    top: 0;
    right: 2px;
    cursor: pointer
}

.frame .logo img {
    margin-right: 15px;
    width: 57px;
    margin-top: 0 !important
}

.frame h4 span {
    font-size: 12px;
    font-weight: 400;
    display: block;
    margin-top: 10px
}

.frame .down-link {
    float: right;
    text-align: right
}

.frame .down-link span {
    display: inline-block;
    vertical-align: top;
    padding-top: 10px
}

.frame .down-link a:hover {
    color: #fff !important
}

.frame .down-link .app-btn {
    width: 148px;
    margin-left: 20px;
    display: inline-block
}

.frame .phone-img {
    text-align: center;
    margin-top: 30px
}

.frame section {
    border-bottom: solid 1px #212121;
    padding: 20px
}

.frame .well p:last-child {
    margin-bottom: 0
}

.frame p {
    font-size: 12px;
    line-height: 18px;
    color: #ccc;
    margin-bottom: 10px
}

.frame a,
.frame a:visited {
    font-size: 12px;
    color: #<?=$ThemeColor?>;
    font-weight: 700;
    text-decoration: none
}

.frame p.tm {
    text-align: right;
    font-size: 11px;
    color: #555;
    margin-bottom: 0;
    padding-bottom: 10px
}

.frame li {
    list-style-type: disc;
    color: #ccc;
    padding-left: 5px;
    margin-left: 30px;
    font-size: 12px;
    line-height: 18px
}

.frame p img.app,
.frame p img.web {
    margin-left: 50px;
    border: 0
}

.frame img {
    max-width: 100%;
    width: 450px
}

.frame .well .icon-info-large {
    width: 60px;
    height: 60px;
    flex: 0 0 70px
}

h3.title {
    color: #<?=$ThemeColor?>;
    border-bottom: solid 1px #212121;
    border-top: solid 1px #212121;
    line-height: 24px
}

.advertise h2.title {
    color: #<?=$ThemeColor?>;
    margin-bottom: 10px;
    padding: 0
}

.advertise .cta {
    text-align: center;
    font-size: 13px
}

.advertise .cta .value {
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 6px;
    line-height: normal;
    color: #<?=$ThemeColor?>
}

.advertise .cta .value span {
    font-size: 15px;
    vertical-align: super
}

.advertise .form-group {
    margin-bottom: 10px;
    padding: 0 15px
}

.advertise .form-group label {
    color: #ccc;
    display: block;
    font-size: 12px;
    margin-bottom: 3px
}

.advertise .form-group .message-label {
    width: 100%;
    margin-bottom: 5px
}

.advertise .form-group input,
.advertise .form-group select {
    border: none;
    padding: 0 8px;
    height: 26px;
    line-height: 26px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 3px
}

.advertise .form-group select {
    height: auto;
    padding: 0
}

.advertise .form-group textarea {
    border: none;
    padding: 8px;
    box-sizing: border-box;
    height: 200px;
    min-height: 100px;
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    border-radius: 3px
}

.advertise .submit-button {
    text-align: center;
    margin-top: 30px
}

.advertise .form-inline label {
    display: inline;
    margin-right: 15px
}

.advertise .form-inline input {
    width: auto;
    height: auto;
    top: 2px;
    position: relative
}

.download-page p {
    font-size: 14px
}

.download-page h2 {
    font-size: 20px;
    color: #ccc;
    margin: 0 0 15px
}

.download-page .steps {
    margin: 20px 0
}

.download-page .steps svg {
    width: 40px;
    height: 40px;
    fill: #ccc;
    margin-bottom: 10px
}

.download-page .steps>div {
    text-align: center;
    padding: 0 5px;
    box-sizing: border-box;
    font-size: 11px
}

.download-page img {
    max-width: 100%;
    width: auto
}

.download-page .download-links {
    margin: 20px 0;
    text-align: center
}

.slavery h1,
.slavery p,
.slavery ul {
    margin-bottom: 10px
}

.download-page .download-links .button {
    font-size: 16px;
    padding: 12px;
    display: inline-block;
    margin-top: 20px
}

.slavery {
    padding: 30px 15px
}

.slavery h1 {
    text-align: center;
    color: #fff;
    font-size: 16px
}

.slavery h3 {
    color: #fff;
    font-size: 14px
}

.slavery ul {
    margin-left: 20px
}

.slavery li {
    line-height: 1rem
}

.slavery p {
    font-size: 11px;
    color: #aaa;
    line-height: 16px
}

.slavery .sign {
    width: 160px;
    margin-top: 20px
}

.error-page {
    text-align: center;
    padding: 100px 20px;
    color: #dfdfdf;
    font-size: 14px;
    line-height: 22px
}

.error-page .title {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 80px;
    line-height: normal
}

.bet-boost-page .logo,
.bet-boost-page h1 {
    margin-bottom: 30px
}

.error-page a {
    color: #<?=$ThemeColor?>;
    font-size: 14px;
    line-height: 22px
}

.bet-boost-page {
    text-align: center;
    padding: 30px;
    color: #fff;
    font-size: 16px
}

.bet-boost-page .logo img {
    width: 192px
}

.bet-boost-page h1 {
    font-size: 16px;
    margin-top: 0
}

.bet-boost-page hr {
    height: 3px;
    border: none;
    background: #fdcc00;
    width: 50%;
    margin: 0 auto 30px
}

.bet-boost-page .step {
    margin-bottom: 25px
}

.bet-boost-page .step .title {
    color: #fdcc00;
    margin-bottom: 10px
}

.bet-boost-page .cta {
    background: #fdcc00;
    border-radius: 10px;
    height: 35px;
    line-height: 35px;
    width: 110px;
    color: #000;
    margin-bottom: 30px;
    display: inline-block
}

.download-wc {
    color: #fff;
    font-size: 17px;
    margin: 30px auto;
    text-decoration: none;
    display: block;
    width: 320px
}

.popup-close-button a,
.row-gray a:hover,
.row-gray a:hover span,
.row-tall a,
.ticker .scorelink:hover {}

.download-wc:hover {
    color: #fff
}

.download-wc img {
    max-width: 100%;
    display: block
}

.download-wc h2 {
    font-size: 38px;
    margin: 18px 0;
    background: 0 0;
    color: #fff;
    font-weight: 400
}

.download-wc .ls-logo {
    float: left;
    width: 90px
}

.download-wc .stores {
    float: left;
    margin-left: 30px;
    width: 126px;
    text-align: left
}

.download-wc .stores img:first-child {
    margin-bottom: 8px
}

@media (max-width:800px) {
    .mob .frame .well .icon-info-large {
        width: 30px;
        height: 30px;
        flex: 0 0 40px
    }

    .mob .frame .down-link {
        text-align: center
    }

    .mob .frame .down-link .app-btn {
        width: 110px;
        margin: 0 10px 10px
    }

    .mob .download-page img {
        margin-top: 20px
    }

    .mob .download-page .download-links .button {
        margin: 0
    }

    .advertise .form-inline .item {
        display: block;
        margin: 5px 0
    }

    .download-wc {
        width: 230px;
        font-size: 16px
    }

    .download-wc h2 {
        font-size: 27px;
        margin: 24px 0
    }

    .download-wc .ls-logo {
        float: left;
        width: 80px
    }

    .download-wc .stores {
        margin-left: 30px;
        width: 108px
    }
}

@media (max-width:480px) {
    .mob .frame p img {
        max-width: 80% !important
    }

    .tabs.narrow a {
        padding: 15px 23px
    }
}

.ticker,
.ticker-content {
    position: relative
}

.ticker .icon-settings {
    width: 14px;
    height: 14px;
    fill: #ccc;
    cursor: pointer;
    position: relative;
    top: 1px
}

.ticker .row-tall a {
    text-transform: none;
    color: inherit
}

.ticker .text {
    font-size: 9px;
    color: #888;
    display: inline-block
}

.ticker .match-row,
.row-gray {
    background: 0 0
}

.ticker .match-row,
.row-gray .min {
    flex: 0 0 76px
}

.ticker .match-row,
.row-gray .min .icon,
.ticker .match-row,
.row-gray .min .status {
    width: 28px;
    display: inline-block
}

.ticker .scorelink {
    color: #fff
}

.ticker .scorelink:hover {
    background: inherit;
    color: #fff
}

.ticker .match-row,
.row-gray-group .star-container {
    background: inherit
}

.ticker_ad {
    padding: 4px 0
}

@media (max-width:800px) {

    .mob .ticker .ticker-row .scorelink .awy,
    .mob .ticker .ticker-row .scorelink .hom {
        color: #<?=$ThemeColor?>
    }

    .mob .ticker .text {
        display: none
    }
}

.row,
.row .title,
.row-tall {
    color: #aaa
}

.row {
    padding: 0 4px;
    background: #212121
}

.row-tall {
    padding: 10px;
    font-size: 11px
}

.row-tall a,
.row-tall a:hover,
.scorelink .sco,
.scorelink .sco2 strong,
.scorelink.even .sco,
.scorelink.even .sco2 strong {
    color: #fff
}

.row-tall a {
    text-transform: uppercase;
    text-decoration: none;
    line-height: 16px
}

.row-tall .left {
    position: relative;
    line-height: 16px
}

.scorelink.even:hover,
.scorelink:hover {
    color: #fff;
    /* EDIT AICI background: #333 */
}

.scorelink.even:hover .match-row,
.row-gray,
.scorelink.even:hover .star-container,
.scorelink:hover .match-row,
.row-gray,
.scorelink:hover .star-container {
    background: #333
}

.match-row,
.row-gray,
.match-row,
.row-gray-group .star-container {
    border-bottom: solid 1px #212121;
    background: #000
}

.match-row,
.row-gray-group {
    display: flex;
    position: relative
}

.match-row,
.row-gray-group .match-row,
.row-gray {
    flex: auto;
    padding: 2px 34px 2px 4px
}

.match-row,
.row-gray,
.match-row,
.row-gray.inverted {
    color: #aaa;
    padding: 10px 55px 10px 4px
}

.popup>.match-row {
    font-weight: bold;
    font-size: 14px;
}

.popup>.match-row,
.row-gray.inverted>.sco {
    color: #<?=$ThemeColor?>;
    font-weight: bold;
    font-size: 20px;
}

.popup>.match-row,
.row-gray.inverted>.ply {
    margin-top: 2px;
}

.match-row,
.row-gray {
    display: flex;
    position: relative
}

.match-row,
.row-gray .min,
.match-row,
.row-gray .ply,
.match-row,
.row-gray .sco {
    flex: 1;
    box-sizing: border-box
}

.match-row,
.row-gray .min,
.match-row,
.row-gray .min-short {
    display: flex;
    align-items: center;
    align-self: center
}

.match-row,
.row-gray .min-short>div .ico-alert,
.match-row,
.row-gray .min>div .ico-alert {
    top: 1px;
    margin-top: -2px
}

.match-row,
.row-gray .min {
    flex: 0 0 55px
}

.match-row,
.row-gray .min img {
    margin-right: 5px
}

.match-row,
.row-gray .min-short {
    flex: 0 0 45px;
    position: relative
}

.match-row,
.row-gray .min-short span {
    padding-left: 4px
}

.match-row,
.row-gray .ply>div,
.match-row,
.row-gray .sco2>div,
.match-row,
.row-gray .sco3>div {
    padding: 2px 0
}

.match-row,
.row-gray .ply {
    white-space: nowrap;
    text-overflow: ellipsis;

}

.match-row,
.row-gray .assist {
    font-style: italic;
    color: #6d6d6d;
    display: block
}

.match-row,
.row-gray .off {
    color: #aaa
}

.match-row,
.row-gray .sco {
    flex: 0 0 80px;
    text-align: center
}

.match-row,
.row-gray .sco2 {
    flex: 0 0 145px
}

.match-row,
.row-gray .sco3 {
    flex: 0 0 200px
}

.match-row,
.row-gray.match-row,
.row-gray__inc .ply>div {
    border: none;
    padding: 0
}

.match-row,
.row-gray.match-row,
.row-gray__inc .sco {
    flex: 0 0 80px
}

.match-row,
.row-gray.match-row,
.row-gray__inc .sco .score {
    display: inline-block;
    width: 30px
}

.match-row,
.row-gray.match-row,
.row-gray__inc .sco .inc {
    margin-top: -5px;
    display: inline-block
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .time {
    width: 35px;
    text-align: center
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .icon {
    flex: 1;
    text-align: right;
    position: relative;
    margin-right: 5px
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .icon .qtd {
    background: #a00000;
    border: 1px solid #5e0101;
    font-size: 8px;
    color: #fff;
    position: absolute;
    top: -2px;
    right: 7px;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    text-align: center;
    line-height: normal
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .inc {
    top: 3px
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .incs,
.match-row,
.row-gray.match-row,
.row-gray__subs .min .time {
    display: inline-block;
    vertical-align: middle
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min .incs .arrow-up {
    top: 3px;
    position: relative
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min svg {
    width: 12px;
    height: 12px
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min svg.arrow-up {
    fill: green
}

.match-row,
.row-gray.match-row,
.row-gray__subs .min svg.arrow-down {
    fill: red
}

.match-row,
.row-gray.match-row,
.row-gray__comments .ply {
    white-space: normal
}

.match-row,
.row-gray.match-row,
.row-gray__team .min {
    flex: 0 0 70px
}

.match-row,
.row-gray.match-row,
.row-gray__team .phase {
    flex: 0 0 30px;
    text-align: right
}

.match-row,
.row-gray-group.live:before,
.match-row,
.row-gray.live:before {
    background: #<?=$ThemeColor?>;
    position: absolute;
    content: '';
    height: 100%;
    width: 4px;
    display: block;
    left: 0;
    z-index: 20;
    top: 0
}

.match-row,
.row-gray-group.live .min span,
.match-row,
.row-gray.live .min span {
    color: #fff;
    font-weight: bolder;
    padding-left: 8px
}

.row-gray,
.row-gray .row-wrapper {
    padding: 0 4px
}

.header-scores .match-row,
.row-gray__inc {
    border-bottom: none !important
}

.star-container {
    position: absolute;
    text-align: center;
    box-sizing: border-box;
    height: 100%;
    width: 30px;
    right: 0;
    z-index: 1;
    top: 0
}

.row-gray .info,
.scores div {
    text-align: right
}

.star-container svg {
    width: 18px;
    height: 18px;
    margin-top: -9px;
    margin-right: -9px;
    fill: #fff;
    stroke: #9a9a9a;
    position: absolute;
    top: 50%;
    right: 50%
}

.star-container svg.active {
    fill: #f1dd2a
}

.star-container .active svg,
.star-container:hover svg {
    fill: #<?=$ThemeColor?>
}

.row-gray {
    color: #aaa;
    border-bottom: solid 1px #212121;
    line-height: 18px;
    position: relative
}

.row-gray .row-wrapper.no-padding,
.row-gray.no-padding {
    padding: 0
}

.row-transparent {
    background: 0 0
}

.row-gray .info {
    width: 247px;
    float: left
}

.row-light {
    background: #eee;
    border-bottom-color: #bbb
}

.row-light .ply,
.row-light .sco {
    font-weight: 700
}

.row-tall .ply {
    display: inline-block;
    white-space: nowrap;
    text-overflow: ellipsis;
    line-height: 18px;
    width: 210px
}

.row-tall .ply.tright {
    width: 180px;
    float: left
}

.ignore-scored {
    font-weight: 400
}

@media (max-width:800px) {

    .mob .match-row,
    .row-gray .ply,
    .mob .match-row,
    .row-gray .ply>div,
    .mob .match-row,
    .row-gray.even .ply,
    .mob .match-row,
    .row-gray.even .ply>div {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .mob .scorelink.match-row,
    .row-gray .sco .awy,
    .mob .scorelink.match-row,
    .row-gray .sco .hom,
    .mob .scorelink.match-row,
    .row-gray.even .sco .awy,
    .mob .scorelink.match-row,
    .row-gray.even .sco .hom {
        color: #fff;
        font-weight: bolder
    }

    .mob .scorelink.match-row,
    .row-gray.even:hover,
    .mob .scorelink.match-row,
    .row-gray:hover {
        background: inherit;
        color: #ccc
    }

    .mob .scorelink .match-row,
    .row-gray .sco2 strong,
    .mob .scorelink .match-row,
    .row-gray.even .sco2 strong {
        color: #<?=$ThemeColor?>
    }

    .mob .scorelink .match-row,
    .row-gray.even:hover,
    .mob .scorelink .match-row,
    .row-gray:hover,
    .mob .scorelink:hover .match-row,
    .row-gray,
    .mob .scorelink:hover .star-container {
        background: inherit
    }

    .mob .match-row,
    .row-gray-group {
        display: block;
        position: relative
    }

    .mob .match-row,
    .row-gray-group .star-container {
        border-bottom: solid 1px #212121
    }

    .mob .match-row,
    .row-gray,
    .mob .match-row,
    .row-gray.even {
        position: relative;
        font-size: 12px;
        display: block;
        padding: 4px 0;
        color: #aaa;
        border-bottom: solid 1px #212121
    }

    .mob .match-row,
    .row-gray .min,
    .mob .match-row,
    .row-gray .min-short,
    .mob .match-row,
    .row-gray.even .min,
    .mob .match-row,
    .row-gray.even .min-short {
        position: absolute;
        left: 0;
        top: 0;
        width: 60px;
        height: 100%;
        color: #888;
        padding: 0 0 0 8px;
        z-index: 10
    }

    .mob .match-row,
    .row-gray .sco .awy,
    .mob .match-row,
    .row-gray .sco .hom,
    .mob .match-row,
    .row-gray .sco2 .awy,
    .mob .match-row,
    .row-gray .sco2 .hom,
    .mob .match-row,
    .row-gray .sco3 .awy,
    .mob .match-row,
    .row-gray .sco3 .hom,
    .mob .match-row,
    .row-gray.even .sco .awy,
    .mob .match-row,
    .row-gray.even .sco .hom,
    .mob .match-row,
    .row-gray.even .sco2 .awy,
    .mob .match-row,
    .row-gray.even .sco2 .hom,
    .mob .match-row,
    .row-gray.even .sco3 .awy,
    .mob .match-row,
    .row-gray.even .sco3 .hom {
        display: block;
        width: 30px;
        text-align: right;
        position: absolute;
        right: 35px;
        top: 5px;
        color: #ccc
    }

    .mob .highlight,
    .mob .highlight .min {
        color: #fff !important
    }

    .mob .match-row,
    .row-gray .sco .awy>div,
    .mob .match-row,
    .row-gray .sco .hom>div,
    .mob .match-row,
    .row-gray .sco2 .awy>div,
    .mob .match-row,
    .row-gray .sco2 .hom>div,
    .mob .match-row,
    .row-gray .sco3 .awy>div,
    .mob .match-row,
    .row-gray .sco3 .hom>div,
    .mob .match-row,
    .row-gray.even .sco .awy>div,
    .mob .match-row,
    .row-gray.even .sco .hom>div,
    .mob .match-row,
    .row-gray.even .sco2 .awy>div,
    .mob .match-row,
    .row-gray.even .sco2 .hom>div,
    .mob .match-row,
    .row-gray.even .sco3 .awy>div,
    .mob .match-row,
    .row-gray.even .sco3 .hom>div {
        width: 100%
    }

    .mob .match-row,
    .row-gray .sco .awy,
    .mob .match-row,
    .row-gray .sco2 .awy,
    .mob .match-row,
    .row-gray .sco3 .awy,
    .mob .match-row,
    .row-gray.even .sco .awy,
    .mob .match-row,
    .row-gray.even .sco2 .awy,
    .mob .match-row,
    .row-gray.even .sco3 .awy {
        top: 24px
    }

    .mob .match-row,
    .row-gray .ply>div:first-child,
    .mob .match-row,
    .row-gray .sco2>div:first-child,
    .mob .match-row,
    .row-gray .sco3>div:first-child,
    .mob .match-row,
    .row-gray.even .ply>div:first-child,
    .mob .match-row,
    .row-gray.even .sco2>div:first-child,
    .mob .match-row,
    .row-gray.even .sco3>div:first-child {
        border-bottom: none
    }

    .mob .match-row,
    .row-gray .ply,
    .mob .match-row,
    .row-gray.even .ply {
        padding: 2px 60px;
        text-align: left !important;
        vertical-align: bottom
    }

    .mob .star-container svg {
        stroke: none
    }

    .mob .highlight {
        background-color: #EF7900 !important
    }

    .mob .highlight.min-short:before,
    .mob .highlight.min:before,
    .mob .match-row,
    .row-gray .sco span {
        display: none
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc {
        display: flex
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .min {
        flex: 0 0 55px;
        position: relative;
        padding: 0 0 0 8px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .sco {
        flex: 0 0 80px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .sco span {
        display: inline-block
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .sco svg {
        fill: #fff
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .ply {
        flex: 1;
        padding: 0
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__inc .ply.tright {
        text-align: right !important
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs {
        display: flex
    }

    .mob .live img,
    .mob .row-gray .sco span {
        display: none
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .min {
        flex: 0 0 55px;
        position: relative;
        padding: 0 0 0 8px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .min>div {
        text-align: right;
        margin-right: 5px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .min>div .time {
        width: auto
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .ply {
        flex: 1;
        padding: 0
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .ply>div {
        padding: 0
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__subs .ply>div:first-child {
        border-bottom: solid 1px transparent
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__comments .ply {
        padding-right: 4px;
        white-space: normal
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__team .min {
        width: 80px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__team .ply {
        padding-left: 80px
    }

    .mob .match-row,
    .row-gray.match-row,
    .row-gray__team .phase {
        position: absolute;
        right: 11px;
        top: 15px
    }

    .mob .row-gray a {
        color: #<?=$ThemeColor?>
    }

    .mob .row-tall .left {
        top: -2px
    }

    .mob .row-transparent {
        background: 0 0
    }

    .mob .row-group {
        width: 100%;
        position: relative
    }

    .mob .row-group .row-gray {
        position: initial;
        height: 50px
    }
}

.om #loader .loader,
.om .om-arrow,
.om .star-container {
    display: none
}

.om .match-row,
.row-gray-group .match-row,
.row-gray {
    font-size: 12px;
    padding: 10px 55px 10px 4px;
}

.om .match-row,
.row-gray-group .match-row,
.row-gray:hover {
    color: #fff;
    background: #333;
}




@media (max-width:800px) {
    .om.mob .wrapper {
        max-width: 100% !important;
        overflow: hidden
    }

    .om.mob .om-arrow {
        display: block;
        position: absolute;
        right: 4px;
        top: 50%;
        margin-top: -10px
    }

    .om.mob .om-arrow svg {
        fill: #555;
        width: 20px;
        height: 20px
    }

    .om.mob .match-row,
    .row-gray-group .match-row,
    .row-gray {
        padding: 2px 34px 2px 4px
    }

    .om.popup .match-row,
    .row-gray .ply {
        white-space: normal
    }
}

.match-row,
.row-gray-group.tennis-double .ply>div {
    height: 30px
}

.match-row,
.row-gray-group.tennis-double .awy>div,
.match-row,
.row-gray-group.tennis-double .hom>div {
    height: 30px;
    padding-top: 9px;
    box-sizing: border-box
}

.match-row,
.row-gray-group.tennis-double .ten-ball>div {
    padding: 10px 0
}

.match-row,
.row-gray .ten-ball {
    flex: 0 0 20px
}

.match-row,
.row-gray .ten-ball>div {
    padding: 2px 0
}

.match-row,
.row-gray .ten-ball>div svg {
    display: none;
    width: 12px;
    height: 12px;
    fill: #fff641;
    stroke: #7c7d13
}

.match-row,
.row-gray .ten-ball>div .inc svg {
    display: inline
}

.tennis .scores .col {
    width: 24px;
    float: left;
    text-align: center;
    position: relative;
    min-height: 1px
}

.cricket .ply,
.cricket .ticker .cricket-score,
.tennis .scores .col-last,
.wickets .score {
    text-align: right
}

.tennis .scores .col small {
    font-size: 8px;
    position: absolute;
    top: -2px;
    right: -2px
}

@media (max-width:800px) {

    .mob.tennis .match-row,
    .row-gray .ten-ball {
        position: absolute;
        width: 20px;
        height: 100%;
        left: 60px;
        top: 0;
        padding-top: 6px
    }

    .mob.tennis .match-row,
    .row-gray .ply {
        padding: 2px 182px 2px 80px
    }

    .mob.tennis .match-row,
    .row-gray .sco2 .awy,
    .mob.tennis .match-row,
    .row-gray .sco2 .hom {
        width: 145px
    }

    .mob.tennis .tennis-double .match-row,
    .row-gray .ply {
        padding-top: 0
    }

    .mob.tennis .tennis-double .match-row,
    .row-gray .ply>div:first-child {
        border-bottom: dashed 1px #383838
    }

    .mob.tennis .tennis-double .match-row,
    .row-gray .sco2 .hom {
        top: 7px
    }

    .mob.tennis .tennis-double .match-row,
    .row-gray .sco2 .hom>div {
        padding-top: 4px;
        border-bottom: dashed 1px #383838
    }

    .mob.tennis .tennis-double .match-row,
    .row-gray .sco2 .awy {
        top: 38px
    }

    .mob .tennis .hl {
        padding: 5px 8px 6px
    }
}

.cricket .hl-time {
    padding: 2px 4px 3px 0;
    position: relative
}

.cricket .hl-time.highlight:before {
    position: absolute;
    content: '';
    width: 4px;
    height: 18px;
    background: #333;
    left: -4px
}

.cricket .comment {
    padding: 8px
}

.cricket .ticker .cricket-time .status {
    width: 120px;
    display: inline-block
}

.cricket .ticker .ply {
    font-weight: 400
}

.cricket .ticker .cricket-score {
    flex: 0 0 150px;
    font-weight: 400
}

.cricket .ticker .hover-action {
    cursor: pointer
}

.cricket .ticker .hover-action:hover .match-row,
.hover-action:hover .row-gray,
    {
    background: #333
}

.wickets {
    display: flex
}

.wickets .over {
    flex: 0 0 40px
}

.news-article,
.news-articles-list {
    flex: 1
}

.wickets .player {
    flex: 1;
    color: #fff
}

.wickets .score {
    flex: 0 0 50px;
    color: #fff;
    font-weight: 700
}

.match-row,
.row-gray .cricket-time {
    flex: 0 0 130px
}

.match-row,
.row-gray .cricket-time .time {
    padding-left: 4px
}

.match-row,
.row-gray .cricket-time .time.green {
    color: #fff;
    font-weight: 700
}

.match-row,
.row-gray .cricket-score {
    flex: 0 0 170px;
    font-weight: 700;
    color: #fff
}

.match-row,
.row-gray .cricket-score>div {
    padding: 2px 0
}

.match-row,
.row-gray .cricket-score .ic,
.match-row,
.row-gray .cricket-score .score1,
.match-row,
.row-gray .cricket-score .score2 {
    float: left;
    text-align: right;
    min-height: 13.5px
}

.match-row,
.row-gray .cricket-score .ic {
    width: 20px;
    text-align: left
}

.match-row,
.row-gray .cricket-score .score1 {
    width: 60px
}

.match-row,
.row-gray .cricket-score .score2 {
    width: 90px
}

.match-row,
.row-gray .cricket-score svg {
    display: none
}

.match-row,
.row-gray .cricket-score .ball .cricket-ball,
.match-row,
.row-gray .cricket-score .bat .cricket-bat {
    display: inline
}

.table-default {
    width: 100%;
    text-align: center;
    margin-bottom: 4px
}

.table-default th {
    font-size: 11px;
    background: #212121;
    font-weight: 700;
    color: #fff;
    padding: 8px 0
}

.table-default td {
    border-bottom: solid 1px #212121;
    padding: 8px 0
}

.table-default td:first-child {
    width: 24px
}

.table-default .name {
    color: #fff;
    text-align: left
}

.table-default.lineups th {
    text-transform: uppercase;
    padding: 8px
}

.table-default.lineups th:first-child {
    text-align: left
}

.table-default.lineups th:last-child {
    text-align: right
}

.table-default.lineups td {
    padding: 8px
}

.table-default.lineups td:first-child {
    text-align: left;
    width: auto
}

.table-default.lineups td:last-child {
    text-align: right
}

.more-info {
    text-align: center;
    padding: 8px 4px;
    line-height: 18px
}

.more-info .white {
    color: #fff;
    margin-right: 8px
}

.more-menu {
    border-bottom: solid 1px #<?=$ThemeColor?>;
    display: table;
    width: 100%
}

.more-menu>div {
    display: table-cell;
    text-align: center
}

.more-menu a,
.more-menu span {
    color: #aaa;
    padding: 10px 4px;
    display: block;
    cursor: pointer
}

.more-menu span {
    font-weight: 700;
    color: #<?=$ThemeColor?>;
    position: relative
}

.more-menu span:after {
    bottom: 0;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 138, 0, 0);
    border-bottom-color: #<?=$ThemeColor?>;
    margin-left: -7px;
    border-width: 5px 7px
}

.more-menu span.disabled {
    opacity: .5;
    color: #aaa;
    font-weight: 400;
    cursor: default
}

.more-menu span.disabled:after {
    display: none
}

@media (max-width:800px) {
    .mob .hl-time.highlight:before {
        background: #EF7900;
        height: 21px
    }

    .mob.cricket .match-row,
    .row-gray {
        padding-left: 8px
    }

    .mob.cricket .match-row,
    .row-gray .cricket-time {
        margin-top: 5px
    }

    .mob.cricket .match-row,
    .row-gray .cricket-time .hl-time {
        color: #fff
    }

    .mob.cricket .match-row,
    .row-gray .cricket-time .time.green {
        padding-left: 0
    }

    .mob.cricket .match-row,
    .row-gray .ply {
        padding: 2px 210px 2px 0
    }

    .mob.cricket .match-row,
    .row-gray .ply>div {
        font-weight: 400
    }

    .mob.cricket .match-row,
    .row-gray .cricket-score .awy,
    .mob.cricket .match-row,
    .row-gray .cricket-score .hom {
        display: block;
        text-align: right;
        position: absolute;
        right: 35px;
        top: 40px
    }

    .mob.cricket .match-row,
    .row-gray .cricket-score .awy {
        top: 58px
    }

    .mob.cricket .ticker .match-row,
    .row-gray-group {
        display: flex
    }

    .mob.cricket .ticker .match-row,
    .row-gray-group .row-star {
        position: relative;
        height: auto
    }

    .mob.cricket .ticker .match-row,
    .row-gray,
    .row-gray.even {
        /*display: flex;*/
        padding: 0 4px;
    }

    .mob .min {
        /*border: 1px solid #fff;*/
    }

    .mob .sco {
        /* color: transparent;*/
        width: 100%;
        height: 100%;
        position: absolute;
        top: 1px;
        text-align: right;
        font-weight: bold;
        margin: 0px 0px 0px -10px;
        padding: 14px 0px 0px 0px;
    }

    .mob .sco a {
        vertical-align: middle;
        position: absolute;
        text-decoration: none;
        cursor: pointer;
        height: 28px;
        margin: -14px 0px 0px 0px;
        padding: 14px 0px 0px 0px;
    }


    /* 
    .mob .sco::before {
font-size: 200px;
        }

.mob .mob-score{
    background: #111;
    position: absolute;
    z-index: 100;
    display: block;
    height: 4px;
    width: 8px;
    right: 10px;
    top: 10px;
}

.mob div.sco::nth-word(odd),
.mob .sco a::nth-word(odd)
{
    color: #ff0000;
}

*/
    .om .match-row,
    .row-gray-group .match-row,
    .row-gray:hover {
        color: #fff;
        background: #000;
    }

    .mob.cricket .ticker .match-row,
    .row-gray .ply {
        padding: 2px 60px;
        flex: 1
    }

    .mob.cricket .ticker .match-row,
    .row-gray .cricket-score {
        flex: 0 0 50px
    }

    .mob.cricket .ticker .match-row,
    .row-gray .cricket-score>div {
        border: none
    }

    .mob.cricket .ticker .hover-action:hover .match-row,
    .row-gray {
        background: #111
    }

    .mob .table-default td,
    .mob .table-default tr:nth-child(even) td {
        white-space: nowrap
    }

    .mob .table-default td.name,
    .mob .table-default td.status,
    .mob .table-default tr:nth-child(even) td.name {
        white-space: normal
    }

    .mob .table-default td.name span.p2 {
        display: block
    }
}

.stat {
    border-bottom: solid 1px #212121;
    background: #000;
    text-align: center;
    color: #aaa;
    padding: 12px 0
}

.stat .tleft,
.stat .tright {
    margin: 4px 0
}

.md-progress {
    height: 10px
}

.md-progress-container {
    margin: 4px 2px;
    border: 1px solid grey
}

.md-progress-bar {
    background-color: #<?=$ThemeColor?>
}

.md-progress-fright {
    float: right
}

.popup .cal a {
    line-height: normal !important;
    padding: 12px 0;
    display: block;
    text-transform: uppercase
}

.popup .empty {
    background-position: -2000px 0
}

.popup .smartbanner {
    margin-top: 84px
}

.popup-close-button {
    margin-top: 5px;
    margin-bottom: 70px
}

.popup-close-button a {
    color: #999
}

.assists-link {
    text-decoration: none !important
}

.assists-link span {
    color: #<?=$ThemeColor?>
}

.assists-link svg {
    width: 14px;
    height: 14px;
    margin-top: -2px;
    position: relative;
    top: 2px;
    fill: #<?=$ThemeColor?>
}

.assists-link svg.show-assists {
    display: inline
}

.assists-link svg.hide-assists,
.assists-link.selected svg.show-assists {
    display: none
}

.assists-link.selected svg.hide-assists {
    display: inline
}

.md-footer,
.md-footer a {
    color: #aaa;
    line-height: 18px
}

.md-footer a.underlined,
.md-footer a:hover {
    text-decoration: underline
}

.md-footer .copy {
    text-align: right
}

.odds,
.popover {
    text-align: center
}

.odds .val {
    display: inline-block;
    width: 32px
}

.field {
    position: relative;
    width: 100%;
    height: 785px;
    background: #486b3d;
    box-sizing: border-box;
    font-size: 12px
}

.field .arrow-down {
    fill: red
}

.corners div,
.field .circle,
.field .goal-box div,
.field-wrap {
    border: 4px solid #88B37A
}

.field-wrap {
    margin: 40px 10px;
    height: 708px;
    box-sizing: border-box;
    position: relative;
    background: linear-gradient(to bottom, #528b40 4px, #589644 74px, #528b40 74px, #528b40 144px, #589644 144px, #589644 214px, #528b40 214px, #528b40 284px, #589644 284px, #589644 354px, #528b40 354px, #528b40 424px, #589644 424px, #589644 494px, #528b40 494px, #528b40 564px, #589644 564px, #589644 634px, #528b40 634px, #528b40 704px, #589644 704px)
}

.corners div {
    width: 40px;
    height: 40px;
    position: absolute;
    border-radius: 40px
}

.corners div:nth-child(1) {
    top: -30px;
    left: -30px
}

.corners div:nth-child(2) {
    top: -30px;
    right: -30px
}

.corners div:nth-child(3) {
    bottom: -30px;
    left: -30px
}

.corners div:nth-child(4) {
    bottom: -30px;
    right: -30px
}

.field .middle {
    width: 100%;
    height: 4px;
    background: #88B37A;
    position: absolute;
    top: 50%;
    left: 0
}

.field .center,
.field .circle,
.goal-box {
    left: 50%;
    position: absolute
}

.field .circle {
    width: 80px;
    height: 80px;
    top: 50%;
    margin: -43px 0 0 -43px;
    border-radius: 80px
}

.field .center {
    width: 12px;
    height: 12px;
    top: 50%;
    margin: -4px 0 0 -6px;
    border-radius: 50%;
    background: #88B37A
}

.goal-box {
    width: 100%;
    display: block;
    top: 0;
    margin-left: -20%
}

.goal-box-right {
    bottom: 0;
    top: inherit;
    right: 50%;
    margin-right: -20%;
    left: inherit;
    transform: rotate(180deg)
}

.goal-box div {
    position: absolute
}

.goal-box div:nth-child(1) {
    width: 20%;
    height: 20px;
    top: -4px;
    left: 50%;
    margin-left: -40%;
    z-index: 20
}

.goal-box div:nth-child(2) {
    width: 40%;
    height: 68px;
    top: -4px;
    z-index: 10;
    background: #528b40
}

.goal-box div:nth-child(3) {
    width: 20%;
    height: 40px;
    top: 40px;
    left: 50%;
    margin-left: -40%;
    z-index: 5;
    border-radius: 50%
}

.away-info,
.home-info {
    position: absolute;
    left: 10px;
    color: #fff;
    text-shadow: 0 1px 1px #000;
    width: 90%;
    width: calc(100% - 20px)
}

.home-info {
    top: 10px
}

.away-info {
    bottom: 10px
}

.away-info .name,
.home-info .name {
    font-size: 16px;
    font-weight: 700;
    float: left
}

.away-info .formation,
.home-info .formation {
    right: 0;
    font-size: 15px;
    float: right
}

.players-row {
    display: table;
    width: 100%;
    z-index: 100;
    position: relative
}

.players-row .item {
    display: table-row
}

.players-row .item li {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    color: #fff;
    padding: 0 4px;
    font-size: 11px
}

.players-row .player {
    height: 30px;
    width: 30px;
    border: 1px solid #fff;
    background: #ad5900;
    border-radius: 50%;
    display: inline-block;
    position: relative
}

.players-row .player .evt {
    position: absolute;
    width: 17px;
    height: 17px
}

.players-row .player .evt1 {
    top: -2px;
    left: -7px
}

.players-row .player .evt2 {
    top: -7px;
    right: -7px
}

.players-row .player .evt3 {
    bottom: -7px;
    left: -7px
}

.players-row .player .evt4 {
    bottom: -9px;
    right: -7px
}

.players-row .evt .goal {
    background-position: 0 -592px
}

.players-row .evt .goal-own {
    background-position: 0 -610px
}

.players-row .evt .redcard,
.players-row .evt .yellowcard {
    margin: 1px 0 0 -6px
}

.players-row .evt .sub-out {
    background-position: 0 -629px
}

.players-row .player .qtd {
    position: absolute;
    width: 12px;
    height: 12px;
    background: #a00000;
    border: 1px solid #5e0101;
    top: -10px;
    left: -7px;
    border-radius: 50%;
    font-size: 10px
}

.players-row .number {
    font-weight: 700;
    font-size: 12px;
    line-height: 30px
}

.players-row .name {
    text-shadow: 0 1px 1px #000;
    margin-top: 4px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.field .home .players-row:first-child .player {
    background: #000059
}

.field .away .players-row .player {
    background: #212121
}

.field .away .players-row:last-child .player {
    background: #590000
}

.popover-link {
    position: relative
}

.popover {
    position: absolute;
    background: #000;
    right: 0;
    top: 20px;
    padding: 5px 10px 7px;
    color: #fff;
    border-radius: 6px;
    width: 100px;
    font-style: normal
}

.popover:before {
    position: absolute;
    content: '';
    top: -8px;
    right: 6px;
    border-left: solid 4px transparent;
    border-right: solid 4px transparent;
    border-bottom: solid 4px #000;
    border-top: solid 4px transparent
}

.tracker-widget {
    position: relative;
    width: 100%;
    padding-top: 62%;
    margin-bottom: 5px;
    visibility: visible
}

.tracker-widget iframe {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0
}

.odds-widget {
    height: 398px;
    margin-top: 4px;
    visibility: visible;
    background-color: #000
}

.odds-widget iframe {
    width: 100%;
    height: 398px
}

@media (max-width:800px) {
    .mob .md .row-gray {
        font-size: 11px;
        height: auto
    }

    .mob.euro-2012 .fixture {
        height: 42px
    }

    .mob.euro-2012 .fixture span.hom {
        position: absolute
    }

    .mob.euro-2012 .fixture span.awy {
        position: absolute;
        top: 22px
    }

    .mob.euro-2012 .row-gray .score span {
        display: none
    }

    .mob.euro-2012 .row-gray .score .awy,
    .mob.euro-2012 .row-gray .score .hom {
        display: block;
        right: 0
    }

    .mob.euro-2012 .row-top.live {
        position: relative
    }

    .mob.euro-2012 .row-gray.live:before,
    .mob.euro-2012 .row-top.live:before {
        border-left: solid 4px #20c020;
        position: absolute;
        content: '';
        height: 100%;
        width: 4px;
        display: block;
        left: 0;
        z-index: 20
    }

    .mob.euro-2012 .row-top.live .min {
        padding-left: 4px
    }

    .mob.euro-2012 .row-top,
    .popup .row-top {
        position: relative;
        background: #333;
        padding: 0;
        height: 48px
    }

    .mob.euro-2012 .row-top .min,
    .popup .row-top .min {
        position: absolute;
        left: 0;
        top: 0;
        color: #888;
        padding-left: 8px !important;
        height: 100%;
        padding-top: 16px;
        z-index: 10
    }

    .mob.euro-2012 .row-top .ply,
    .popup .row-top .ply {
        position: absolute;
        left: 70px;
        padding-top: 3px;
        text-align: left !important;
        max-width: 60%;
        max-width: calc(100% - 130px);
        width: 100% !important;
        top: 25px
    }

    .mob.euro-2012 .row-top .ply.tright,
    .popup .row-top .ply.tright {
        top: 1px
    }

    .mob.euro-2012 .row-top .sco .awy,
    .mob.euro-2012 .row-top .sco .hom,
    .popup .row-top .sco .awy,
    .popup .row-top .sco .hom {
        display: block;
        position: absolute;
        right: 35px
    }

    .mob.euro-2012 .row-top .sco .hom,
    .popup .row-top .sco .hom {
        top: 4px
    }

    .mob.euro-2012 .row-top .sco span,
    .popup .row-top .sco span {
        display: none
    }

    .mob.euro-2012 .row-top .sco .awy,
    .popup .row-top .sco .awy {
        top: 28px
    }

    .mob.euro-2012 .row-top .star,
    .popup .row-top .star {
        position: absolute;
        height: 48px;
        right: 0;
        background: #333;
        z-index: 1;
        top: 0;
        width: 29px
    }

    .mob.euro-2012 .row-top .star i,
    .popup .row-top .star i {
        top: 17px;
        right: 8px
    }
}

.news-list .time,
.news-list .view-all a {
    color: #ccc
}

.news .time,
.news-list .view-all span {
    position: relative
}

.content-wider .news {
    margin: 0
}

.news {
    background: #fff;
    height: 100%;
    margin: -4px;
    display: flex
}

.news .time svg {
    width: 10px;
    height: 10px;
    fill: #ccc;
    margin-right: 4px
}

.news.news-dark {
    background: #333
}

.news-list {
    background: #444;
    flex: 0 0 200px;
    float: right;
    width: 200px
}

.news-list .view-all {
    padding: 15px;
    font-weight: 700;
    border-top: solid 1px #666
}

.news-list--item-large {
    background: #333;
    color: #ccc;
    border-bottom: solid 1px #111;
    padding: 15px;
    display: block
}

.news-list--item-large .thumb {
    float: left;
    width: 140px
}

.news-list--item-large .thumb img {
    object-fit: cover;
    width: 100%;
    height: 85px
}

.news-list--item-large .info {
    padding-left: 150px;
    padding-bottom: 20px;
    height: 85px;
    box-sizing: border-box;
    position: relative
}

.news-list--item-large .info .more {
    width: 12px;
    height: 12px;
    position: absolute;
    fill: #fff;
    right: 0;
    bottom: 2px
}

.news-list--item-large .news-title {
    font-weight: 700;
    margin: 0;
    font-size: 15px;
    color: #fff
}

.news-list--item-large .time {
    position: absolute;
    bottom: 3px
}

.news-list--item-large:hover {
    background: #444
}

@media (max-width:800px) {
    .news-list--item-large .thumb {
        width: 85px
    }

    .news-list--item-large .info {
        padding-left: 95px
    }

    .news-list--item-large .news-title {
        font-size: 13px
    }
}

.news-list--item {
    border-bottom: solid 1px #111;
    border-top: solid 1px #666;
    padding: 15px;
    cursor: pointer;
    position: relative;
    color: #555
}

.news-list--item:after {
    background: #fff
}

.news-list--item:first-child {
    border-top: none
}

.news-list--item.active .title,
.news-list--item:hover .title {
    color: #fff
}

.news-list--item.active:after,
.news-list--item:hover:after {
    position: absolute;
    content: '';
    width: 4px;
    height: 100%;
    display: block;
    right: 0;
    top: 0;
    background: #<?=$ThemeColor?>
}

.news-list--item .title {
    color: #ccc;
    font-weight: 700;
    margin-bottom: 10px;
    font-size: 10px
}

.news-article__header {
    border-bottom: solid 1px #e4e4e4;
    padding: 20px 15px 10px;
    position: relative;
    color: #000
}

.news-article__header .breadcrumb {
    margin-bottom: 20px;
    width: 100%;
    padding-right: 80px;
    box-sizing: border-box
}

.news-article__header .breadcrumb a {
    text-transform: uppercase;
    position: relative;
    padding: 0 6px 0 4px;
    color: #000
}

.news-article__header .breadcrumb a.current {
    color: #<?=$ThemeColor?>;
    font-weight: 700
}

.news-article__header .breadcrumb a:before {
    position: absolute;
    content: '.';
    left: -7px;
    top: 0;
    font-size: 20px;
    font-weight: 400;
    line-height: 1px;
    color: #aaa
}

.news-article__header .breadcrumb a:first-child {
    padding-left: 0
}

.news-article__header .breadcrumb a:first-child:before {
    content: ''
}

.news-article__header .breadcrumb a:hover {
    color: #ccc
}

.news-article__header .social {
    position: absolute;
    right: 15px;
    top: 20px
}

.news-article__header .social>a {
    width: 20px
}

.news-article__header .social svg {
    width: 16px;
    height: 16px;
    margin-left: 5px
}

.news-article__header .title {
    font-size: 23px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #000
}

.news-article__header .photo {
    margin-bottom: 10px
}

.news-article__header .photo img {
    object-fit: cover;
    width: 100%;
    height: 300px
}

.news-article__header .author {
    float: left;
    font-weight: 700;
    font-size: 11px;
    color: #000
}

.news-article__header .author img {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    float: left
}

.news-article__header .author .name {
    padding-left: 10px;
    line-height: 30px
}

.news-article__header .author .name.no-avatar {
    padding-left: 0
}

.news-article__header .time {
    float: right;
    line-height: 30px
}

.news-article__main {
    padding: 0 15px 15px;
    font-size: 12px;
    border-bottom: solid 1px #e4e4e4
}

.news-article__main p {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 20px;
    color: #555
}

.news-article__main p:last-child {
    margin-bottom: 0
}

.news-article__main .news-add {
    margin: 20px auto;
    text-align: center
}

.news-article__main .next,
.news-article__main .previous {
    font-weight: 700;
    float: left;
    position: relative
}

.news-article__main .next svg,
.news-article__main .previous svg {
    width: 16px;
    height: 16px;
    position: relative;
    top: 3px
}

.news-article__main .next {
    float: right
}

.news-article__main a {
    color: #000
}

.news-article__main a:hover {
    color: inherit
}

.news-outstream {
    min-height: 15px
}

.news-article__footer {
    padding: 20px;
    color: #555
}

.news-article__footer .logo {
    float: left;
    margin-right: 15px
}

.news-article__footer .logo img {
    height: 70px
}

.news-article__footer h3 {
    margin: 0 0 10px;
    font-size: 16px
}

.news-article__footer .app-btn>img {
    width: 85px;
    margin-right: 10px
}

@media (max-width:350px) {
    .news-article__footer .logo img {
        height: 40px
    }

    .news-article__footer h3 {
        font-size: 14px
    }
}

.news-pagination {
    padding: 20px;
    display: flex
}

.news-pagination span,
.news-pagination>a {
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border: 1px solid #e4e4e4;
    border-left: none;
    text-align: center;
    color: #fff;
    flex: 1
}

.news-pagination span:first-child,
.news-pagination>a:first-child {
    border-left: solid 1px #e4e4e4;
    border-radius: 6px 0 0 6px
}

.news-pagination span:last-child,
.news-pagination>a:last-child {
    border-radius: 0 6px 6px 0
}

.news-pagination span,
.news-pagination span:hover,
.news-pagination>a:hover {
    background: #<?=$ThemeColor?>
}

/* Custom CSS */

.right-bar .arrow {
    background-image: url("/img/sprite_v1.0.6.png")
}

.right-bar .arrow {
    width: 10px;
    height: 14px;
    display: inline-block;
    background-repeat: no-repeat;
    cursor: pointer;
}

.right-bar .arrow-left {
    background-position: -13px -918px;
}

.right-bar .arrow.arrow-left {
    display: inline-block;
    position: absolute;
    margin-top: 4px;
}

.right-bar .arrow-right {
    background-position: -2px -918px;
}

.right-bar .arrow.arrow-right {
    display: inline-block;
    position: absolute;
    margin-top: 4px;
}

.right-bar a.league-name {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    text-transform: uppercase;
    width: calc(100% - 50px);
    display: inline-block;
    position: relative;
    margin: 0px 0px 0px 34px;
}

.right-bar .table {
    flex: 0 0 296px;
    float: left;
    width: 296px;
    position: relative;
}

.right-bar .col-2,
.right-bar .name {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding: 6px 0px 6px 0px;
    margin: 1px 0px 0px 0px;
    display: block;
    text-align: center;
}

.live-match {
    margin-right: 6px;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background: #<?=$ThemeColor?>;
    /* #ff0000; Fixed RED */
    -webkit-animation: live-match 2s ease-in-out infinite both;
    animation: live-match 2s ease-in-out infinite both;
}

@-webkit-keyframes live-match {
    from {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    10% {
        -webkit-transform: scale(0.91);
        transform: scale(0.91);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }

    17% {
        -webkit-transform: scale(0.98);
        transform: scale(0.98);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    33% {
        -webkit-transform: scale(0.87);
        transform: scale(0.87);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }

    45% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes live-match {
    from {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    10% {
        -webkit-transform: scale(0.91);
        transform: scale(0.91);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }

    17% {
        -webkit-transform: scale(0.98);
        transform: scale(0.98);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }

    33% {
        -webkit-transform: scale(0.87);
        transform: scale(0.87);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }

    45% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.sco a {
    cursor: pointer;
    text-decoration: none;
    display: block;
    position: absolute;
    z-index: 1;
    margin: -10px 0px 0px -42.5%;
    width: 100%;
    padding: 10px 0px 12px 0px;
}

.load-scores {
    width: 100%;
}




.table .num.dark-blue {
    border-bottom-color: #00356E;
}

.table .num.medium-blue {
    border-bottom-color: #00448C;
}

.table .num.light-blue {
    border-bottom-color: #0052AA;
}

.table .num.dark-yellow {
    border-bottom-color: #6E6200;
}

.table .num.light-yellow {
    border-bottom-color: #9B9B00;
}

.table .num.dark-green {
    border-bottom-color: #006400;
}

.table .num.light-green {
    border-bottom-color: #1E821E;
}

.table .num.dark-red {
    border-bottom-color: #6E0000;
}

.table .num.light-red {
    border-bottom-color: #A00000;
}

.table .num.dark-purple {
    border-bottom-color: #400640;
}

.table .num.light-purple {
    border-bottom-color: #780078;
}

.table .num.dark-teal {
    border-bottom-color: #006E6E;
}

.table .num.light-teal {
    border-bottom-color: #008C8C;
}

.ltable .title {
    border-top: solid 1px #666;
}

.ltable .title>div {
    background-color: #212121;
    border-left: none;
}

.ltable .row-gray {
    padding: 0;
}

.ltable .row-gray>div {
    float: left;
    box-sizing: border-box;
}

.ltable .color {
    width: 30px;
    text-align: center;
    z-index: 1;
    padding-right: 4px;
    padding: 10px 0px 10px 0px;
}

.ltable .pts,
.ltable .pts2,
.ltable .pts3 {
    width: 25px;
    text-align: center;
    padding: 10px 0px 10px 0px;
    vertical-align: middle;
}

.ltable .pts2 {
    width: 40px;
}

.ltable .pts3 {
    width: 30px;
}

.ltable .tot {
    font-weight: bold;
}

.ltable .tt .tip {
    left: 37px;
}

.ltable .team,
.ltable .team3 {
    padding: 10px 0px 10px 0px;
    width: 238px;
    width: calc(100% - 230px);
    padding-left: 10px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.ltable .team3 {
    width: 213px;
    width: calc(100% - 255px);
}

.results .min {
    border: 1px solid #fff;
    width: 67px;
    float: left;
}

.live-glow {
    --borderWidth: 30px;
    position: absolute;

    z-index: 100;
}

.live-glow:after {
    content: '';
    position: absolute;
    top: calc(-1 * var(--borderWidth));
    left: calc(-1 * var(--borderWidth));
    height: calc(100% + var(--borderWidth) * 2);
    width: calc(100% + var(--borderWidth) * 2);
    background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
    z-index: -1;
    animation: animatedgradient 3s ease alternate infinite;
    background-size: 300% 300%;
}


@keyframes animatedgradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}


<?php if($DevMode==1){ ob_end_flush(); }?>