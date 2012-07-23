<?php

/*
 *
 */
//  防止全局变量造成安全隐患
$isAdmin = '';
//  启动会话，这步必不可少
session_start();
//  判断是否登陆
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {
	 // 验证成功
    $isAdmin = 'admin';
}

/*
  * 判断url中是否包含slug
  */
if(!empty($cat_slug)){
	$query=$this->M_item->get_all_item($limit,$offset,$cat_slug);
}else{
	$query=$this->M_item->get_all_item($limit,$offset);
}


?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
	<title>33号铺</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/tqq.css?d=20120705" />
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>assets/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $isAdmin;?>">

<header id="branding" role="banner">
    <div id="site-title">
        <h1>
            <a href="http://33pu.net/" title="33号铺" rel="home" class="logo">33号铺</a>
        </h1>
    </div>
</header>

<nav class="main_nav">
			<div>
				<ul class="menu">
					<?php
						$is_home = '';
						if(empty($cat_slug)){
							$is_home = 'current-menu-item';
						}
						?>
					<li class="<?php echo $is_home;?>"><a href="<?php echo site_url()?>">全部</a></li>
					<?php
					   foreach($cat->result() as $row){
							$is_current = '';
							if(!empty($cat_slug) && $row->cat_slug == $cat_slug){
								$is_current = 'current-menu-item';
							}
						   echo '<li class="'.$is_current.'"><a href="'.site_url('cat/'.$row->cat_slug).'">'.$row->cat_name.'</a></li>';
						}
					 ?>
				</ul>
			</div>
	</nav>

<div id="wrapper">

	<? if($query->num_rows()>0){ ?>
	<div class="goods-all transitions-enabled masonry">
	<? foreach ($query->result() as $array):
	//条目
		?>

		<article class="goods">
			<div class="entry-content">
			<div class="goods-pic">
				<img src="<?php echo $array->img_url ?>" class="thumbnail" alt="" title="<?php echo $array->title ?>">
				<?php if($isAdmin){ ?>
					<a href="#" title="删除此条" class="btn_delete" data-itemid="<?php echo $array->id;?>">×</a>
					<span class="label label-info"><?php echo $array->click_count;?></span>
				<?php } ?>
			</div>
				<div class="op"><div class="desc"><?php echo $array->sellernick ?>   / <strong>RMB<?php echo $array->price ?></strong></div>
				<div class="buttonline">
					<a href="<?php echo site_url('home/redirect').'/'.$array->id ?>" title="去购买" class="btn btn-success" target="_blank">去购买</a>
				</div></div>
			</div>
		</article>
	<?endforeach;?>
	</div>
	<div class="pagenav">
		<?=$pagination;?>
	</div>
	<? } ?>
</div>



<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F247001c57f7d57d224b4e6bd2f1a86e5' type='text/javascript'%3E%3C/script%3E"));
</script>

<?php if($isAdmin){ ?>
<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
<script>
	(function($){
		$('.btn_delete').click(function(){
			var r=confirm("你真的真的要删除吗？无法恢复！");
				if (r==true)
				{
					var that = $(this);
					var delete_item_id = $(this).data('itemid');

					$.post('<?php echo site_url("admin/delete_item/")?>',
						{
							item_id: delete_item_id
						},function(data){
								if(data){ //如果删除成功
									that.parents('.goods').fadeToggle();
								}
							});
				} else
				{
				}



			event.preventDefault();
		});
	})(jQuery);
</script>
<?php }?>

</body>
</html>