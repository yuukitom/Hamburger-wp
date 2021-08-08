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
      </section>
    <?php endif; ?>

    <div>
      
      <?php if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="p-main__menu">
              <div class="c-menuCard p-menuCard">
                <?php the_post_thumbnail(); ?>
                <div class="c-menuCard__text p-menuCard__text">
                  <h1><?php the_title(); ?></h1>
                  <div class="c-menuCard__desc p-menuCard__desc">
                    <?php the_excerpt(); ?>
                  </div>
                  <p class="c-menuCard__button p-menuCard__button"><a href="<?php the_permalink($post); ?>">詳しく見る</a></p>
                </div>
              </div>
            </section>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="c-menuCard__none">記事が見つかりませんでした。</p>
      <?php endif; ?>

    </div>
  </article>
</main>

<!--
<main>
  <article>
    <section class="p-main__desc">
      <h2 class="p-main__descTitle">小見出しが入ります</h2>
      <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </section>

    <div>
      <section class="p-main__menu">
        <div class="c-menuCard p-menuCard">
          <img src="img/archive_card.jpg" alt="menuCard">
          <div class="c-menuCard__text p-menuCard__text">
            <h1>チーズバーガー</h1>
            <div class="c-menuCard__desc p-menuCard__desc">
              <h2>小見出しが入ります</h2>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <p class="c-menuCard__button p-menuCard__button"><a href="#">詳しく見る</a></p>
          </div>
        </div>

        <div class="c-menuCard p-menuCard">
          <img src="img/archive_card.jpg" alt="menuCard">
          <div class="c-menuCard__text p-menuCard__text">
            <h1>チーズバーガー</h1>
            <div class="c-menuCard__desc p-menuCard__desc">
              <h2>小見出しが入ります</h2>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <p class="c-menuCard__button p-menuCard__button"><a href="#">詳しく見る</a></p>
          </div>
        </div>

        <div class="c-menuCard p-menuCard">
          <img src="img/archive_card.jpg" alt="menuCard">
          <div class="c-menuCard__text p-menuCard__text">
            <h1>チーズバーガー</h1>
            <div class="c-menuCard__desc p-menuCard__desc">
              <h2>小見出しが入ります</h2>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <p class="c-menuCard__button p-menuCard__button"><a href="#">詳しく見る</a></p>
          </div>
        </div>
      </section>
    </div>
  </article>
</main>
-->

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

</div><!-- l-container__Left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>