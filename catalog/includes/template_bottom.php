<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>
            </div>
          </div>
          <div id="content_box_top"></div>
        </div>
      </div>
      <div id="main_image">
        <div id="website_name"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>'; ?></div>
      </div>
    </div>
    <div id="left_shadow"></div>
    <div id="right_shadow"></div>
  </div>
</div>
<div id="bottom_stripe">
  <div id="content_box_bottom_wrapper">
    <div id="content_box_bottom"></div>
  </div>
</div>
<div id="footer">
  <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
  <br/><br/><a style="font-size: 11px;" href="http://www.websitehelpfromzach.com/" target="_blank" title="Website Help">Website Help</a>
</div>

<?php echo $oscTemplate->getBlocks('footer_scripts'); ?>

</body>
</html>