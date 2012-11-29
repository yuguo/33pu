<div class="container">
  <?php
  //如果是保存成功
  if(!empty($alert_info))
  {
  	?>
  <div class="alert fade in">
  <?php echo $alert_info; ?>
  </div>
  	<?php
  }
  ?>

  <table class="table">
    <thead>
      <tr>
        <th>
          序号
        </th>
        <th>
          关键词
        </th>
        <th>
          点击次数
        </th>
        <th>
          删除
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
           $index = 1;
  			   foreach($keyword_list->result() as $row){
            echo '<tr>';
            echo '<td>'.$index.'</td>';
            echo '<td>'.$row->keyword_name.'</td>';
            echo '<td>'.$row->keyword_click.'</td>';
            echo '<td><a href="'.site_url('admin/keyworddelete/'.$row->keyword_name).'">×</a></td>';
            echo '</tr>';
            $index++;
  				}
		 ?>
    </tbody>
  </table>
  <a href="#addKeyword" role="button" class="btn" data-toggle="modal">新增关键词</a>

  <div class="modal hide fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3>新增关键词</h3>
    </div>
        <div class="modal-body">
          <form action="<?php echo site_url('admin/keyword')?>" method="post" class="form-inline">
              <input type="text" placeholder="新增关键词…" name="add_keyword">
              <button type="submit" class="btn btn-primary">走你</button>
          <form>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn">取消</a>
        </div>
  </div>
</div>

    <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>
    

</body>
<html>