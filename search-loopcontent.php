
 <!-- 検索結果のランキングを記述 -->
 <div class="block-content">
  <div class="search_wrapper">
    <h1 class="search_job-title">
      <?php the_title(); ?>
    </h1>
      <div class="img-description_wrapper">
        <div class="img-description_flex">
        <?php if ($store_logo) : ?>
          <div class="hikaku-image__wrapper">
            <img class="logo-image" src="<?php echo $store_logo; ?>" alt="">
          </div>
        <?php endif; ?>
          <div>
            <p>
              <?php echo $ranking_description;?>
            </p>
          </div>
        </div>
      </div>
      <table class="search-table">
        <tbody>
          <tr>
            <th>着物専門</th>
            <th>買取までの速さ</th>
            <th>出張買取</th>
            <th>現金受け取り</th>
            <th>事前の電話相談</th>
          </tr>
          <tr>
            <td>
              <?php if($senmon_f == 'あり'):?>
                <span class="c-red"><?php echo($senmon) ;?></span>
              <?php elseif($senmon_f == 'なし'):?>
                <span class="c-red"><?php echo($senmon) ;?></span>
              <?php elseif($senmon_f == 0):?>
                <span class=""><?php echo($senmon) ;?></span>
              <?php else:?>
              <?php endif;?>
            </td>
            <td>
              <?php if ($sort_key === 'speed_high' || $sort_key === 'speed_low'):?>
                <span class="c-red"><?php star($speed) ;?></span>
              <?php elseif($speed_f == 1):?>
                <span class="c-red"><?php star($speed) ;?></span>
              <?php elseif($speed_f == 2):?>
                <span class="c-red"><?php star($speed) ;?></span>
              <?php elseif($speed_f == 3):?>
                <span class="c-red"><?php star($speed) ;?></span>
              <?php elseif($speed_f == 0):?>
                <span class=""><?php star($speed) ;?></span>
              <?php else:?>
              <?php endif;?>
            </td>
            <td>
              <?php if ($sort_key === 'syuttyou_high' || $sort_key === 'syuttyou_low'):?>
                <span class="c-red"><?php syuttyou_f($syuttyou) ;?></span>
              <?php elseif($syuttyou_f == '1'):?>
                <span class="c-red"><?php syuttyou_f($syuttyou) ;?></span>
              <?php elseif($syuttyou_f == '2'):?>
                <span class="c-red"><?php syuttyou_f($syuttyou) ;?></span>
              <?php elseif($syuttyou_f == '0'):?>
                <span class=""><?php syuttyou_f($syuttyou) ;?></span>
              <?php else:?>
                <span class=""><?php syuttyou_f($syuttyou) ;?></span>
              <?php endif;?>
            </td>
            <td>
              <?php if($genkin_f == 'あり'):?>
                <span class="c-red"><?php echo($genkin) ;?></span>
              <?php elseif($genkin_f == 'なし'):?>
                <span class="c-red"><?php echo($genkin) ;?></span>
              <?php elseif($genkin_f == 0):?>
                <span class=""><?php echo($genkin) ;?></span>
              <?php else:?>
              <?php endif;?>
            </td>
            <td>
              <?php if($denwa_f == 'あり'):?>
                <span class="c-red"><?php echo($denwa) ;?></span>
              <?php elseif($denwa_f == 'なし'):?>
                <span class="c-red"><?php echo($denwa) ;?></span>
              <?php elseif($denwa_f == 0):?>
                <span class=""><?php echo($denwa) ;?></span>
              <?php else:?>
              <?php endif;?>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
</div>

  <!-- / 検索結果のランキングを記述 -->
</main>
<div style="height:20px;"></div>