<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://hannari-k-bro.shop-pro.jp/css/framework/colormekit.css" type="text/css" />
	<link rel="stylesheet" href="https://hannari-k-bro.shop-pro.jp/css/framework/colormekit-responsive.css" type="text/css" />
	<link rel="stylesheet" href="https://img21.shop-pro.jp/PA01463/002/css/5/index.css?cmsp_timestamp=20210307003210" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="rss" href="https://hannari-k-bro.shop-pro.jp/?mode=rss" />
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<meta property="og:title" content="錦市場の老舗の八百屋 河一商店" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://hannari-k-bro.shop-pro.jp" />
	<meta property="og:site_name" content="錦市場の老舗の八百屋 河一商店" />
	<script>
		var Colorme = {"page":"top","shop":{"account_id":"PA01463002"},"basket":{"total_price":0,"items":[]},"customer":{"id":null}};
	</script>
	<script>
		(function() {
		        function insertScriptTags() {
		          var scriptTagDetails = [];
		          var entry = document.getElementsByTagName('script')[0];
		    
		          scriptTagDetails.forEach(function(tagDetail) {
		            var script = document.createElement('script');
		    
		            script.type = 'text/javascript';
		            script.src = tagDetail.src;
		            script.async = true;
		    
		            if( tagDetail.integrity ) {
		              script.integrity = tagDetail.integrity;
		              script.setAttribute('crossorigin', 'anonymous');
		            }
		    
		            entry.parentNode.insertBefore(script, entry);
		          })
		        }
		    
		        window.addEventListener('load', insertScriptTags, false);
		      })();
	</script>
</head>
<body>

<!-- ▼▼▼▼▼　common　▼▼▼▼▼ -->

<!-- <link rel="stylesheet" href="https://crossbench.github.io/kawaichi-nishiki/css/style.css" type="text/css"> -->
<link rel="stylesheet" href="https://kawaichi-nishiki.cross-bench.com/css/style.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<script src="https://img.shop-pro.jp/tmpl_js/73/jquery.tile.js"></script>
<script src="https://img.shop-pro.jp/tmpl_js/73/jquery.skOuterClick.js"></script>

<!-- <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 725px;"><div id="slider" style="width: auto; position: relative;">
  <div style="float: none; list-style: none; position: absolute; width: 1430px; z-index: 51; display: block; opacity: 0.0120416;"><img src="https://img21.shop-pro.jp/PA01463/002/slideshow/slideshow_img_d66e52.jpg?cmsp_timestamp=20210303220341" alt="" title=""></div>
  <div style="float: none; list-style: none; position: absolute; width: 1430px; z-index: 0; display: block; opacity: 0.987958;"><img src="https://img21.shop-pro.jp/PA01463/002/slideshow/slideshow_img_783ca9.jpg?cmsp_timestamp=20210303220351" alt="" title=""></div>
</div></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div></div></div></div> -->

<{if $slideshow_html}>
  <div class="slider">
    <{$slideshow_html}>
  </div>
  <script type="text/javascript">
  //<![CDATA[
  $(window).on('load',function(){
    $('#slider').bxSlider({
      auto: true,
      pause: 2000,
      speed: 4000,
      controls: false,
      captions: true,
      mode: 'fade'
    });
  });
  //]]>
  </script>
