<div class="nav-footer clear hidden-sm" data-type="menu-m">
    <div class="item logo"> 
    	<a href="/" title="Home"> <img class="logo" alt="LiveScore" src="<?=$SiteUrl;?>/img/Live-Score-Bongda365.webp" title="LiveScore Script Logo"> </a> 
	</div>
	<div class="item"> 
		<a href="/" <?php if($FollowPage=='home'){echo 'class="active"';}?>title="Scores"> 
			<svg class="icon-soccer">
        		<use xlink:href="#icon-soccer"></use>
			</svg> 
			<span>Scores</span>
		</a> 
	</div>
	<div class="item"> 
		<a href="/soccer/live/" <?php if($_SERVER['REQUEST_URI']=='/soccer/live/'){echo 'class="active"';}?> title="Live Scores"> 
			<svg class="icon-soccer-live">
            	<use xlink:href="#icon-soccer-live"></use>
    		</svg> 
    		<span>Live</span> 
		</a> 
	</div>
	<div class="item"> 
		<a href="#" title="Menu" id="sport-menu"> 
			<svg class="icon-menu-soccer">
            	<use xlink:href="#icon-menu-soccer"></use>
        	</svg> 
        	<span>Menu</span> 
    	</a> 
	</div>
</div>
<div class="main-banner hidden-xs clear"> 
	<a href="/" title="LiveScore Script, Soccer Script for developers">
		<div class="home-link"></div>	
	</a>
	<img src="<?=$SiteUrl;?>/img/Live-Score-Bongda365.webp" alt="LiveScore" alt="LiveScore Script Header">
</div>