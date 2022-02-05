<?php
$ThemeColor = $_GET['c'];
$DevMode = 0; //Unlock Developer Mode 

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

body {
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    background-color: #000;
    color: #aaa;
    padding: 0;
    margin: 0;
    list-style: none;
    font-weight: 400;
    border: 0
 }
 
 a {
    text-decoration: none;
    color: #<?=$ThemeColor?>;
 }
 
 /* misc */
 .left {
    float: left;
 }
 
 .right {
    float: right;
 }
 
 .clear,
 .row,
 .row-gray {
    clear: both;
 }
 
 .clear:before,
 .clear:after,
 .row:before,
 .row:after,
 .row-gray:before,
 .row-gray:after {
    content: "";
    display: table;
 }
 
 .clear:after,
 .row:after,
 .row-gray:after {
    clear: both;
 }
 
 .tright {
    text-align: right !important;
 }
 
 .tleft {
    text-align: left !important;
 }
 
 .tcenter {
    text-align: center !important;
 }
 
 .hidden {
    display: none;
 }
 
 .ml5 {
    margin-left: 5px;
 }
 
 .mn {
    margin: 0 !important;
 }
 
 .mbn {
    margin-bottom: 0 !important;
 }
 
 .mtn {
    margin-top: 0 !important;
 }
 
 .mt30 {
    margin-top: 30px;
 }
 
 .bn {
    border: none !important;
 }
 
 .bb {
    border-bottom: solid 1px #<?=$ThemeColor?>;
 }
 
 .br {
    border-right: solid 1px #666;
 }
 
 .bbn {
    border-bottom: none !important;
 }
 
 .btn {
    border-top: none !important;
 }
 
 .p5 {
    padding: 4px;
 }
 
 .pb {
    padding-bottom: 10px;
 }
 
 .pln {
    padding-left: 0 !important;
 }
 
 .prn {
    padding-right: 0 !important;
 }
 
 .ml4 {
    margin-left: 4px;
 }
 
 .mr4 {
    margin-right: 4px;
 }
 
 .pr4 {
    padding-right: 4px !important;
 }
 
 .pl4 {
    padding-left: 4px !important;
 }
 
 .pbn {
    padding-bottom: 0;
 }
 
 .back {
    text-align: right;
    color: #ccc;
    font-size: 12px;
 }
 
 .back a {
    color: #FFCC66;
 }
 
 .back a:hover {
    color: #fff;
    text-decoration: underline;
 }
 
 td.space {
    background: #000 !important;
    border: none !important;
    padding: 0 !important;
 }
 
 td.space span {
    border-top: solid 1px #666;
    border-bottom: solid 1px #666;
    display: block;
    margin: 10px 0 6px;
    height: 1px;
    line-height: 1px;
 }
 
 iframe {
    border: 0;
    overflow: hidden;
 }
 
 .sm {
    font-size: 11px !important
 }
 
 .the-gap {
    height: 60px;
 }
 
 .bh th {
    background: #333 !important;
    color: #aaa !important;
 }
 
 .ln36 {
    line-height: 36px;
 }
 
 .buttons a,
 .buttons ul a.cat,
 .switch,
 .right-bar .arrow,
 .inc,
 .league-wc .inc,
 .league-wc.comments .inc,
 .league-multi,
 .ball,
 .league-cricket,
 .ico {
    background-image: url("/img/sprite_v1.0.6.png")
 }
 
 .banner {
    display: none
 }
 
 /* Content */
 .tab {
    border-left: solid 1px #666;
    border-top: 0;
    border-bottom: 0;
    margin: 0;
    background: #444
 }
 
 .tab2 {
    text-align: justify;
    height: 15px;
    font-weight: bold;
    padding: 4px;
    font-size: 11px;
    border-top: solid 1px #666;
    border-bottom: solid 1px #666;
    margin: 4px 0;
    color: #ccc;
 }
 
 .tab2 a {
    color: #666;
    cursor: pointer;
 }
 
 .tab2 a:hover,
 .tab2 .dash {
    color: #444;
 }
 
 .tab2 div {
    display: inline-block;
 }
 
 .tab2:after {
    content: '';
    width: 100%;
    display: inline-block;
 }
 
 .tab2 .gap {
    width: 50px;
 }
 
 .tab2 .dash:last-child {
    text-align: right;
 }
 
 .tab2-orange .dash {
    color: #666;
 }
 
 .tab2-orange a {
    color: #<?=$ThemeColor?>;
 }
 
 .tab2-orange a:hover {
    color: #444;
 }
 
 /* soccer */
 .league-table th {
    color: #ccc;
    height: 22px;
    background-color: #333;
    text-align: left;
    border-top: solid 1px #666;
    border-bottom: solid 1px #666;
 }
 
 .league-table th.footer {
    color: #ddd;
 }
 
 .league-table td {
    background-color: #cfcfcf;
    padding: 2px 0;
    border-bottom: solid 1px #666;
 }
 
 .league-table .even td {
    background-color: #dfdfdf;
 }
 
 .league-table .fd {
    width: 46px;
    padding-left: 4px;
    min-width: 46px;
    max-width: 46px;
 }
 
 .league-table .fh,
 .league-table .fa {
    width: 183px;
    min-width: 183px;
    max-width: 183px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
 }
 
 .league-table .fh {
    text-align: right;
 }
 
 .league-table .fs {
    width: 52px;
    text-align: center;
    min-width: 52px;
    max-width: 52px;
 }
 
 .league-table .fs:hover {
    text-decoration: none !important;
    cursor: default !important;
    color: black;
 }
 
 .row-tall {
    padding: 7px 4px;
    color: #fff;
    font-weight: bold;
    font-size: 14px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
 }
 
 .row .title {
    color: #aaa;
 }
 
 .row-gray {
    color: #aaa;
    border-bottom: solid 1px #212121;
    padding: 0 4px;
    line-height: 18px;
    flex: 1;
    box-sizing: border-box;
    padding: 4px 0px 4px 4px;
    -webkit-box-pack: justify;
    justify-content: space-between;
    white-space: nowrap;
 }
 
 
 
 .row-gray.bn {
    padding: 2px;
    background: #212121;
 }
 
 .row>div.sco {
    text-align: center;
    width: 70px;
    color: #<?=$ThemeColor?>;
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 20px;
    font-weight: bold;
 }
 
 .row-gray .sco,
 .row-tall .sco {
    width: 70px;
    text-align: center;
    float: left;
 }
 
 .row-gray .min,
 .row-tall .min {
    width: 40px;
    text-align: center;
    float: left;
 }
 
 .row-gray .min {
    text-align: left;
 }
 
 
 
 
 .row-gray .ply.tright,
 .row-tall .ply.tright {
    width: calc(50% - 70px);
    float: left;
 }
 
 .row-gray .ply span,
 .row-tall .ply span {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    margin-top: 2px;
    margin-bottom: -2px;
 }
 
 
 
 .ply>.name,
 .row>.min {
    padding-top: 6px;
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    font-weight: bold;
 }
 
 
 .results>.load-scores>.row.row-tall>.ply {
    padding-top: 4px;
 }
 
 .row-gray .info {
    width: 40%;
    width: calc(50% - 60px);
    float: left;
    text-align: right;
 }
 
 .row-gray.bn>div.sco {
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    font-weight: bold;
    color: #<?=$ThemeColor?>;
    opacity: 0.5;
 }
 
 .inc {
    background-repeat: no-repeat;
    width: 14px;
    height: 14px;
    display: inline-block;
 }
 
 .yellowcard {
    background-position: 0 -125px;
 }
 
 .redcard {
    background-position: 0 -140px;
 }
 
 .redyellowcard {
    background-position: 0 -155px;
 }
 
 .goal {
    background-position: 0 -171px;
 }
 
 .sub-out {
    background-position: 0 -404px;
 }
 
 .sub-in {
    background-position: 0 -423px;
 }
 
 .goal-miss {
    background-position: 0 -381px;
 }
 
 .empty {
    background-position: -2000px 0;
 }
 
 .assist {
    font-style: italic;
    color: #999
 }
 
 .off {
    color: #999;
 }
 
 .md-footer,
 .md-footer a {
    color: #999;
    line-height: 17px;
 }
 
 .row.md-footer.bb {
    margin-top: 6px;
 }
 
 /* new styles */
 .table .top {
    border-top: solid 1px #666;
    border-bottom: solid 1px #666;
    background: #333;
    color: #ccc;
    line-height: 24px;
    font-size: 11px;
    font-weight: bold;
 }
 
 .table .rows {
    background: #dfdfdf;
 }
 
 .table .rows .item {
    border-bottom: solid 1px #666;
    line-height: 17px;
    color: #000;
 }
 
 .table .rows .item.even {
    background: #cfcfcf;
 }
 
 .table .rows .item img {
    margin: 0;
 }
 
 .table .item .name {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-align: left;
    padding-left: 4px;
 }
 
 .table .item .color {
    position: relative;
    z-index: 10;
 }
 
 .table .item .color span {
    position: absolute;
    bottom: 0;
    right: 0;
    content: "";
    border-left: 17px solid transparent;
    z-index: -1;
 }
 
 .right-bar .table *,
 .right-bar .table *:before,
 .right-bar .table *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
 }
 
 .col-1,
 .col-2,
 .col-3,
 .col-4,
 .col-5,
 .col-6,
 .col-7,
 .col-8,
 .col-9,
 .col-10,
 .col-11,
 .col-12 {
    position: relative;
    min-height: 1px;
    padding-left: 0;
    padding-right: 0;
    float: left;
 }
 
 .col-12 {
    width: 100%;
 }
 
 .col-11 {
    width: 91.66666666666666%;
 }
 
 .col-10 {
    width: 83.33333333333334%;
 }
 
 .col-9 {
    width: 75%;
 }
 
 .col-8 {
    width: 66.66666666666666%;
 }
 
 .col-7 {
    width: 58.333333333333336%;
 }
 
 .col-6 {
    width: 50%;
 }
 
 .col-5 {
    width: 41.66666666666667%;
 }
 
 .col-4 {
    width: 33.33333333333333%;
 }
 
 .col-3 {
    width: 25%;
 }
 
 .col-2 {
    width: 16.666666666666664%;
 }
 
 .col-1 {
    width: 8.333333333333332%;
 }
 
 .col-offset-11 {
    margin-left: 91.66666666666666%;
 }
 
 .col-offset-10 {
    margin-left: 83.33333333333334%;
 }
 
 .col-offset-9 {
    margin-left: 75%;
 }
 
 .col-offset-8 {
    margin-left: 66.66666666666666%;
 }
 
 .col-offset-7 {
    margin-left: 58.333333333333336%;
 }
 
 .col-offset-6 {
    margin-left: 50%;
 }
 
 .col-offset-5 {
    margin-left: 41.66666666666667%;
 }
 
 .col-offset-4 {
    margin-left: 33.33333333333333%;
 }
 
 .col-offset-3 {
    margin-left: 25%;
 }
 
 .col-offset-2 {
    margin-left: 16.666666666666664%;
 }
 
 .col-offset-1 {
    margin-left: 8.333333333333332%;
 }
 
 div.cal.row {
    -webkit-border-radius: 0 0 0 0;
    border-radius: 0 0 0 0;
 }
 
 div.cal.row a {
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    padding: 8px 0 8px 0;
    text-decoration: none;
 }
 
 div.cal.row a:last-child {
    border-right: none;
 }
 
 a.col-4 {
    -webkit-border-radius: 0 0 0 0;
    border-radius: 0 0 0 0;
 }
 
 a.col-4.selected {
    -webkit-border-radius: 0 0 0 0;
    border-radius: 0 0 0 0;
    /* Old browsers */
 }
 
 div {
    text-transform: capitalize;
 }
 
 
 .row.bt {
    padding: 2px 10px 10px 2px;
    font-family: Arial, Tahoma, Sans-serif;
    font-size: 11px;
    font-weight: bold;
    color: #666;
    background: #212121;
 }
 
