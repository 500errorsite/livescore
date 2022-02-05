<div class="right-bar">
    <div class="hidden-xs ">
        <?php include ('./ads/300x250.php'); ?>
    </div>
    <?php /* You can enable this Social module by uncomment it
    <div class="social-box">
        <div class="social-title">@Social</div>
        <div class="social-buttons">
            <!-- START Facbook button -->
            <div class="fb-like" 
                data-href="<?=$FacebookLink?>" 
                data-width="" 
                data-layout="button" 
                data-action="like" 
                data-size="large" 
                data-share="true">
            </div>
            <!-- END Facbook button -->
            <!-- START Twitter button -->
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                class="twitter-share-button" 
                data-size="large" 
                data-text="<?=$GetTitle?>" 
                data-via="<?=$TwitterUsername?>" 
                data-hashtags="LiveScoreScript" 
                data-show-count="false">Tweet This
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- END Twitter button -->
        </div>
    </div>
    */?>
    <?php if($LeagueWidget!=NULL){ // Hide if League details?>
        <div class="table-box">
            <div class="table-title1">LEAGUE TABLE</div>
            <hr>
            <div id="mini-league-table">
                <?=$LeagueWidget?>
            </div>
        </div> 
    <?php } ?>
    <div class="hidden-xs pt4 sticky-bnr">
        <?php include ('./ads/300x600.php'); ?>
    </div>
</div>



