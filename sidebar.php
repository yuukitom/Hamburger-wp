<div class="l-container__right p-container__right">
  <aside class="l-aside p-aside">
    <div class="p-aside__btn"><button class="js_navBtn">×</button></div>
    <h2 class="p-aside__title">Menu</h2>

    <ul class="p-aside__mainMenu">
      <?php
      if (is_active_sidebar('menu_widget')) :
        dynamic_sidebar('menu_widget');
      else :
      ?>
        <div class="widget">
          <h2>No Widget</h2>
          <p>ウィジットは設定されていません。</p>
        </div>
      <?php endif; ?>
    </ul>
  </aside>
</div> <!-- l-container__right -->
</div> <!-- l-container -->