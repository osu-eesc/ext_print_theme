<?php // $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $ ?>



  <div id="limiter"> <!-- adds shadow around page -->

    <div class="print-heading"><?php print $site_name; ?></div>

    <form id="send-to-printer">
      <input type="button" value="Print" onClick="window.print()" />
      <input type="button" value="Back" onClick="history.go(-1)" />
    </form>

    <div id="header">
      <div id="url-path">
        <?php
          $current_path = current_path();
          if (substr($current_path, -6) == '/print') {
            $current_path = substr($current_path, 0, -6);
          }
          print '<strong>Printed page URL:</strong> ' . $_SERVER['HTTP_HOST'] . base_path() . $current_path;
        ?>
        <hr />
      </div> <!-- /url-path -->
    </div> <!-- /header -->

    <div id="content-region" class="content-region row nested">
      <div id="content-region-inner" class="content-region-inner inner">
        <div id="content-inner" class="content-inner block">
          <div id="content-inner-inner" class="content-inner-inner inner">

            <?php if ($page['content']): ?>

              <div id="content-content" class="content-content">

                <?php print render($page['content']); ?>

                <hr class="bottom-bar" />
                <div class="footer">
                  <p>
                    <?php
                      $extension_settings = variable_get('extension_footer_settings');
                      if (!empty($extension_settings)) {
                        print $extension_settings['contact']['address'];
                      }
                      
                      /*Extension & Experiment Station Communications<br />
                      Oregon State University<br />
                      422 Kerr Admin Bldg., Corvallis, OR 97330<br />
                      541-737-2513 (toll free 800-561-6719) puborders@oregonstate.edu<br />
                      extension.oregonstate.edu/*/
                    ?>
                  </p>
                </div> <!-- /footer -->

              </div><!-- /content-content -->

            <?php endif; ?>

          </div><!-- /content-inner-inner -->
        </div><!-- /content-inner -->
      </div><!-- /content-region-inner -->
    </div><!-- /content-region -->

  </div> <!-- /limiter -->

<?php //print $closure; ?>
