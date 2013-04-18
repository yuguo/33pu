<div id="search_input">
    <a href="<?php echo site_url('admin')?>" class="logo"></a>
    <form id="myForm" action="<?php echo site_url('admin/search')?>" method="get">
    <input type="text" value="<?php echo $keyword?>" name="keyword" class="input-xlarge" style="margin-bottom:0;">
	 <select id="cat_select" name="cat_select" style="margin-bottom:0;">
		 <option value="0">全部</option>
		 <?php
		   foreach($cat->result() as $row){
			   echo '<option value="'.$row->cat_id.'">'.$row->cat_name.'</option>';
			}
		 ?>
	  </select>
    <input type="submit" value="搜索" class="btn btn-success" />
</div><!-- .search_input -->

<?php

//打印XML中的条目信息
puPrintItem($resp);

function puPrintItem($resp){
	echo "<ul id='search-list'>";
		if($resp->total_results == 0){
			echo '没有找到条目，请修改关键词或者类别。';
		} else{
			foreach($resp->taobaoke_items->taobaoke_item as $taobaoke_item){
			?>
				<li>
					<a href='<?php echo $taobaoke_item->click_url ?>' data-taobaoke_id='<?php echo $taobaoke_item->num_iid ?>' 
					title='<?php echo htmlspecialchars(strip_tags($taobaoke_item->title),ENT_QUOTES); ?>' data-price='<?php echo $taobaoke_item->price?>' data-commission='<?php echo $taobaoke_item->commission ?>' 
					data-sellernick='<?php echo htmlspecialchars($taobaoke_item->nick,ENT_QUOTES); ?>'>
					<img src="<?php echo $taobaoke_item->pic_url?>" alt="<?php echo htmlspecialchars(strip_tags($taobaoke_item->title),ENT_QUOTES)?>"/>
					</a>
					<p><span class="right"><?php echo $taobaoke_item->volume ?>件/30天</span><span><?php echo $taobaoke_item->commission ?></span> / <span><?php echo $taobaoke_item->price?></span></p>
				</li>
			<?php
			}
		}
	echo "</ul>";
}
?>



<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
<script type="text/javascript">
(function($) {
	var global_clickurl,global_title,global_price,global_nick,global_cid;
		//搜索结果中的条目点击
	$('#search-list li a').click(
			function(event){
				event.preventDefault();


				//设置一些当前选中条目的公共信息
				global_commission = $(this).data('commission');
				global_itemid = $(this).data('taobaoke_id');

				$item = {};
				$item.img_url = $(this).find('img').attr('src');
				$item.sellernick = $(this).data('sellernick');
				$item.title = htmlEncode($(this).attr('title'));
				$item.price = $(this).data('price');
				$item.click_url = $(this).attr('href');
				$item.cid = global_cid;
				$errorMessage = '';

				$.post('<?php echo site_url("admin/setitem/")?>',
						   { img_url: $item.img_url,
							title: $item.title,
							cid: $item.cid,
							sellernick: $item.sellernick,
							click_url: $item.click_url,
							price: $item.price
						   },
						   function(data) {
						   	$errorMessage = data;
						   }).success(function(){
							 alert('添加成功！');
						   }).error(function(){
						   	alert('添加失败'+$errorMessage);
						   });

					event.preventDefault();
				

				
		}
	);

	

	function htmlEncode(value){
	  return $('<div/>').text(value).html();
	}

	function htmlDecode(value){
	  return $('<div/>').html(value).text();
	}

	<?php if(!empty($_GET['cat_select'])){
		$cid = $_GET['cat_select'];
	}else {
	$cid = 0;
}
	?>
	var cat_select = "<?php echo $cid ?>";
    global_cid = cat_select;
	$("#cat_select option").filter(function() {

		//may want to use $.trim in here
		return $(this).val() == $.trim(cat_select);
	}).attr('selected', true);

})(jQuery);
</script>
</body>
<html>