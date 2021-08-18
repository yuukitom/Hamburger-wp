<?php get_header(); ?>

<div class="l-mainvisual p-mainvisual p-mainvisual__archive">
  <div class="p-mainvisual__archiveBack">
    <h1 class="p-mainvisual__title">Menu:</h1>
    <p class="p-mainvisual__subTitle"><?php single_cat_title(); ?></p>
  </div>
</div>

<main>
  <article>
    <!-- カテゴリの説明文 -->
    <?php if (
      is_category() && //カテゴリページの時
      !is_paged() &&   //カテゴリページのトップの時
      category_description()
    ) : //カテゴリの説明文が空でない時 
    ?>
      <section class="p-main__desc">
        <?php echo category_description(); ?>
        <!-- カテゴリの説明文を表示 -->
      </section>
    <?php endif; ?>

    <div>

      <?php if (have_posts()) : //投稿データがあるかの条件分岐。
        while (have_posts()) : //表示する投稿データがあれば繰り返し処理開始
          the_post(); ?>
          <!-- 次の投稿データを表示 -->
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- 投稿IDの取得表示 -->　
            <!-- 投稿のclassを取得表示 -->
            <section class="p-main__menu">
              <div class="c-menuCard p-menuCard">
                <?php the_post_thumbnail(); ?>
                <!-- 投稿のアイキャッチ画像を取得表示 -->
                <div class="c-menuCard__text p-menuCard__text">
                  <h1><?php the_title('■'); ?></h1><!-- 投稿のタイトルを取得表示 -->
                  <div class="c-menuCard__desc p-menuCard__desc">
                    <?php the_excerpt(); ?>
                    <!-- 投稿の抜粋を取得表示 -->
                  </div>
                  <p class="c-menuCard__button p-menuCard__button">
                    <a href="<?php the_permalink($post); ?>">詳しく見る</a>
                    <!-- 投稿のURLを取得表示 -->
                  </p>
                </div>
              </div>
            </section>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <!-- 投稿データが一件もなかった時の処理 -->
        <p class="c-menuCard__none">記事が見つかりませんでした。</p>
      <?php endif; ?>

    </div>
  </article>

  <!-- ページネーション処理 -->
  <?php
  if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
    pagination();
  } ?>

  <!--  htmlの時のコード（※ページネーション機能がうまくいったら削除）
  <div class="p-pagination">
    <div class="p-pagination__wrapper">
      <span class="p-pagination__pages">page 1/10</span>
      <a href="#" class="p-pagination__prev"><span>前へ</span></a>
      <a href="#" class="p-pagination__num current">1</a>
      <a href="#" class="p-pagination__num">2</a>
      <a href="#" class="p-pagination__num">3</a>
      <a href="#" class="p-pagination__num">4</a>
      <a href="#" class="p-pagination__num">5</a>
      <a href="#" class="p-pagination__num">6</a>
      <a href="#" class="p-pagination__num">7</a>
      <a href="#" class="p-pagination__num">8</a>
      <a href="#" class="p-pagination__num">9</a>
      <a href="#" class="p-pagination__next"><span>次へ</span></a>
    </div>
  </div>
      -->

</main>

</div><!-- l-container__Left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>