<{/if}>
<div class="full">
  <div id="header" class="header">
    <div class="global_menu">
      <!-- 会員メニュー(481px以上で表示) -->
      <ul class="inline pull-right col-sm-12 hidden-phone txt_r">
        <li>
          <a href="<{$view_myaccount_url}>" class="txt_c_333"><i class="icon-b icon-user va-10 mar_r_5"></i>マイアカウント</a>
        </li>
        <{if $members_use_flg == true}>
          <{if $members_login_flg == false}>
            <{if $members_register_flg == true}>
              <li>
                <a href="<{$members_regi_url}>" class="txt_c_333"><i class="icon-b icon-adduser va-10 mar_r_5"></i>会員登録</a>
              </li>
            <{/if}>
            <li>
              <a href="<{$members_login_url}>" class="txt_c_333"><i class="icon-b icon-login va-10 mar_r_5"></i>ログイン</a>
            </li>
          <{else}>
            <li>
              <a href="<{$members_login_url}>" class="txt_c_333"><i class="icon-b icon-logout va-10 mar_r_5"></i>ログアウト</a>
            </li>
          <{/if}>
        <{/if}>
      </ul>
      <!-- // 会員メニュー(481px以上で表示) -->
      <!-- あと○円で送料無料(481px以上で表示) -->
      <{if $incart != "" && $incart_delivery}>
        <div class="visible-phone">
          <ul class="unstyled pad_10 bgc_gray txt_12">
            <{section name=num loop=$incart_delivery}>
              <li>
                <{$incart_delivery[num].delivery_name}>
                <{if $incart_delivery[num].balance > 0}>：
                  あと<b><{$incart_delivery[num].balance}>円</b>で<b>送料無料！</b>
                <{else}>
                  送料無料です！
                <{/if}>
              </li>
            <{/section}>
          </ul>
        </div>
      <{/if}>
      <!-- // あと○円で送料無料(481px以上で表示) -->

      <ul class="inline mar_t_30 bor_t_1">
        <li class="pad_v_10 mar_r_20"><a href="<{$home_url}>" class="txt_c_333"><i class="icon-lg-b icon-home va-30 mar_r_5"></i>ホーム</a></li>
        <li class="pad_v_10 mar_r_20"><a href="<{$sk_url}>" class="txt_c_333"><i class="icon-lg-b icon-help va-30 mar_r_5"></i>支払・配送について</a></li>
        <{if $manager_url != ""}><li class="pad_v_10 mar_r_20"><a href="<{$manager_url}>" class="txt_c_333"><i class="icon-lg-b icon-pencil va-30 mar_r_5"></i>ショップブログ</a></li><{/if}>
        <li class="pad_v_10 mar_r_20"><a href="<{$view_inq_url}>" class="txt_c_333"><i class="icon-lg-b icon-mail va-30 mar_r_5"></i>お問い合わせ</a></li>
        <li class="pad_v_10 mar_r_20"><a href="<{$view_cart_url}>" class="txt_c_333"><i class="icon-lg-b icon-cart va-30 mar_r_5"></i>カートを見る</a></li>
      </ul>
    </div>
  </div>
</div>

