<?php

/*
  * 判断url中是否包含slug
  */
if(!empty($cat_slug)){
	$query=$this->M_item->get_all_item($limit,$offset,$cat_slug);
}else{
	$query=$this->M_item->get_all_item($limit,$offset);
}


?>


<div id="page-items">

	<? if($query->num_rows()>0){ ?>

	<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>名称</th>
        <th>缩略图</th>
        <th>点击</th>
        <th>卖家</th>
        <th>价格</th>
        <th>链接</th>
        <th>删除</th>
      </tr>
    </thead>
    <tbody>
	<?php
	 foreach ($query->result() as $array):
	//条目开始
		?>
	<tr>
        <th><?php echo $array->title ?></th>
        <td><img src="<?php echo $array->img_url ?>" class="thumbnail" alt="" title=""></td>
        <td><?php echo $array->click_count;?></td>
        <td><?php echo $array->sellernick ?></td>
        <td><strong><?php echo $array->price ?></strong></td>
        <td><?php echo site_url('home/redirect').'/'.$array->id ?></td>
        <td><a href="#" title="删除此条" class="btn_delete">删除</a></td>
      </tr>
	<?php
    //条目结束
    endforeach;?>
		</tbody>
  </table>
	<div class="pagenav">
		<?=$pagination;?>
	</div>
	<? } ?>
</div>



<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F247001c57f7d57d224b4e6bd2f1a86e5' type='text/javascript'%3E%3C/script%3E"));
</script>


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

</body>
</html>