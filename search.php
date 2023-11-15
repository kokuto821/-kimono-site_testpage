<?php
$s = $_GET['s'];
$senmon_f = $_GET['senmon'];
$speed_f = $_GET['speed'];
$syuttyou_f = $_GET['syuttyou'];
$genkin_f = $_GET['genkin'];
$denwa_f = $_GET['denwa'];

$metaquerysp = [];
$query_vars = ['s', 'senmon', 'speed', 'syuttyou', 'genkin', 'denwa'];

foreach ($query_vars as $var) {
  if (isset($_GET[$var]) && !empty($_GET[$var])) {
    $metaquerysp[] = [
      'key' => $var,
      'value' => $_GET[$var],
      'compare' => 'LIKE',
    ];
  }
}

$metaquerysp['relation'] = 'AND';

if (isset($metaquerysp[1]) && isset($metaquerysp[1]['value'])) {
  $secondValue = $metaquerysp[1]['value'];
  // $secondValue に2番目の要素の 'value' キーの値が格納されます
} else {
  // 2番目の要素が存在しないか、'value' キーが存在しない場合の処理
}



$sort_key = isset($_GET['c_key']) ? $_GET['c_key'] : 'ranking';
$sort_order = isset($_GET['c_o']) ? $_GET['c_o'] : 'ASC';

$args = [
  'posts_per_page' => -1,
  'post_type' => 'job', // 投稿タイプ名を入力
  'meta_key' => $sort_key,
  'post_status' => 'publish',
  's' => $_GET['s'],
  'order' => $sort_order,
  'orderby' => 'meta_value_num',
  'meta_query' => $metaquerysp,
];

// カスタムフィールドのランキングを考慮して orderby を設定
if ($sort_key === 'ranking_high') {
  $args['meta_key'] = 'ranking';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'ASC'; // ランキングが高い順
} elseif ($sort_key === 'ranking_low') {
  $args['meta_key'] = 'ranking';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'DESC'; // ランキングが低い順
}elseif ($sort_key === 'speed_high') {
  $args['meta_key'] = 'speed';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'DESC'; // 速さが速い順
} elseif ($sort_key === 'speed_low') {
  $args['meta_key'] = 'speed';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'ASC'; // 速さが遅い順
} elseif ($sort_key === 'syuttyou_high') {
  $args['meta_key'] = 'syuttyou';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'ASC'; // 出張買取ある順（降順）
} elseif ($sort_key === 'syuttyou_low') {
  $args['meta_key'] = 'syuttyou';
  $args['orderby'] = 'meta_value_num';
  $args['order'] = 'DESC'; // 出張買取ない順（昇順）
}

$the_query = new WP_Query($args);
$get_num = $the_query->post_count;
?>

<?php get_header(); ?>
<div style="height:2px;"></div>
<?php get_search_form(); ?>
<div class="content__white_wrapper">
  <div class="search_wrapper">
  <p><span>検索結果</span><span class="c-result__text"><?php echo $get_num; ?>件</span></p>
    <section>
      <?php if(!empty($senmon_f)):?>
        <span>買取専門：<span class="c-red"><?php echo $senmon_f;?></span></span>
      <?php else:?>
        <span>買取専門：---</span>
      <?php endif;?>
      <?php if(!empty($speed_f)):?>
        <?php if($speed_f == 1):?>
        <span>買取までの速さ：<span class="c-red">★</span></span>
        <?php elseif($speed_f == 2):?>
        <span>買取までの速さ：<span class="c-red">★★</span></span>
        <?php elseif($speed_f == 3):?>
        <span>買取までの速さ：<span class="c-red">★★★</span></span>
        <?php endif ;?>
      <?php else :?>
      <span>買取までの速さ：---</span>
      <?php endif;?>
      <?php if(!empty($syuttyou_f)):?>
        <span>出張買取：<span class="c-red"><?php syuttyou_f($syuttyou_f) ;?></span></span>
        <?php else:?>
        <span>出張買取：---</span>
      <?php endif;?>
      <?php if(!empty($genkin_f)):?>
        <span>現金受け取り：<span class="c-red"><?php echo $genkin_f;?></span></span>
      <?php else:?>
        <span>現金受け取り：---</span>
      <?php endif;?>
      <?php if(!empty($denwa_f)):?>
        <span>事前の電話相談：<span class="c-red"><?php echo $denwa_f ;?></span></span>
      <?php else:?>
        <span>事前の電話相談：---</span>
      <?php endif;?>
    </section>

    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <label for="c_key">並び替え：</label>
    <select name="c_key" id="c_key">
      <option value="ranking">並び替えを選択</option>
      <option value="ranking_high">評価が高い順</option>
      <option value="ranking_low">評価が低い順</option>
      <option value="speed_high">買取り速い順</option>
      <option value="speed_low">買取り遅い順</option>
      <option value="syuttyou_high">出張買取ある順</option>
      <option value="syuttyou_low">出張買取ない順</option>
    </select>
    <input type="hidden" name="s" value="<?php echo esc_attr(get_search_query()); ?>">
    <input type="submit" value="並び替え">
    </form>
  </div>
</div>
  <?php
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
          //field_group
          require('custom-fields.php');
  ?>
<!-- ループ内の記述 -->
<?php require('search-loopcontent.php');?>
<!-- /ループ内の記述 -->

<?php endwhile;endif;wp_reset_postdata(); ?>
<?php get_footer(); ?>