<div id="wrapper">
  <div class="container">
    <div class="row">
      <div id="contents" class="col col-lg-9 col-sm-12">
        
        <{include file = $file_name}>

        <!-- 最近チェックした商品 -->
        <{if $history_num != 0}>
          <div class="mar_b_50 check_recently">
            <h2 class="pad_l_10 mar_b_20 txt_28 txt_fwn bor_b_1">最近チェックした商品</h2>
            <ul class="row unstyled">
              <{section name=num loop=$history}>
                <li class="col col-xs-4 col-sm-3 col-lg-2 history-unit pad_10 txt_10 mar_b_20 txt_c">
                  <a href="<{$history[num].link_url}>">
                    <{if $history[num].img_url != ""}>
                      <img src="<{$history[num].img_url}>" alt="<{$history[num].name}>" class="show mar_auto mar_b_10" />
                    <{else}>
                      <img src="https://img.shop-pro.jp/tmpl_img/73/noimage.png" alt="<{$history[num].name}>" class="show mar_auto mar_b_10" />
                    <{/if}>
                  </a>
                  <a href="<{$history[num].link_url}>"><{$history[num].name}></a><br>
                  <{if $history[num].s_expl != ""}>
                    <{$history[num].s_expl}>
                  <{/if}>
                  <{if $history[num].soldout_flg == false}>
                    <{if $members_login_flg == true && $history[num].discount_flg == true}>
                      <{$history[num].regular_price}>
                    <{/if}>
                    <{$history[num].price}>
                    <{if $members_login_flg == true && $history[num].discount_flg == true}>
                      <{$history[num].discount_rate}>OFF!!
                    <{/if}>
                  <{else}>
                    SOLD OUT
                  <{/if}>
                </li>
              <{/section}>
            </ul>
          </div>
        <{/if}>
        <!-- // 最近チェックした商品 -->

      </div>
      <div id="side" class="col col-lg-3 col-sm-12">
        <!-- ロゴ -->
        <!-- <div class="logo_area">
          <div class="txt_24"><a href="./"><img src="https://img21.shop-pro.jp/PA01463/002/PA01463002.png?cmsp_timestamp=20210118204042" alt="錦市場の老舗の八百屋 河一商店"></a></div>
        </div> -->
        <!-- ロゴ -->

        <!-- ロゴ -->
        <div class="logo_area top">
          <div class="txt_24"><a href="<{$home_url}>"><{$logo}></a></div>
        </div>
        <!-- ロゴ -->

        <!-- メニュー -->
        <!-- <ul class="menu_box">
          <li><a href="#">メニュー想定</a></li>
          <li><a href="#">メニュー想定</a></li>
          <li><a href="#">メニュー想定</a></li>
        </ul> -->


        <!-- あと○円で送料無料(481px以上で表示) -->
        <{if $incart != "" && $incart_delivery}>
          <div class="hidden-phone">
            <ul class="unstyled pad_10 bgc_gray txt_12">
              <{section name=num loop=$incart_delivery}>
                <li>
                  <{$incart_delivery[num].delivery_name}>
                  <{if $incart_delivery[num].balance > 0}>：
                    あと<b><{$incart_delivery[num].balance}>円</b>で<b>送料無料！</b>
                  <{else}>
                    送料無料です！
                  <{/if}>
                </li>
              <{/section}>
            </ul>
          </div>
        <{/if}>
        <!-- // あと○円で送料無料(481px以上で表示) -->

        <!-- 商品検索フォーム -->
        <form action="<{$product_search_url}>" method="GET" class="mar_b_50">
          <{$product_search_mode}>
          <select name="cid" class="mar_b_10">
            <option value="">カテゴリーを選択</option>
            <{section name=num loop=$category}>
              <option value="<{$category[num].id}>"><{$category[num].name}></option>
            <{/section}>
          </select>
          <input type="text" name="keyword" class="keyword" />
          <button class="btn btn-xs"><i class="icon-lg-b icon-search va-35"></i><span class="visible-phone mar_l_5 pad_r_5 txt_14">SEARCH</span></button>
        </form>
        <!-- // 商品検索フォーム -->


        <!-- カテゴリーリスト -->
        <{section name=num loop=$category}>
          <{if $smarty.section.num.first }>
            <div>
              <h3 class="pad_l_10">カテゴリーから探す</h3>
              <ul class="unstyled bor_b_1 mar_b_50">
          <{/if}>
                <li class="pad_10 bor_t_1">
                  <a href="<{$category[num].link_url}>" class="show txt_c_333">
                    <{if $category[num].img_url != ""}>
                      <img src="<{$category[num].img_url}>" class="show hidden-phone mar_b_5" />
                    <{/if}>
                    <{$category[num].name}>
                  </a>
                </li>
          <{if $smarty.section.num.last }>
              </ul>
            </div>
          <{/if}>
        <{/section}>
        <!-- // カテゴリーリスト -->
        <!-- グループリスト -->
        <{section name=num loop=$group}>
          <{if $smarty.section.num.first }>
            <div>
              <h3 class="pad_l_10">グループから探す</h3>
              <ul class="unstyled bor_b_1 mar_b_50">
          <{/if}>
              <li class="pad_10 bor_t_1">
                <a href="<{$group[num].link_url}>" class="show txt_c_333">
                  <{if $group[num].img_url != ""}>
                    <img src="<{$group[num].img_url}>" class="show hidden-phone mar_b_5" />
                  <{/if}>
                  <{$group[num].name}>
                </a>
              </li>
          <{if $smarty.section.num.last }>
              </ul>
            </div>
          <{/if}>
        <{/section}>
        <!-- // グループリスト -->
        <div>
          <h3 class="pad_l_10">コンテンツ</h3>
          <ul class="unstyled bor_b_1 mar_b_50">
            <!-- フリーページ -->
            <{if $free_area_flg == true}>
              <{section name=num loop=$freepage}>
                <li class="pad_10 bor_t_1"><a href="<{$freepage[num].link_url}>" class="show txt_c_333"><{$freepage[num].page_title}></a></li>
              <{/section}>
            <{/if}>
            <!-- // フリーページ -->
            <{if $manager_url != ""}><li class="pad_10 bor_t_1"><a href="<{$manager_url}>" class="show txt_c_333">ショップブログ</a></li><{/if}>
            <li class="pad_10 bor_t_1"><a href="<{$sk_url}>#payment" class="show txt_c_333">お支払い方法について</a></li>
            <li class="pad_10 bor_t_1"><a href="<{$sk_url}>" class="show txt_c_333">配送方法・送料について</a></li>
            <{if $mailmaga_url != ""}>
              <li class="pad_10 bor_t_1"><a href="<{$mailmaga_url}>" class="show txt_c_333">メルマガ登録・解除</a></li>
            <{/if}>
            <li class="pad_10 bor_t_1 hidden-phone"><a href="<{$rss_url}>" class="txt_c_333">RSS</a>&nbsp;/&nbsp;<a href="<{$atom_url}>" class="txt_c_333">ATOM</a></li>
            <!-- 会員メニュー(480px以下で表示) -->
            <li class="pad_10 bor_t_1 visible-phone"><a href="<{$view_myaccount_url}>" class="txt_c_333">マイアカウント</a></li>
            <{if $members_use_flg == true}>
              <{if $members_login_flg == false}>
                <{if $members_register_flg == true}>
                  <li class="pad_10 bor_t_1 visible-phone"><a href="<{$members_regi_url}>" class="txt_c_333">会員登録</a></li>
                <{/if}>
                <li class="pad_10 bor_t_1 visible-phone"><a href="<{$members_login_url}>" class="txt_c_333">ログイン</a></li>
              <{else}>
                <li class="pad_10 bor_t_1 visible-phone"><a href="<{$members_login_url}>" class="txt_c_333">ログアウト</a></li>
              <{/if}>
            <{/if}>
            <!-- // 会員メニュー(480px以下で表示) -->
          </ul>
        </div>
        <{if $qrcode_url}>
          <div class="hidden-phone">
            <h3 class="pad_l_10">モバイルショップ</h3>
            <img src="<{$qrcode_url}>" class="show mar_auto" />
          </div>
        <{/if}>
        <{if $manager_name != "" && $manager_memo != ""}>
          <div class="hidden-phone">
            <h3 class="pad_l_10">店長</h3>
            <{if $manager_img != ""}>
              <img src="<{$manager_img}>" class="show mar_auto" />
            <{/if}>
            <p class="txt_fwb txt_c mar_t_10 mar_b_10"><{$manager_name}></p>
            <p>
              <{$manager_memo}>
            </p>
          </div>
        <{/if}>
      </div>
    </div>
  </div><!-- container -->
