<div class="top70">
  <div class="top50">
    <style type="text/css">
    #footer-wrapper {
      margin-top: -70px;
    }
    </style>
    <div id="footer-wrapper">
      <div id="footer-top-wrapper">
        <div class="container">
          <div class="row" id="footer-top">
            <!-- CTA start-->
            <div class="cta-wrapper-footer span12">
              <div class="cta-container-footer" style="width: auto;">
                <a href="/company/"><?php _e("About","outsystems_blog");?></a>
                <a href="/company/events/"><?php _e("Events","outsystems_blog");?></a>
                <a href="/it-resources/"><?php _e("Resources","outsystems_blog");?></a>
                <a href="/community/"><?php _e("Community","outsystems_blog");?></a>
              </div>
            </div>
            <!-- CTA end-->
          </div>
        </div>
      </div>

      <div id="footer-mid-wrapper">
        <div class="container">
          <div class="row us" id="footer-mid">
            <ul class="footer-nav span12">
              <li>
                <div class="contact-us-title" style="line-height: 10px;">
                  <span style="display: inline-block;margin-right: 20px;">OutSystems&nbsp;</span>
                  <span class="contact-us-more" style="display: inline-block;">
                    <a href="/company/contact-us/" style=" width: auto;"><?php _e("more offices","outsystems_blog");?> »</a>
                  </span>
                </div>
                <div class="contact-us-address" style="margin-bottom: 20px;">
                  <span style="float: left;display: inline-block;color: white;line-height: 30px;"><?php _e("Atlanta","outsystems_blog");?></span>
                  <a href="tel:<?php _e("+14047195100","outsystems_blog");?>" style="float: right;background-color: #606060;border-radius: 5px;padding: 5px 14px;color: white;text-shadow: none;font-size: 17px;font-weight: 300;">
                    <span class="osicon-telephone">&nbsp;</span><?php _e("+1 404 719 5100","outsystems_blog");?></a>
                    <div class="clearfix">
                      &nbsp;
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="footer-bottom-wrapper">
          <div class="container">
            <div class="row" id="footer-bottom">
              <div class="legal span12 align-center">
                <p>
                  <?php _e("Built with the","outsystems_blog");?>&nbsp;<a class="footer-op-link" href="/platform/?ref=f">OutSystems Platform</a><br>
                </p>
                <ul>
                  <li><a href="/legal/terms-of-use/" title="Terms &amp; Conditions"><?php _e("Terms &amp; Conditions","outsystems_blog");?></a></li>
                  <li><a href="/legal/terms-of-use/privacy-statement/#7"><?php _e("About Cookies","outsystems_blog");?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
      osjs(function() {
        osjs('#footer-mid').addClass('us');
      });
      </script>

    </div>
    <div>

    </div>
    <div class="search-overlay">
      <div class="mobile-search-bar">
        <div class="mobile-search-input">

          <form name="WebForm1" method="post" action="/blog/wp-content/plugins/kwordpress-mkto/k-wordpress-search-redirect.php" id="WebForm1">
            <input class="search inpt-search-mobile" name="SearchQuery" id="SearchQuery" type="search" maxlength="256" size="30" placeholder="<?php _e("Search","outsystems_blog");?>" />
            <input class="button" type="submit" name="submit-search" id="submit-search" value=" " style="display:none;" />
          </form>

          <script>
          $( function () {
            $('#SearchQuery').keyup(function(e){
              if(e.keyCode == 13)
              {
                $('#submit-search').click();
              }
            });
          });
          </script>

        </div>
        <div class="mobile-search-cancel">
          <a id="wt4_wtfooter_wt5_wt2_wt5_wt9" href="#"><?php _e("Cancel","outsystems_blog");?></a>
        </div>
      </div>
      <div class="mobile-search-body-overlay"></div>
    </div>
    <div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>