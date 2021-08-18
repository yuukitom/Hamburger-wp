<?php get_header(); ?>

<main>


  <?php if (have_posts()) : ?>
    <!-- 投稿データがあるかの条件分岐。-->
    <div class="l-mainvisual p-mainvisual p-mainvisual__single">
      <h1 class="p-mainvisual__title"><?php the_title(); ?></h1>
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


  <!--
  <article class="p-post">
    <h2>見出し</h2>
    <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
    <h3>見出し</h3>
    <h4>見出し</h4>
    <h5>見出し</h5>
    <h6>見出し</h6>

    <blockquote>
      <p>引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
      <cite>出典元： ○○○○○○○○○○○○</cite>
    </blockquote>

    <figure class="p-post__imageL">
      <img src="./img/cooked-foods-750073.png" alt="hamburger_image">
    </figure>

    <div class="p-post__imageText">
      <img src="./img/cooked-foods-750073-2.png" alt="hamburger_image">
      <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </p>
    </div>

    <div class="p-post__imageText">
      <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </p>
      <img src="./img/cooked-foods-750073-2.png" alt="hamburger_image">
    </div>

    <figure class="p-post__imageM">
      <img src="./img/cooked-foods-750073-2.png" alt="hamburger_image">
    </figure>

    <ul class="p-post__imageList">
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
      <li><img src="./img/cooked-foods-750073-2.png" alt="hamburger_image"></li>
    </ul>


    <ol class="p-post__menu__ol">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ol>

    <ol class="p-post__menu__ol u-pl35">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ol>

    <ol class="p-post__menu__ol">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ol>

    <ul class="p-post__menu__ul">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ul>

    <ul class="p-post__menu__ul u-pl20">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ul>

    <ul class="p-post__menu__ul">
      <li>リストリストリスト</li>
      <li>リストリストリスト</li>
    </ul>

    <pre>
<code>&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code>
            </pre>

    <table>
      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>

      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>

      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>

      <tr>
        <td>テーブル</td>
        <td>テーブル</td>
      </tr>
    </table>

    <div class="c-post__button p-post__button"><a href="#">ボタン</a></div>
-->

</main>
</div><!-- l-container__Left -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>