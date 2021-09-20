<?php get_header(); ?>

<main>


  <?php if (have_posts()) : ?>
    <!-- 投稿データがあるかの条件分岐。-->
    <div class="l-mainvisual p-mainvisual p-mainvisual__single">
      <h1 class="p-mainvisual__title p-mainvisual__title--highlight"><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
    </div>

    <article>
      <?php while (have_posts()) : the_post(); ?>
        <!-- 表示する投稿データがあれば繰り返し処理開始 -->
        <!-- 次の投稿データを表示 -->

        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <!-- 投稿IDの取得表示 -->　
          <!-- 投稿のclassを取得表示 -->
          <div class="p-post">
            <p class="p-tag">
              <?php the_tags('<span><i class="fa fa-tags" aria-hidden="true"></i></span>', ' , '); ?>
            </p>
            <?php the_content(); ?>
            <?php $args = array(
              'before' => '<div class="p-page_link">',
              'after' => '</div>',
              'link_before' => '<span>',
              'link_after' => '</span>',
            );
            wp_link_pages($args);
            ?>
          </div>
        </section>

      <?php endwhile; ?>
    </article>
  <?php else : ?>
    <!-- 投稿データが一件もなかった時の処理 -->
    <p class="c-menuCard__none">記事が見つかりませんでした。</p>
  <?php endif; ?>

</main>
</div><!-- l-container__Left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>