<style>
	.modal-header {display:none}
	.modal-footer {display:none}
	.modal-body {position:relative;min-height:250px;}
	.modal-body #img_thumb {position:absolute;left:15px;top:15px;}
	.modal-body .ml {margin-left:250px;}
</style>



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
					<a href='<?php echo $taobaoke_item->click_url ?>' data-taobaoke_id='<?php echo $taobaoke_item->num_iid ?>' title='<?php echo strip_tags($taobaoke_item->title)?>' data-price='<?php echo $taobaoke_item->price?>' data-commission='<?php echo $taobaoke_item->commission ?>' data-sellernick='<?php echo $taobaoke_item->nick; ?>'>
					<img src="<?php echo $taobaoke_item->pic_url?>" alt="<?php echo $taobaoke_item->title?>"/>
					</a>
					<p><span class="right"><?php echo $taobaoke_item->volume ?>件/30天</span><span><?php echo $taobaoke_item->commission ?></span> / <span><?php echo $taobaoke_item->price?></span></p>
				</li>
			<?php
			}
		}
	echo "</ul>";
}
?>

<div id="pop-pictures" class="modal hide">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h3></h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
             <a href="" class="btn btn-primary"
		              id="btn-publish">发布条目</a>
            </div>
          </div>

<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo base_url()?>assets/js/bootstrap-modal.js'></script>
<script type="text/javascript">
(function($) {
	var global_clickurl,global_title,global_price,global_nick,global_cid;
	//搜索结果中的条目点击
	$('#search-list li a').click(
			function(){
				event.preventDefault();


				//设置一些当前选中条目的公共信息
				global_clickurl = $(this).attr('href');
				global_title = htmlEncode($(this).attr('title'));
				global_price = $(this).data('price');
				global_sellernick = $(this).data('sellernick');
				global_commission = $(this).data('commission');
				global_itemid = $(this).data('taobaoke_id');

				$('#pop-pictures').modal();

				$('#pop-pictures .modal-body').html('等下……');
				$.get('<?php echo site_url("admin/getiteminfo")?>',{item_id:global_itemid},
						function(data) {
							$('#pop-pictures .modal-body').html('<ul></ul>');
							$.each(data['imgs'],function(k,v){
								$('<li><img src="'+v+'"></li>').insertAfter('#pop-pictures .modal-body ul');
							});
						},'json');
		}
	);

	//弹出窗口中的图片再点击
	$('#pop-pictures li img').live('click',
			function(){
				var $img_url = $(this).attr('src');
                var $item = {};
				$('#pop-pictures .modal-body').html('<p>正在保存图片……</p>');

				$.ajax({
                    type: "POST",
                    url:'<?php echo site_url("admin/saveimage/") ?>',
                    data:({
                                img_source_url: $img_url,
                                img_new_name: global_itemid
                            })
                }).done(function(data){
                        var dtd = $.Deferred(); // 新建一个deferred对象
                        if(data == 0){
                            alert("图片保存失败！");
                            dtd.reject();
                            return dtd;
                        }

                        $('#pop-pictures .modal-body').append('<p>图片保存成功……</p>');
                        $item.img_url = data;
                        $item.sellernick = global_sellernick;
                        $item.title = global_title;
                        $item.price = global_price;
                        $item.click_url = global_clickurl;
                        $item.cid = global_cid;
                    })
                    .done(function(){
                        $('#pop-pictures .modal-body').append('<p>保存条目……</p>');
                        console.log($item);
                        $.post('<?php echo site_url("admin/setitem/")?>',
                               { img_url: $item.img_url,
                                title: $item.title,
                                cid: $item.cid,
                                sellernick: $item.sellernick,
                                click_url: $item.click_url,
                                price: $item.price
                               },
                               function(data) {
                                 $('#pop-pictures .modal-body').html('成功！');
                                 $('.modal').modal('hide');
                               });

                               event.preventDefault();
                    })
                    .fail(function(){
                        alert("保存条目失败！");
                    }
                );
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