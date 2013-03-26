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
            echo '<td><a href="##" class="delete-keyword"
             data-keywordid = "'.$row->id.'">×</a></td>';
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
          <form action="<?php echo site_url('admin/keyword/add')?>" method="post" class="form-inline">
              <input type="text" placeholder="新增关键词…" name="keyword">
              <button type="submit" class="btn btn-primary">走你</button>
          <form>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn">取消</a>
        </div>
  </div>
  
</div>

    <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
    <script type='text/javascript' >
    jQuery.noConflict();
    jQuery(document).ready(function($) {
      //删除关键词
      $('.delete-keyword').click(function(){
          var r=confirm("你真的真的要删除吗？无法恢复！");
          if (r==true)
          {
            var that = $(this);
            var keywordid_to_be_delete = that.data('keywordid');
            $.post('<?php echo site_url("admin/keyword/delete")?>',
              {
                keyword: keywordid_to_be_delete
              },function(data){
                console.log(data);
                  if(data){ //如果删除成功
                    that.parents('tr').fadeToggle();
                  }
                });
          } else
          {
          }
      });

      event.preventDefault();
      });
    </script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/js/bootstrap.min.js'></script>

</body>
<html>