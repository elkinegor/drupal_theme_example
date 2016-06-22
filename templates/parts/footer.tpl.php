 <div id="footer-wrapper"><div class="section">
    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    	
	<div id="footer" class="clearfix">
	    <?php if ($page['footer']): ?>
	        <?php print render($page['footer']); ?>
	    <?php endif; ?>
	    <div class="footer-logos">
		    <div class="powered">
			    <div class="label">Powered by</div>
			    <div class="sw-logo"></div>	
		    </div>
		    <div class="family">
			    <div class="label">Our Family</div>
			    <div class="wrapper">
				    <div class="hp-logo"></div>	
				    <div class="recon-logo"></div>
			    </div>
		    </div>	
	    </div>	
	    <div class="copyright">&copy; SchwartzWilliams 2015. All rights reserved</div>	
    </div> <!-- /#footer -->

  </div></div> <!-- /.section, /#footer-wrapper -->

