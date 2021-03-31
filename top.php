<div class="top_contents">
    <div class="top_contents_list">
      <p><a href="https://hannari-k-bro.shop-pro.jp/?mode=f1"><img src="https://crossbench.github.io/kawaichi-nishiki/images/top_baner.jpg" alt=""></a></p>
      <div class="link"><a href="https://hannari-k-bro.shop-pro.jp/?mode=f1">詳しく見る</a></div>
    </div>
</div>

<!-- お知らせ -->
<{if $info != ""}>
  <div class="row">
    <div class="news_topic">お知らせ</div>
    <div class="news_topic_box col col-lg-12  mar_b_50">
      <{$info}>
    </div>
  </div>
<{/if}>
<!-- // お知らせ -->
<!-- おすすめ商品 -->
<{if $recommend_num != 0}>
  <div class="mar_b_50">
    <h2 class="pad_l_10 mar_b_20 txt_28 txt_fwn bor_b_1">おすすめ商品</h2>
    <ul class="row unstyled">
      <{section name=num loop=$recommend}>
        <li class="col col-xs-12 col-lg-4 recommend-unit pad_20 mar_b_30 txt_c">
          <a href="<{$recommend[num].link_url}>">
            <{if $recommend[num].img_url != ""}>
              <img src="<{$recommend[num].img_url}>" alt="<{$recommend[num].name}>" class="show mar_auto mar_b_10" />
            <{else}>
              <img src="https://img.shop-pro.jp/tmpl_img/73/noimage.png" alt="<{$recommend[num].name}>" class="show mar_auto mar_b_10" />
            <{/if}>
          </a>
          <a href="<{$recommend[num].link_url}>"><{$recommend[num].name}></a><br>
          <{if $recommend[num].s_expl != ""}>
            <{$recommend[num].s_expl}>
          <{/if}>
          <{if $recommend[num].soldout_flg == false}>
            <{if $members_login_flg == true && $recommend[num].discount_flg == true}>
              <{$recommend[num].regular_price}>
            <{/if}>
            <{$recommend[num].price}>
            <{if $members_login_flg == true && $recommend[num].discount_flg == true}>
              <{$recommend[num].discount_rate}>OFF!!
            <{/if}>
          <{else}>
            SOLD OUT
          <{/if}>
        </li>
      <{/section}>
    </ul>
  </div>
<{/if}>
<!-- // おすすめ商品 -->
<!-- 売れ筋商品 -->
<{if $seller_num != 0}>
  <div class="mar_b_50">
    <h2 class="pad_l_10 mar_b_20 txt_28 txt_fwn bor_b_1">売れ筋商品</h2>
    <ul class="row unstyled">
      <{section name=num loop=$seller}>
        <li class="col col-xs-12 col-lg-4 seller-unit pad_20 mar_b_30 txt_c">
          <a href="<{$seller[num].link_url}>">
            <{if $seller[num].img_url != ""}>
              <img src="<{$seller[num].img_url}>" alt="<{$seller[num].name}>" class="show mar_auto mar_b_10" />
            <{else}>
              <img src="https://img.shop-pro.jp/tmpl_img/73/noimage.png" alt="<{$seller[num].name}>" class="show mar_auto mar_b_10" />
            <{/if}>
          </a>
          <a href="<{$seller[num].link_url}>"><{$seller[num].name}></a><br>
          <{if $seller[num].s_expl != ""}>
            <{$seller[num].s_expl}>
          <{/if}>
          <{if $seller[num].soldout_flg == false}>
            <{if $members_login_flg == true && $seller[num].discount_flg == true}>
              <{$seller[num].regular_price}>
            <{/if}>
            <{$seller[num].price}>
            <{if $members_login_flg == true && $seller[num].discount_flg == true}>
              <{$seller[num].discount_rate}>OFF!!
            <{/if}>
          <{else}>
            SOLD OUT
          <{/if}>
        </li>
      <{/section}>
    </ul>
  </div>
<{/if}>
<!-- // 売れ筋商品 -->
<!-- フリースペース -->
<{if $free_space != ""}>
  <div class="row">
    <div class="col col-lg-12  mar_b_50">
      <{$free_space}>
    </div>
  </div>
<{/if}>
<!-- // フリースペース -->

<script>
  $(window).load(function () {
    $('.recommend-unit').tile();
    $('.seller-unit').tile();
  });
  $(window).resize(function () {
    $('.recommend-unit').tile();
    $('.seller-unit').tile();
  });
</script>