.load-scores > .row.bt > .col-10 {
    margin: 10px 0px 0px 6px;
    display: inline-block;
    width: calc(80.33333333333334% - 20px);
    float: left;
    display: inline-block;
 }
 
.load-scores > .row.bt > .col-2.tright {
    margin: 10px 0px 0px 0px;
    min-width: 72px;
    width: calc(10.666666666666664% - 2px);
    float: right;
    display: inline-block;
 }
 
 .ad-link {
    width: 40%;
    margin: 6px;
 }
 
 .ad-300 {
    width: 300px;
    height: 250px;
    margin: auto;
    margin-top: 10px;
 }
 
 .copy-link {
    width: 40%;
    margin: 6px;
    text-align: right;
    float: right;
 }
 
 .copy-link a,
 .ad-link a {
    text-decoration: none;
 }
 
 .inc,
 .ico {
    background-repeat: no-repeat;
    width: 11px;
    height: 13px;
    display: inline-block;
    position: relative;
    margin: 0px 2px 0px 2px;
 }
 
 .ico {
    background-position: -0 -898px;
 }
 
 .selected .ico.ico-arrow,
 a.selected:hover .ico.ico-arrow {
    background-position: -26px -805px;
 }
 
 .md {
    min-width: 516px;
 }
 
 .md .row-tall {
    padding: 7px 4px;
    border: none;
 }
 
 .md .row-gray .ply .name {
    width: 132px;
 }
 
 .md .row-gray .assist.name {
    width: 183px;
 }
 
 .md .ply .ml4:empty,
 .md .ply .mr4:empty {
    display: none;
 }
 
 .md-progress {
    height: 10px;
    background-color: #212121;
 }
 
 .col-2.tcenter {
    font-size: 9px;
    margin-top: 6px;
 }
 
 .col-1.tleft,
 .col-1.tright {
    margin-top: 6px;
 }
 
 .md-progress-container {
    margin: 4px;
    border: 1px solid #333;
    padding: 4px
 }
 
 .md-progress-bar {
    background-color: #<?=$ThemeColor?>;
 }
 
 .md-progress-fright {
    float: right;
 }
 
 a.orange {
    color: #<?=$ThemeColor?>;
    outline: none;
    text-decoration : none;
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
 
 
 .live-match {
    --borderWidth: 30px;
    position: absolute;
    border-radius: var(--borderWidth);
 }
 
 .live-match:after {
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