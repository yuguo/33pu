<div id="page-items">

	<ul class="nav nav-pills">
      <li class=""><a href="<?php echo site_url('admin/status/items')?>">按条目</a></li>
      <li class=""><a href="<?php echo site_url('admin/status/shops')?>">按店铺</a></li>
      <li class="active"><a href="<?php echo site_url('admin/status/cats')?>">按类别</a></li>
    </ul>

	<?php if($query->num_rows()>0){ ?>
	<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>类别名称</th>
        <th>条目</th>
        <th>点击</th>
        <th>点击/条目</th>
      </tr>
    </thead>
    <tbody>
	<?php
	 foreach ($query->result() as $array):
	//条目开始
		?>
	<tr>
        <th><?php echo $array->cat_name ?></th>
        <th><?php echo $array->count ?></th>
        <td><?php echo $array->sum ?></td>
        <td><?php echo $array->sum/$array->count ?></td>
      </tr>
	<?php
    //条目结束
    endforeach;?>
        <tr>
            <th>总计</th>
            <th><?php echo $item_count_sum; ?></th>
            <th><?php echo $click_count_sum; ?></th>
            <td><?php echo $click_count_sum/$item_count_sum; ?></td>
          </tr>
		</tbody>
  </table>

	<?php } ?>
</div>

</div>
</body>
</html>