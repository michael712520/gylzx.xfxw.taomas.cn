<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://gylzx.xfxw.taomas.cn/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/index.css" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jump.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/tab.js"></script>
<script type="text/javascript">
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
	<?php echo $this->fetch('library/page_header_index.lbi'); ?>
    <div class="banner">
		<?php echo $this->fetch('library/index_ad.lbi'); ?>
        <div class="right-sidebar">
			<div class="tmas_gg">
			<h3>商城公告</h3>
			<div class="tmas_glist">
			 
<?php $this->assign('articles',$this->_var['articles_19']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_19']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

			</div>
			</div>
			<div class="tmas_gg">
			<h3>招商入驻</h3>
			<div class="tmas_glist tmas_glistbr">
			<div class="tabs-panel">
						<a href="apply_index.php" title="申请商家入驻；已提交申请，可查看当前审核状态。" class="store-join-btn" target="_blank">&nbsp;</a>
						<a href="supplier" target="_blank" class="store-join-help">
							<i class="icon-cog"></i>
							登录商家管理中心
						</a>
					</div>
			</div>
			</div>
		<div class="xgg">
		<?php 
$k = array (
  'name' => 'ads',
  'id' => '65',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
		</div>
        </div>
    </div>
 <div class="index_topm clearfix">
    <div class="w978 index-sale">
    <div class="sle_title ms">
		<h3>促销精品</h3>
		</div>
		<div class="xfjs">
		<?php echo $this->fetch('library/recommend_right_promotion.lbi'); ?>
		</div>
    
		<div class="sle_title" style="margin-top:10px;">
		<h3>热卖单品</h3>
		</div>
			<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
					
	</div>
	<div class="tmas_sjrz">
	<div class="tmas_gg">
	<h3>热门商家</h3>
	<div class="trzsj">
	 <?php 
$k = array (
  'name' => 'supplier_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
	<div class="gg_ytms">
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '66',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
	<div class="gg_ytms" style="padding-top:12px;">
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '67',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
	</div>
	</div>
	</div>
 
    <div class="w1210 floor-list">
			<div class="floor"></div>
			
<?php $this->assign('cat_goods',$this->_var['cat_goods_474']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_474']); ?><?php $this->assign('sort_order',$this->_var['goods_cat_474_sort_order']); ?><?php $this->assign('ext_info',$this->_var['goods_cat_474_ext_info']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_370']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_370']); ?><?php $this->assign('sort_order',$this->_var['goods_cat_370_sort_order']); ?><?php $this->assign('ext_info',$this->_var['goods_cat_370_ext_info']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_475']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_475']); ?><?php $this->assign('sort_order',$this->_var['goods_cat_475_sort_order']); ?><?php $this->assign('ext_info',$this->_var['goods_cat_475_ext_info']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_476']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_476']); ?><?php $this->assign('sort_order',$this->_var['goods_cat_476_sort_order']); ?><?php $this->assign('ext_info',$this->_var['goods_cat_476_ext_info']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_473']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_473']); ?><?php $this->assign('sort_order',$this->_var['goods_cat_473_sort_order']); ?><?php $this->assign('ext_info',$this->_var['goods_cat_473_ext_info']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

	</div>
    <script type="text/javascript" src="themes/68ecshopcom_360buy/js/indexPrivate.min.js"></script>
    <?php echo $this->fetch('library/right_sidebar.lbi'); ?>
    <?php echo $this->fetch('library/page_footer_index.lbi'); ?>
    <?php echo $this->fetch('library/arrive_notice.lbi'); ?>
    <?php echo $this->fetch('library/left_sidebar.lbi'); ?>
</body>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/home_index.js"></script>
<script type="text/javascript">
	$(".brand-con").hover(function(){
		var num = $(this).find("li").length;
		if(num > 10){
			$(this).find(".brand-btn").fadeTo('fast',0.4);	
		}
	},
	function(){
		$(this).find(".brand-btn").fadeTo('fast',0);	
	})

</script>
</html>