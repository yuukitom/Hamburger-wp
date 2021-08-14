<footer class="l-footer p-footer">
  <ul class="p-footer__info">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer_menu',
      )
    ); ?>
  </ul>
  <p>Copyright: <?php bloginfo("name"); ?></p>
</footer>

<?php wp_footer(); ?>
</body>

</html>