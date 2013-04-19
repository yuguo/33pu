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
		</div>
    </div>

</header>

<div id="wrapper">
<?php 
if($resp->num_rows() == 0){
	//http://s8.taobao.com/search?cat=xx&sort=coefp&q=关键词&pid=mm_11111111_0_0&style=grid 

	//cat                   类目号（后面加上该关键词相对应的类目编号，具体对应代码见附表）  
	//sort=coefp    人气宝贝（加上这个内容使出现的搜索结果都是人气宝贝）  
	//q                      关键词（后面直接添加上你想要搜的关键词中文）  
	//style=grid      大图（加上这个代码可以使搜索的结果保证以大图展示）  
		echo '你搜索的“'.$keyword.'”没有找到本站条目。<a href="http://s8.taobao.com/search?cat=&sort=coefp&q='.
		$keyword.'&pid=mm_'.$pid.'_0_0&style=grid ">在淘宝搜索更多'.$keyword.'。</a>';
	}else if($resp->num_rows()>0){ ?>
	<div class="goods-all transitions-enabled masonry">
	<?php foreach ($resp->result() as $array):
	//条目
		?>

		<article class="goods">
			<div class="entry-content">
			<div class="goods-pic">
				<img src="<?php echo $array->img_url ?>" class="" alt="" title="<?php echo $array->title ?>">

			</div>
				<div class="op"><div class="desc"><?php echo $array->sellernick ?>   / <strong>RMB<?php echo $array->price ?></strong></div>
				<div class="buttonline">
					<a href="<?php echo site_url('home/redirect').'/'.$array->id ?>" title="去购买" class="btn btn-success" target="_blank">去购买</a>
				</div></div>
			</div>
		</article>
	<?php endforeach;?>
	</div>
    	<?php
			echo '没有找到满意的结果？<a href="http://s8.taobao.com/search?cat=&sort=coefp&q='.
		$keyword.'&pid=mm_'.$pid.'_0_0&style=grid ">在淘宝搜索更多'.$keyword.'。</a>';
    	 } ?>
</div>

<footer id="ft" class="main-footer" role="contentinfo">
		<p><a href="<?php echo site_url();?>" title="<?php echo $site_name;?>"><?php echo $site_name;?></a> ©   • Powered by <a href="https://github.com/yuguo/33pu" title="Powered by 33号铺, 一个开源的购物推荐系统">33号铺</a></p>
</footer>



</body>
<html>
