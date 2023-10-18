<footer>
  <div id="footer">
    <div class="row">
      <div class ="col-sm-6">
      <p>Copyright &copy; 2023</p>
      </div>
      <div class="col-sm-6">
        <p>MyTheme</p>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-6">
		  <?php wp_nav_menu(array('theme_location' => 'footer-menu-left')); ?>
</div>
<div class="col-sm-6">
        <?php wp_nav_menu(array('theme_location' => 'footer-menu-right')); ?>
        </div>
</div>
    </div>
      <?php wp_footer(); ?>
    </footer>
    
  </body>
</html>