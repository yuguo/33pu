<div id="search_input">
		<div>
			<a href="<?php echo site_url('admin')?>" class="logo"></a>
		    <form id="myForm" action="<?php echo site_url('admin/search')?>" method="get">
			    <input type="text" value="<?php echo $keyword?>" name="keyword" class="input-xlarge" style="margin-bottom:0;">
			    <input type="submit" value="搜索" class="btn btn-success" />
			</form>
		</div>
		<div>
			<select id="cat_select" name="cat_select" style="margin-bottom:0;">
			<option value="0">全部</option>
			<?php
			foreach($cat->result() as $row){
			   echo '<option value="'.$row->cat_id.'">'.$row->cat_name.'</option>';
			}
			?>
			</select>
			<span class="muted">（点击商品后会自动添加到该分类）</span>
		</div>

</div><!-- .search_input -->

<!-- 搜索结果列表 -->
<ul id='search-list'>
<?php
	if($resp->total_results == 0){
		echo '没有找到条目，请修改关键词或者类别。';
	} else{
		foreach($resp->taobaoke_items->taobaoke_item as $taobaoke_item){
		?>
			<li>
				<a href='<?php echo $taobaoke_item->click_url ?>' data-num_id='<?php echo $taobaoke_item->num_iid ?>' 
				title='<?php echo htmlspecialchars(strip_tags($taobaoke_item->title),ENT_QUOTES); ?>' data-price='<?php echo $taobaoke_item->price?>' 
				data-sellernick='<?php echo htmlspecialchars($taobaoke_item->nick,ENT_QUOTES); ?>'>
				<img src="<?php echo $taobaoke_item->pic_url?>" alt="<?php echo htmlspecialchars(strip_tags($taobaoke_item->title),ENT_QUOTES)?>"/>
				</a>
				<p><span class="right"><?php echo $taobaoke_item->volume ?>件/30天</span><span><?php echo $taobaoke_item->commission ?></span> / <span><?php echo $taobaoke_item->price?></span></p>
			</li>
		<?php
		}
	}
?>
</ul>


<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
<script type="text/javascript">
(function($) {
	var global_clickurl,global_title,global_price,global_nick;
		//搜索结果中的条目点击
	$('#search-list li a').click(
			function(event){
				event.preventDefault();
				var item = {},
					thisItem = $(this),
					successMessage = '<div class="alert alert-success" style="position: absolute;width: 150px;bottom: 0;margin-bottom: 0;}">添加成功！</div>';

				item.img_url = thisItem.find('img').attr('src');
				item.sellernick = thisItem.data('sellernick');
				item.title = htmlEncode(thisItem.attr('title'));
				item.price = thisItem.data('price');
				item.click_url = thisItem.attr('href');
				item.cid = $('#cat_select').val();
				item.num_iid = thisItem.data('num_id');

				$.post('<?php echo site_url("admin/setitem/")?>',
						   { img_url: item.img_url,
							title: item.title,
							cid: item.cid,
							sellernick: item.sellernick,
							click_url: item.click_url,
							price: item.price,
							num_iid: item.num_iid
						   },
						   function(data) {
						   	
						   }).success(function(body){
							 if(body == '1'){
							 	thisItem.addClass('success').append(successMessage);
							 }else{
							 	alert(body);
							 }
						   }).error(function(body){
						   	alert('添加失败'+body);
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

})(jQuery);
</script>
</body>
<html>