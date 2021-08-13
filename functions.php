<?php
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

//タイトル出力
function hamburger_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

//ファイルの読み込みに関する記述をまとめた関数
function hamburger_script()
{

    //wp_enqueue_styleやwp_enqueue_scriptはこの中で使う


    wp_enqueue_style('robot', '///fonts.gstatic.com', array());
    wp_enqueue_style('M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@500&display=swap', array());

    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/ress.css', array(), '1.0.0');
    wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . 'style.css', array(), '1.0.0');
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('js', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hamburger_script'); //上記のファイルの読み込みに関する記述をまとめた関数を、「wp_enqueue_scripts」アクションにフックさせる。


//カテゴリー説明文でHTMLタグを使えるようにする
remove_filter('pre_term_description', 'wp_filter_kses');
//pタグが付与されるのでpタグが邪魔な場合取り除く
remove_filter('term_description', 'wp_kses_data');

//カテゴリー説明文の代わりに表示するビジュアルエディターのHTML
add_filter('edit_category_form_fields', 'cat_description');
if (!function_exists('cat_description')) :
    function cat_description($tag)
    {
?>
        <table class="form-table">
            <tr class="form-field">
                <th scope="row" valign="top"><label for="description"><?php _e('Description'); ?></label></th>
                <td>
                    <?php
                    $settings = array('wpautop' => true, 'media_buttons' => true, 'quicktags' => true, 'textarea_rows' => '15', 'textarea_name' => 'description');
                    wp_editor(wp_kses_post($tag->description, ENT_QUOTES, 'UTF-8'), 'cat_description', $settings);
                    ?>
                    <br />
                    <span class="description"><?php _e('The description is not prominent by default; however, some themes may show it.'); ?></span>
                </td>
            </tr>
        </table>
        <?php
    }
endif;

//カテゴリー編集ページから「カテゴリー説明文」を取り除く
add_action('admin_head', 'remove_default_category_description');
if (!function_exists('remove_default_category_description')) :
    function remove_default_category_description()
    {
        global $current_screen;
        if ($current_screen->id == 'edit-category') {
        ?>
            <script type="text/javascript">
                jQuery(function($) {
                    $('textarea#description').closest('tr.form-field').remove();
                });
            </script>
<?php
        }
    }
endif;
//このカスタマイズは「カテゴリー編集」画面のみで適用される。「カテゴリー一覧」画面では適用されないので注意。
//参考ページ:https://nelog.jp/visual-category-description-editor

//ページネーション処理
function pagination($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"p-pagination\">";
        echo "<div class=\"p-pagination__wrapper\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        echo "<div class=\"p-pagination__pages\">"."Page ". $paged."/". $pages."</div>";
        // 「前へ」を表示
        if($paged > 1) echo "<a class=\"p-pagination__prev\" href='".get_pagenum_link($paged - 1)."'><span>前へ</span></a>";
        // ページ番号を出力
        echo "<ol class=\"p-pagination__body\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                    "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }
        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        echo "</ol>\n";
        // 「次へ」を表示
        if($paged < $pages) echo "<a class=\"p-pagination__next\" href='".get_pagenum_link($paged + 1)."'><span>次へ</span></a>";
        echo "</div>\n";
        echo "</div>\n";
    }
}
//参考ページ:https://since-inc.jp/blog/8506
//ここまでページネーション処理