<?php get_header(); ?>

<div class="l-mainvisual p-mainvisual p-mainvisual__archive">
  <div class="p-mainvisual__archiveBack">
    <h1 class="p-mainvisual__title">Search:</h1>
    <p class="p-mainvisual__subTitle"><?php the_search_query(); ?></p>
  </div>
</div>

<main>
  <article>
    <section class="p-main__desc">
      <h2 class="p-main__descTitle">小見出しが入ります</h2>
      <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </section>

    <div>
      <?php if (have_posts()) : ?>
        <!-- 投稿データがあるかの条件分岐。-->
        <?php
        if (isset($_GET['s']) && empty($_GET['s'])) {
          echo "<p class='p-search__result'>" . '検索キーワード未入力' . "</p>"; // 検索キーワードが未入力の場合のテキストを指定
        } else {
          echo "<p class='p-search__result'>" . '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件' . "</p>"; // 検索キーワードと該当件数を表示
        }
        ?>

        <?php while (have_posts()) : the_post(); ?>
          <!-- 表示する投稿データがあれば繰り返し処理開始-->
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
        <p class="c-menuCard__none"><?php echo '“' . $_GET['s'] . '”にマッチする記事はありませんでした。' ?></p>
      <?php endif; ?>

    </div>
  </article>

  <!-- ページネーション処理 --> 
  <?php
  if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
    pagination();
  } ?>

</main>


</div><!-- l-container__Left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>