<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
<meta charset="UTF-8" />
	<title><?php echo $site_name;?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/index.css?d=20120705" />
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>assets/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>

<header id="branding" role="banner">
    <div id="site-title">
        <h1>
            <a href="<?php echo site_url();?>" title="<?php echo $site_name;?>" rel="home" class="logo"><?php echo $site_name;?></a>
        </h1>
		<div id="site-op">
			<form action="<?php echo site_url('home/search');?>">
				<div class="input-append">
				  <input class="span2" id="appendedInputButton" type="text" name="keyword">
				  <input class="btn" type="submit" value="搜索">
				</div>
				<div class="keyword-list">
				<?php
      			   foreach($keyword_list->result() as $row){
	                echo '<a href="'.site_url('home/search?keyword='.$row->keyword_name).'">'.$row->keyword_name.'</a>&nbsp;&nbsp;';
      				}
	  			 ?>
				</div>
			</form>
		</form>
		</div>
    </div>

</header>

<!-- 打印阿里妈妈搜索结果 -->
<div id="wrapper">

	<?php if($resp->total_results != 0){ ?>
		<div class="goods-all transitions-enabled masonry">
		<?php foreach($resp->taobaoke_items->taobaoke_item as $taobaoke_item):
		//条目
			?>

			<article class="goods">
				<div class="entry-content">
				<div class="goods-pic">
					<a href='<?php echo $taobaoke_item->click_url ?>' data-taobaoke_id='<?php echo $taobaoke_item->num_iid ?>' title='<?php echo strip_tags($taobaoke_item->title)?>' data-price='<?php echo $taobaoke_item->price?>' data-commission='<?php echo $taobaoke_item->commission ?>' data-sellernick='<?php echo $taobaoke_item->nick; ?>'>
						<img src="<?php echo $taobaoke_item->pic_url?>" alt="<?php echo $taobaoke_item->title?>"/>
					</a>
				</div>
				<div class="op"><div class="desc"><?php echo $taobaoke_item->volume ?>件/30天</span>   / <strong>RMB<?php echo $taobaoke_item->price?></strong></div>
					<div class="buttonline">
						<a href="<?php echo $taobaoke_item->click_url ?>" title="去购买" class="btn btn-success" target="_blank">去购买</a>
					</div></div>
				</div>
			</article>
		<?php endforeach;?>
		</div>
    <?php } ?>
</div>




</body>
<html>
