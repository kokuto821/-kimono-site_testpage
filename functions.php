<?php
function add_custom_post_type(){
    $args = array(
        'label' =>'会社' ,
        'hierarchical' => false,
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array('with_front' => false),//false必須
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'rest_base' => 'job',
    );
    register_post_type('job',$args);
}
add_action('init','add_custom_post_type');

function hikaku_rank_img($ranking) { if($ranking == 1) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/rank-01.png" alt="">
    <?php elseif($ranking == 2) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/rank-02.png" alt="">
    <?php elseif($ranking == 3) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/rank-03.png" alt="">
    <?php else : ?>
    <p><?php echo $ranking; ?>位</p>
    <?php endif; }

function ranking_rank_img($ranking) { if($ranking == 1) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/ranking-icon-01.png" alt="">
    <?php elseif($ranking == 2) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/ranking-icon-02.png" alt="">
    <?php elseif($ranking == 3) : ?>
    <img src="<?php bloginfo('template_url'); ?>/image/ranking-icon-03.png" alt="">
    <?php else : ?>
    <p><?php echo $ranking; ?>位</p>
    <?php endif; }

// 順位の並び替え
function custom_search_orderby($query) {
    if ($query->is_search() && !is_admin()) {
        if (isset($_GET['orderby']) && $_GET['orderby'] === 'meta_value_num') {
            $query->set('meta_key', 'ranking');
            $query->set('orderby', 'meta_value_num');
        } elseif (isset($_GET['orderby']) && $_GET['orderby'] === 'meta_value_num_desc') {
            $query->set('meta_key', 'ranking');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'DESC');
        }
    }
}

add_action('pre_get_posts', 'custom_search_orderby');
// end 順位の並び替え

function star($speed) { if($speed == 1) : ?>
    ★
    <?php elseif($speed == 2) : ?>
    ★★
    <?php elseif($speed == 3)  : ?>
    ★★★
    <?php else : ?>
      ""
    <?php endif; }
function syuttyou_f($syuttyou){if($syuttyou == 1):?>
    <span>あり</span>
    <?php elseif($syuttyou == 2):?>
    <span>なし</span>
    <?php else : ?>
    ""
    <?php endif;}