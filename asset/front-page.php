
<?php get_header(); ?>


           
                <header class="block-header-image"><img
                        src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/fv/kaitori-fv-new-sp-4.jpg"
                        alt=""></header>
                <div class="block-button">
                <a href="#1">
                    <div class="block-button__item flex-column">
                        <h2 class="mid-txt">さっそくNo.1の着物をチェック</h2><span class="block-button__icon"><img src="<?php bloginfo('template_url'); ?>/image/Polygon 1.png" alt=""></span>
                    </div>
                    </a>
                </div>

                <?php get_search_form(); ?>
                
                
                <section class="block-sections__section n1">
                    <div class="block-title">
                        <div class="block-midashi_background-image">
                            <h2 class="block-midashi mid-txt">
                                <span class="block-title__icon"><img src="<?php bloginfo('template_url'); ?>/image/h1before 1.png" alt=""></span>
                                着物を高く買い取ってもらう秘訣は？
                            </h2>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>インターネットや電話申込だけで、自宅まで来て査定してくれる出張買取がおすすめです！<br><br>

                            質屋やリサイクル店など、買取場所は沢山ありますが、着物の価値が分からない業者に依頼すると、安く買い叩かれてしまうため、専門業者に依頼しないと大損する可能性が高くなります。<br><br>
                            
                            そこで当サイトは正確に着物を査定してくれる【優良買取店】のみを厳選！ 実際に高値売却に成功した方の口コミや独自調査をご紹介いたします。<br><br>
                            
                            ちなみに、今回1位で紹介する業者では、「リユース着物の目利き」がしっかり査定。査定スタッフのスキルが高く正確に着物の価値を判断しています。 実際こんな高額買取事例が！
                        </p>
                        <div class="content-image">
                            <img src="https://買取王国.com/wp-content/uploads/2023/04/rankimg-gold.png" alt="">
                        </div>
                    </div>
                </section>
                <section class="block-sections__section n2">
                    <div class="block-title" id="1">
                        <div class="block-midashi_background-image">
                            <h2 class="block-midashi mid-txt">
                                <span class="block-title__icon"><img src="<?php bloginfo('template_url'); ?>/image/h1before 1.png" alt=""></span>
                                高額買取の着物専門業者3選
                            </h2>
                        </div>
                    </div>
                    <div class="block-table">
                        <table class="block-table__inner">
                            <tbody>
                                <tr>
                                    <th class="first-block fixed01"></th>
                                    <th class="fixed01"><h2 class="small-txt">店舗</h2></th>
                                    <th><h2 class="small-txt">実績</h2></th>
                                    <th><h2 class="small-txt">キャンペーン</h2></th>
                                    <th><h2 class="small-txt">専門性</h2></th>
                                    <th><h2 class="small-txt">買取店舗数</h2></th>
                                    <th><h2 class="small-txt">査定員</h2></th>
                                    <th><h2 class="small-txt">全国対応</h2></th>
                                    <th><h2 class="small-txt">現金即払い</h2></th>
                                    <th><h2 class="small-txt">口コミ</h2></th>
                                    <th><h2 class="small-txt">ポイント</h2></th>
                                    <th><h2 class="small-txt">公式サイト</h2></th>
                                </tr>
                                <?php
                                //$argsのプロパティを変えていく
                                $args = array(
                                    'post_type' => 'job',
                                    'posts_per_page' => -1,
                                    'orderby' => 'meta_value_num',
                                    'order' => 'asc',
                                    'post_status' => 'publish',
                                    'meta_key' => 'ranking',
                                );

                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        /* ループ内の記述 */
                                        //field_group
                                        $ranking = get_field('ranking');
                                        $store_logo = get_field('store_logo');
                                        $store_link = get_field('store_link');
                                        $jisseki_kigou = get_field('jisseki_kigou');
                                        $jisseki_text = get_field('jisseki_text');
                                        $senmonsei_kigou = get_field('senmonsei_kigou');
                                        $senmonsei_text = get_field('senmonsei_text');
                                        $kaitoritenpo_kigou = get_field('kaitoritenpo_kigou');
                                        $kaitoritenpo_text = get_field('kaitoritenpo_text');
                                        $shinsain_kigou = get_field('shinsain_kigou');
                                        $shinsain_text = get_field('shinsain_text');
                                        $zenkokitaiou_kigou = get_field('zenkokitaiou_kigou');
                                        $zenkokitaiou_text = get_field('zenkokitaiou_text');
                                        $genkinsokubarai_kigou = get_field('genkinsokubarai_kigou');
                                        $genkinsokubarai_text = get_field('genkinsokubarai_text');
                                        $kuchikomi_kigou = get_field('kuchikomi_kigou');
                                        $kuchikomi_text = get_field('kuchikomi_text');
                                        $hikaku_point_kigou = get_field('hikaku_point_kigou');
                                        $hikaku_point_text = get_field('hikaku_point_text');
                                        $store_name = get_field('store_name');
                                        $campaign_img = get_field('campaign_img');
                                        $campaign_red_text = get_field('campaign_red_text');
                                ?>
                                <tr>
                                    <td class="first-block fixed01"><div class="hikaku-image__wrapper--first"><?php hikaku_rank_img($ranking);?></div></td>
                                    <td class="fixed01"><div class="hikaku-image__wrapper"><img class="logo-image" src="<?php echo $store_logo; ?>" alt=""></div><div class="block-table__link"><a href="<?php echo $store_link;?>" class="small-txt"><?php echo $store_name;?></a></div></td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                        <div class="maru-image__wrapper"><img src="<?php echo $jisseki_kigou;?>" alt=""></div>
                                        <p class="small-txt bold"><?php echo $jisseki_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="hikaku-image__wrapper"><img class="cam-image" src="<?php echo $campaign_img; ?>" alt=""></div>
                                        <div class="block-table__link"><a href="<?php echo $store_link;?>" class="small-txt"><?php echo $store_name;?></a></div>
                                        <div class="campaign__red-text_wrapper"><p class="c-red small-txt"><?php echo $campaign_red_text ;?></p></div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $senmonsei_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $senmonsei_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $kaitoritenpo_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $kaitoritenpo_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $shinsain_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $shinsain_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $zenkokitaiou_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $zenkokitaiou_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $genkinsokubarai_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $genkinsokubarai_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $kuchikomi_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $kuchikomi_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="kigou-text__wrapper">
                                            <div class="maru-image__wrapper">
                                                <img src="<?php echo $hikaku_point_kigou;?>" alt="">
                                            </div>
                                            <p class="small-txt bold"><?php echo $hikaku_point_text; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="koushiki-site__btn_wrapper">
                                    <a href="<?php echo $product_link ;?>">
                                        <div class="kousiki-site__btn_block">
                                            <h2 class="small-txt">公式サイトはこちら</h2>
                                        </div>
                                    </a>
                                    </div>
                                    </td>
                                </tr>
                                <?php endwhile;
							endif;
							wp_reset_postdata(); ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="block-sections__section n3">
                    <div class="block-title">
                        <div class="block-midashi_background-image">
                            <h2 class="block-midashi mid-txt">
                                <span class="block-title__icon"><img src="<?php bloginfo('template_url'); ?>/image/h1before 1.png" alt=""></span>
                                なぜ出張サービスをおすすめするのか
                            </h2>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>
                        出張買取サービス以外にも着物を売る方法はたくさんありますが、当サイトの調査結果では、数ある買取業者の中には悪質な業者が存在します。 <br><br>質屋やリサイクル店、ネットオークションでは相場より相当安い値段でしか着物を売ることができないようです。 <br><br>その理由を以下で詳しく説明しますね。
                        </p>
                        <h2 class="text-subtitle mid-txt2">複数の着物をまとめた金額でしか買い取ってくれない</h2>
                        <p>ひとつひとつの着物を丁寧に査定をせずに金額を提示するため、本当なら価値あるはずの着物をやすく買い叩かれてしまいます。
                            <br><br>
                           当サイトが調査したところ「数着の着物を売ったのに、実際の査定は相場の半分以下の金額だった」などの口コミをたくさんみかけました。</p>
                           <div class="content-image_n02"><img src="https://買取王国.com/wp-content/uploads/2021/03/sozai01-300x218.jpg" alt=""></div>
                           <h2 class="text-subtitle mid-txt2">オンライン査定した金額と実際の査定金額がまったく違う</h2>
                           <p>「郵送で送るだけで手軽に買取可能！」とうたっている業者に多いのですが、<br><br>

                            最初のオンライン査定では納得のいく金額だったはずなのに、何かと理由を付けて安い買取金額を提示する業者があります。<br><br>

                            着物を返してもらうには送料に加えて手数料という名目で高額な料金を請求されてしまう事も。<br><br>

                            「送料と手数料がかかるくらいなら安くても売るしかない…」と思わせる事により安い金額で着物を買取する悪質な方法をとる業者がたくさんあります。
                           </p>
                           <div class="content-image_n02"><img src="https://買取王国.com/wp-content/uploads/2021/04/sozai02.jpg" alt=""></div>
                           <p>・着物の価値を理解していないリサイクル店、質屋を利用する そもそも着物の価値を理解していないので相場よりもはるかに安い料金を提示されてしまう事がほとんど。</p>
                           <h2 class="text-subtitle mid-txt2">オークションサイトで販売する</h2>
                           <p>オークションサイトにはあなたが売りたい着物の他にも、たくさんの着物が出品されているため思うように売る事ができません。。<br><br>

                            オークションが終了するまでにたくさんの問い合わせに答えたり、オークション終了後の料金の支払いや郵送の手間などを考えるととてもではありませんが、<br><br>

                            手軽に着物を売れるとは言えませんし、納得のいく価格で着物を売るどころか相場よりも安く売らざるをえない事も多くあります。<br><br><br>

                            ↑の事を考えると大切にしていた着物を、質屋やリサイクル店、ネットオークションで売るのはもったいないし、 何かのトラブルに巻き込まれるのは怖いですよね。<br><br>

                            だから着物を売るなら出張買取サービスを利用するのが一番なんです！<br><br><br>
                            ベスト３に選ばれた業者は全て出張買取を無料で行ってくれる事、信頼性も高く「あなたが納得いく価格で着物を買取してくれる」業者です。<br><br>

                            ネット検索で調べてみるとたくさんの着物の出張買取業者が見つかるのですが、<br><br>

                            買取査定を依頼するには出張料金がかかったり、出張してもらうためにはややこしい条件があったり、中には相場よりはるかに低い値段で着物を買い取ろうとしてくる業者があります。<br><br>

                            「ずっと大切にしてきた着物なのだから納得いく形で売りたい」と誰もが思うはず。<br><br>
                            </p>
                    </div>
                </section>
                <section class="block-sections__section n4">
                    <span class="block-five-point"><img src="https://買取王国.com/wp-content/themes/kaitori/img/section05_title.png" alt=""></span>
                    <span>&nbsp;</span>
                    <div class="block-content">
                    <h2 class="text-subtitle mid-txt2">着物専門の買取業社ではないため納得のいく価格を提示してもらえない</h2>
                    <p>リサイクル店、質屋、ネットオークションでは着物の知識がない人が値段を決めるため、あなたが納得できる価格を提示してもらえません。<br><br>

                        専門知識を持たない人が出張買取に来る業者は絶対に選ぶべきではありません。<br><br>

                        <a href="">⇒専門知識がある査定員が着物の査定を行ってくれる業者を選ぶ</a><br><br>
                    </p>
                    <h2 class="text-subtitle mid-txt2">出張買取サービスに出張料金や買取手数料を取られる</h2>
                    <p>
                    探せば出張のための交通費や手数料など一切不要、完全無料で出張買取をしてくれる業者を探さなければいけない<br><br>


                        <a href="">⇒出張料金や手数料が無料の業者を探す</a><br><br>
                    </p>
                    <h2 class="text-subtitle mid-txt2">まとまった数の着物がなければ出張に来てもらえない</h2>
                    <p>着物をまとめて売らなければ出張査定に来てもらえない業者がたくさんあります。<br><br>

                        しかも着物をひとつひとつ丁寧に査定するのではなく、「全部まとめていくらです」と納得のいかない価格でしか買い取ってもらえない事も…。<br><br>

                        査定の結果、もし着物を売らない場合、出張料金を支払うのは絶対にいやですよね。
                    <br><br>
                        <a href="">⇒着物1枚からでも出張買取をしてくれる業者を探す</a><br><br>
                    </p>
                    <h2 class="text-subtitle mid-txt2">証紙がない着物、少しでもシミや汚れ、色あせている着物は買い取ってもらえない</h2>
                    <p>通常の買取業者では、証紙がない着物には値段が付けづらいため買取を拒否されることがほとんど。

                    <br><br>着物の修復が必要になってしまうため、少しでもシミや汚れ、色あせているなど、ボロボロになった着物は買い取ってもらえません。

                    <br><br>もしくは相場よりも圧倒的に安い金額を提示されてしまう事がほとんど。

                    <br><br>買い取ってもらえない着物のために高い出張料金を取られるかも知れないと思うと、出張の依頼をするのが怖くなってきますよね…。
                    <br><br>
                        <a href="">⇒汚れていてボロくなってしまった着物でも買取してくれる業者を探す</a><br><br>
                    </p>
                    <h2 class="text-subtitle mid-txt2">着物を売った後、クーリングオフ（全額返金）に対応しているか</h2>
                    <p>着物を売ってから8日間であればどんな理由でも、返金をすれば着物を返してもらうことができます。<br><br>

                        悪質な業者はあの手この手でクーリングオフを拒否しようとしますので要注意。<br><br>

                        またクーリングオフは訪問買取でしか使うことができない制度なので、宅配買取では一切のクーリングオフに対応してもらえないので気を付けてください。
                    <br><br>
                        <a href="">⇒誠意を持ってクーリングオフに対応してもらえる業者を探す</a>
                    </p>
                    <div class="block-content__quote">
                        <p>※特定商取引法（第58条の14）クーリング・オフ制度とは 訪問購入に係る売買契約の申し込みや締結が行われた場合であっても、 法定書面を受領した日から起算して８日以内であれば、当該売主たる消費者（申込者等）は書面により申込みの撤回や契約の解除ができるという制度です。</p>
                    </div>
                    </div>
                    <span>&nbsp;</span>
                    <div class="block-content">
                    <p>５つのポイントをもとにして着物の買取業者を探せば、あなたが納得できる価格で着物を買い取ってもらえます。<br><br>

                    ただ星の数ほどある着物買取業者の中から、あなたが満足する業者を見つけるにはたくさんの時間がかかりますし、<br><br>

                    あなた一人では買取業者がほんとうに信用できる業者かどうか見抜くことはできないでしょう。<br><br>

                    あなたが苦労して着物買取業者を探さなくて済むよう、当サイトが実際に着物買取業者を利用されたことがある6000人以上の方にアンケートを実施しました。<br><br>

                    アンケートによって全ての項目を満たした業者の中から満足度の高かった着物買取業者を選定。
                    </p>
                    <div class="block-content__quote">
                    <ul>
                        <li>出張料金は一切かからない</li>
                        <li>着物の専門知識を持ったプロが査定</li>
                        <li>他社では断られてしまうボロボロになった古い着物でも買取可能</li>
                        <li>その場で現金を受け取れる</li>
                        <li>しっかりとクーリングオフに対応してもらえる</li>
                    </ul>
                    </div>
                    <p>その業者の中から上記を満たした上でもっとも満足度の高かった着物買取業者を3社紹介します。</p>
                    </div>
                    <br><br><br>
                    <div class="block-arrow scroll_up">
                        <div class="block-arrow__item">
                            <img src="https://買取王国.com/wp-content/themes/kaitori/img/arrow.png" alt="">
                        </div>
                    </div>
                </section>
                <section class="block-sections__section n5">
                <?php
                    //$argsのプロパティを変えていく
                    $args = array(
                        'post_type' => 'job',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'asc',
                        'post_status' => 'publish',
                        'meta_key' => 'ranking',
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                            /* ループ内の記述 */
                            //field_group
                            $ranking = get_field('ranking');
                            $store_name = get_field('store_name');
                            $ranking_point1 = get_field('ranking_point1');
                            $ranking_point2 = get_field('ranking_point2');
                            $ranking_point3 = get_field('ranking_point3');
                            $ranking_point4 = get_field('ranking_point4');
                            $ranking_point5 = get_field('ranking_point5');
                            $sugoi_point1 = get_field('sugoi_point1');
                            $sugoi_point2 = get_field('sugoi_point2');
                            $sugoi_point3 = get_field('sugoi_point3');
                            $sugoi_point4 = get_field('sugoi_point4');
                            $sugoi_point5 = get_field('sugoi_point5');
                            $ranking_description = get_field('ranking_description');
                            $ranking_image_frame = get_field('ranking_image_frame');
                            $ranking_kaitori_image = get_field('ranking_kaitori_image');
                    ?>
                    <div class="ranking-yellow__background">
                        <div class="block-ranking__content">
                            <div class="ranking-header"><?php ranking_rank_img($ranking);?><h2 class="mid-txt"><?php echo $store_name;?></h2></div>
                            <div class="ranking-content__wrapper">
                                <div class="ranking-flex__wrapper">
                                    <div class="ranking-image__frame">
                                        <img src="<?php echo $ranking_image_frame ; ?>" alt="">
                                    </div>
                                    <div class="ranking-point__frame">
                                        <div class="ranking-point__header"><h2 class="mid-txt">POINT</h2></div>
                                        <ul>
                                            <?php echo $ranking_point1;?>
                                            <?php echo $ranking_point2;?>
                                            <?php echo $ranking_point3;?>
                                            <?php echo $ranking_point4;?>
                                            <?php echo $ranking_point5;?>
                                        </ul>
                                    </div>
                                </div>
                                <?php if(get_post_meta($post->ID,'ranking',true) == 1):?>
                                <div class="ranking-title__wrapper">
                                    <div class="red-title__block">
                                        <h2><?php echo $store_name;?>のここがすごい！</h2>
                                    </div>
                                </div>
                                <div class="block-ranking__inner">
                                    <p><?php echo $sugoi_point1;?></p>
                                    <p><?php echo $sugoi_point2;?></p>
                                    <p><?php echo $sugoi_point3;?></p>
                                    <p><?php echo $sugoi_point4;?></p>
                                    <p><?php echo $sugoi_point5;?></p>
                                </div>
                                <?php endif; ?>
                                <div class="ranking-table__wrapper">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th><p class="mid-txt">着物買取の専門性</p></th>
                                                <th><p class="mid-txt">買取の早さ</p></th>
                                                <th><p class="mid-txt">出張買取の対応</p></th>
                                            </tr>
                                            <tr>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                            </tr>
                                            <tr>
                                                <th><p class="mid-txt">対応エリア</p></th>
                                                <th><p class="mid-txt">現金の受け取り</p></th>
                                                <th><p class="mid-txt">事前の電話相談</p></th>
                                            </tr>
                                            <tr>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                                <td><div class="maru-image__wrapper"><img src="https://買取王国.com/wp-content/themes/kaitori/img/maru001.png" alt=""></div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if(get_post_meta($post->ID,'store_name',true) == 'ザ・ゴールド'):?>
                                <div class="ranking-description__wrapper">
                                    <p>
                                        <?php echo $ranking_description;?>
                                    </p>
                                </div>
                                <div class="ranking-title__wrapper">
                                    <div class="red-title__block">
                                        <h2>このような状態でも買取OK!</h2>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="content-image">
                                    <img src="<?php echo $ranking_kaitori_image ;?>" alt="">
                                </div>
                                <div class="koushiki-site__btn_wrapper">
                                    <div class="kousiki-site__btn_block">
                                        <h2 class="mid-txt"><a href=""></a>公式サイトはこちら</h2>
                                    </div>
                                </div>
                                <div class="ranking-review__link_wrapper">
                                    <div class="ranking-review__link_block">
                                        <a class="small-txt" href=""><?php echo $store_name;?>のレビュー＆口コミは＞＞</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
							endif;
							wp_reset_postdata(); ?>
                </section>
                <section class="block-sections__section n6">
                <div class="block-title">
                    <div class="block-midashi_background-image">
                        <h2 class="block-midashi mid-txt">
                            <span class="block-title__icon"><img src="<?php bloginfo('template_url'); ?>/image/h1before 1.png" alt=""></span>
                            最安値で着物を高く売る秘訣
                        </h2>
                    </div>
                </div>
                <div class="block-content">
                <h2 class="text-subtitle mid-txt2">着物買取サイトを複数(3社)問い合わせすること!</h2>
                <p>実は、最高値で着物を売却した方に共通しているのが、複数の着物買取サイトへ問い合わせしています。<br><br>

                当サイトでは、高額で着物を買取る業者を厳選して紹介しておりますが、業者によって査定価格や特色が分かれるのも事実です。<br><br>

                複数(3社以上)の着物買取サイトを利用することで、多くの提案が受けられるようになり、それだけ最高値で売れる可能性が格段にアップします。<br><br>

                当サイトでは最低3サイト以上の着物買取サイトに問い合わせすることを推奨しています。<br><br>

                おすすめの組み合わせは、ザ・ゴールド＋福ちゃん+バイセルの3社同時問い合わせです。<br><br>
                </p>
                <div class="content-image"><img src="https://買取王国.com/wp-content/themes/kaitori/img/ill__03.jpg" alt=""></div>
                <p>
                同時期に問い合わせすることで同じ状態の着物に対して査定担当者の力量や価格を比較しやすいため、今のうちに3社全てに問い合わせしておきましょう。<br><br>

                問い合わせは全て完全無料、1サイト約30秒で完了します。
                </p>
                </div>
                </section>
                
                <section class="block-sections__section n7">
                <div class="block-title">
                    <div class="block-midashi_background-image">
                        <h2 class="block-midashi mid-txt">
                            <span class="block-title__icon"><img src="<?php bloginfo('template_url'); ?>/image/h1before 1.png" alt=""></span>
                            当サイトが厳選した買取業者ベスト３
                        </h2>
                    </div>
                </div>
                    <div class="block-mini-table">
                        <table>
                            <?php
                                //$argsのプロパティを変えていく
                                $args = array(
                                    'post_type' => 'job',
                                    'posts_per_page' => -1,
                                    'orderby' => 'meta_value_num',
                                    'order' => 'asc',
                                    'post_status' => 'publish',
                                    'meta_key' => 'ranking',
                                );

                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        /* ループ内の記述 */
                                //ranking-best5

                                $ranking = get_field('ranking');
                                $store_name = get_field('store_name');
                                $ranking_image_frame = get_field('ranking_image_frame');
                                $mini_table_detail = get_field('mini_table_detail');
                                ?>
                                <tbody>
                                    <tr>
                                        <th><?php ranking_rank_img($ranking);?></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="block-mini-table__company">
                                                <div class="mini-table__company-image_wrapper">
                                                    <img src="<?php echo $ranking_image_frame; ?>" alt="">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="small-txt" href=""><?php echo $store_name;?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="small-txt mini-table_detail">
                                                <?php echo $mini_table_detail; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="koushiki-site__btn_wrapper">
                                                <div class="kousiki-site__btn_block">
                                                    <h2 class="mid-txt"><a href=""></a>公式サイトへ</h2>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php endwhile;
                                        endif;
                                        wp_reset_postdata(); ?>
                        </table>
                    </div>
                
                </section>
                <section class="block-sections__section n8">
                <div class="yellow-midashi_wrapper">
                    <h2 class="yellow-midashi mid-txt">
                        <span class="search-icon"><img src="<?php bloginfo('template_url'); ?>/image/search.png" alt=""></span>地域ごとに買取店をチェック！
                    </h2>
                </div>
                <div class="block-content">
                <picture>

                    <!-- Image Map Generated by http://www.image-map.net/ -->
                    <img src="<?php bloginfo('template_url'); ?>/image/map-japan-335.png" usemap="#image-map" style="width:auto;">

                    <map name="image-map">
                        <area target="_blank" alt="hokkaido" title="北海道" href="#hokkaido" coords="199,104,228,93,221,82,245,81,260,88,282,64,321,45,334,5,322,0,268,34,222,6,211,18,210,18,222,38,220,51,209,52,200,62,194,76,191,91" shape="poly">
                        <area target="_blank" alt="tohoku" title="東北地方" href="#tohoku" coords="202,105,227,96,241,132,228,196,212,200,204,192,194,197,191,187,198,184,199,170,205,167,195,160,199,143" shape="poly">
                        <area target="_blank" alt="kanto" title="関東地方" href="#kanto" coords="177,202,189,194,192,198,203,193,211,199,219,195,222,222,206,244,189,234,191,225,182,220,182,209" shape="poly">
                        <area target="_blank" alt="chubu" title="中部地方" href="#chubu" coords="192,240,193,249,186,252,170,252,155,253,148,242,145,231,137,232,126,231,129,223,136,210,147,202,148,189,163,186,160,197,168,194,177,193,172,175,181,166,186,178,191,175,196,165,204,168,197,176,200,184,192,186,193,198,185,198,176,205,181,210,183,222,190,226" shape="poly">
                        <area target="_blank" alt="kinki" title="近畿地方" href="#kinki" coords="106,224,120,219,124,230,138,231,143,231,153,253,131,274,119,269,111,255,102,245,108,235" shape="poly">
                        <area target="_blank" alt="chugoku" title="中国地方" href="#chugoku" coords="102,226,107,232,105,247,79,258,69,263,54,259,41,257,41,248,57,238,75,223,90,206,90,218" shape="poly">
                        <area target="_blank" alt="shikoku" title="四国地方" href="#shikoku" coords="66,265,84,256,102,249,114,260,111,273,99,277,74,291" shape="poly">
                        <area target="_blank" alt="kyusyu" title="九州地方" href="#kyusyu" coords="54,262,65,278,62,292,50,308,50,322,41,337,26,338,24,316,21,293,14,283,0,290,-1,276,16,264,9,252,13,236,23,248,28,261,38,254" shape="poly">
                        <area target="_blank" alt="okinawa" title="沖縄" href="#okinawa" coords="210,306,243,282,266,292,256,309,238,323,220,317" shape="poly">
                    </map>
                </picture>
                </div>
                </section>
                <!-- <div class="yajirushi--img__wrapper"></div> -->
                <!-- <section class="block-sections__section n8"></section>
                <section class="block-sections__section n9"></section>
                <section class="block-sections__section n10"></section>
                <section class="block-sections__section n11"></section> -->
            

<?php get_footer(); ?>