</div><!-- #wrapper -->

<div class="instagram_wrap full">
  <div class="instagram_box">
    <div class="instagram_tit">INSTAGRAM</div>
    <style>
    .instagram__pic{
      position: relative;
    }
    .instagram__pic::after {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    </style>
    <div class="instagram__pic">
      <!-- SnapWidget -->
      <script src="https://snapwidget.com/js/snapwidget.js"></script>
      <iframe src="https://snapwidget.com/embed/944950" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
    </div>
    <div class="instagram_more">
        <div class="instagram_more_prof">『京野菜・旬野菜・旬果物の愉しみ方』ご紹介させてもろてます</div>
        <div class="instagram_more_btn"><a href="https://www.instagram.com/kawaichi_nishiki/">もっとみる</a></div>
    </div>
    <ul class="instagram_sns_box">
      <li><a href="https://www.facebook.com/%E9%8C%A6-%E6%B2%B3%E4%B8%80-109880713962311/" target="_blank" rel="noopener noreferrer"><img src="https://kawaichi-nishiki.cross-bench.com/images/ico_sns_fb.svg" alt="facebook"></a></li> 
      <li><a href="https://www.instagram.com/kawaichi_nishiki/" target="_blank" rel="noopener noreferrer"><img src="https://kawaichi-nishiki.cross-bench.com/images/ico_sns_in.svg" alt="instagram"></a></li> 
    </ul>
  </div><!-- instagram_box -->
</div>
<script src="https://crossbench.github.io/kawaichi-nishiki/js/InstagramFeed.min.js"></script>
<script>
    (function(){
        new InstagramFeed({
            'username': 'kawaichi_nishiki',
            'container': document.getElementById("instagram-feed1"),
            'display_profile': false,
            'display_biography': false,
            'display_gallery': true,
            'display_captions': true,
            'max_tries': 8,
            'callback': null,
            'styling': true,
            'items': 8,
            'items_per_row': 4,
            'margin': 1,
            'lazy_load': true,
            'on_error': console.error
        });
    })();
</script>
<div class="footer_wrap full">
  <div id="footer">
    <ul class="inline">
      <li><a href="<{$home_url}>" class="txt_c_333">ホーム</a></li>
      <li><a href="<{$sk_url}>" class="txt_c_333">支払・配送について</a></li>
      <li><a href="<{$sk_url}>#info" class="txt_c_333">特定商取引法に基づく表記</a></li>
      <li><a href="<{$privacy_url}>" class="txt_c_333">プライバシーポリシー</a></li>
      <li><a href="<{$view_inq_url}>" class="txt_c_333">お問い合わせ</a></li>
    </ul>
    <p><address><{$e_copyright}></address></p>
  </div><!-- footer -->
</div><!-- full -->

<script>
  $(function () {
    // viewport
    var viewport = document.createElement('meta');
    viewport.setAttribute('name', 'viewport');
    viewport.setAttribute('content', 'width=device-width, initial-scale=1.0, maximum-scale=1.0');
    document.getElementsByTagName('head')[0].appendChild(viewport);

    function window_size_switch_func() {
      if($(window).width() >= 768) {
        // product option switch -> table
        $('#prd-opt-table').html($('.prd-opt-table').html());
        $('#prd-opt-table table').addClass('table table-bordered');
        $('#prd-opt-select').empty();
      } else {
        // product option switch -> select
        $('#prd-opt-table').empty();
        if($('#prd-opt-select > *').size() == 0) {
          $('#prd-opt-select').append($('.prd-opt-select').html());
        }
      }
    }
    window_size_switch_func();
    $(window).load(function () {
      $('.history-unit').tile();
    });
    $(window).resize(function () {
      window_size_switch_func();
      $('.history-unit').tile();
    });
  });
</script>


  
<script type="text/javascript" src="https://hannari-k-bro.shop-pro.jp/js/cart.js"></script>
<script type="text/javascript" src="https://hannari-k-bro.shop-pro.jp/js/async_cart_in.js"></script>
<script type="text/javascript" src="https://hannari-k-bro.shop-pro.jp/js/product_stock.js"></script>
<script type="text/javascript" src="https://hannari-k-bro.shop-pro.jp/js/js.cookie.js"></script>
<script type="text/javascript" src="https://hannari-k-bro.shop-pro.jp/js/favorite_button.js"></script>
</body>
</html>