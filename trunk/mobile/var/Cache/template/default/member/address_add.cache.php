<?php if (!class_exists('template', false)) die('Access Denied');
0
|| self::check('default\member/address_add.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\mobile\application\View\default\member\address_add.tpl', 1458286511)
|| self::check('default\member/address_add.tpl', 'D:\Web\Witkey\wwwroot\yph\trunk\mobile\application\View\default\inc/header.tpl', 1458286511)
;?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
  <meta content="telephone=no" name="format-detection">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>收货地址</title>
  <link href="<?php echo $BASE_V;?>css/common/base.css" type="text/css" rel="stylesheet">
  <link href="<?php echo $BASE_V;?>css/cart/cart.css" type="text/css" rel="stylesheet">
  <link href="<?php echo $BASE_V;?>css/user/user.css" type="text/css" rel="stylesheet">
  <style id="style-1-cropbar-clipper">
  /* Copyright 2014 Evernote Corporation. All rights reserved. */
  
  .en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255, 255, 255, .38) solid !important;
    border-radius: 4px !important;
  }
  
  .en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
  }
  </style>
</head>

<body>
  <header id="common_hd" class="c_txt rel">
	<a id="hd_back" class="abs" href="<?php echo $referer_url;?>">返回</a>
	<a id="common_hd_logo" class="hd_logo t_hide abs" href="<?php echo MOBILE_URL; ?>"><?php echo $config['cfg_webname'];?></a>
	<div class="my_shop for_gaq" data-for-gaq="点击我的<?php echo $config['cfg_webname'];?>;详情页"><span></span></div>
</header>  <div class="main">
    <div id="address_form" style="margin:10px;background:#fff">
      <p class="address_p rel">
        <label for="nam" class="abs">收货人</label>
        <input type="text" id="nam" name="nam" class="block input" value="<?php echo $editinfo->consignee;?>" tabindex="1" placeholder="请输入收货人姓名">
      </p>
      <p class="address_p rel">
        <label for="tele" class="abs">手机号码</label>
        <input type="tel" id="tele" name="tele" maxlength="11" class="block input" tabindex="2" value="<?php echo $editinfo->mobile;?>" placeholder="请输入手机号">
      </p>
      <p class="address_p rel">
        <label for="province" class="abs">所在地区</label>
        <select id="province" name="province" class="block input" tabindex="3">
          <option value="-1">--省份--</option>
        </select>
      </p>
      <p class="address_p rel">
        <label for="city" class="abs"></label>
        <select id="city" name="city" class="block input" tabindex="4">
          <option value="-1">--城市--</option>
        </select>
      </p>
      <p class="address_p rel">
        <label for="district" class="abs"></label>
        <select id="district" name="district" class="block input" tabindex="5">
          <option value="-1">--地区--</option>
        </select>
      </p>
      <p class="address_p rel address_p_area">
        <label for="detail_add" class="abs">详细地址</label>
        <textarea name="detail_add" cols="" rows="" id="detail_add" class="block input" tabindex="6" placeholder='请输入街道地址'><?php echo $editinfo->address;?></textarea>
      </p>
    </div>
  </div>
  <footer id="adadress_list_footer" class="wrap fix">
    <div id="adadress_list_footer_inner" class="wrap margin_auto">
      <div id="adadress_list_footer_btn_wrap"><a id="new_adadress_btn" class="btnok right">确认</a></div>
    </div>
  </footer>
  <div style="height:100px"></div>
  <script src="<?php echo STATIC_URL; ?>common/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo STATIC_URL; ?>js/json2.js" type="text/javascript"></script>
  <script src="<?php echo STATIC_URL; ?>js/jquery-plugin/ui/minified/jquery.cookie-min.js" type="text/javascript"></script>
  <script type="text/javascript">
  var index_url = '<?php echo MOBILE_URL; ?>';
  var mobile_url = '<?php echo MOBILE_URL; ?>';
  var static_url = '<?php echo STATIC_URL; ?>';
  var base_v = '<?php echo $BASE_V;?>';
  var php_self = '<?php echo PHP_SELF; ?>';

  var global_editinfo = JSON.parse('<?php echo $editinfo_json;?>');

  var global_order_address_pid = $.cookie('global_order_address_pid');
  var global_order_address_cityid = $.cookie('global_order_address_cityid');
  var global_order_address_disid  = $.cookie('global_order_address_disid');

  var global_address_id = eval('<?php echo $address_id;?>');
  var global_mobile = $.cookie('mobile');
  var global_backurl = $.cookie('back_order_address_url');
  
  //console.log(global_backurl);

  if(global_editinfo.province>0){
    global_order_address_pid = global_editinfo.province;
  }
  if(global_editinfo.city>0){
    global_order_address_cityid = global_editinfo.city;
  }
  if(global_editinfo.district>0){
    global_order_address_disid = global_editinfo.district;
  }

  </script>
  <script src="<?php echo $BASE_V;?>js/member_address_add.js" type="text/javascript"></script>
</body>

</html>
