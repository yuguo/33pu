<?php
//如果是保存成功
if($cat_saved)
{
	?>
<div class="alert fade in">
<strong>成功</strong> 类别信息已经成功保存！
</div>
	<?php
}
?>

<table class="table">
        <tbody>
        <?php
            $index = 1;
			   foreach($cat->result() as $row){
	                echo '<tr class="row">';
	                echo '<td>'.$index.'</td>';
	                echo '<td><input type="text" class="input-small cat_name" value="'.$row->cat_name.'"></td>';
	                echo '<td><input type="text" class="input-small cat_slug" value="'.$row->cat_slug.'"></td>';
	                echo '<td><input type="text" class="input-small cid" value="'.$row->cat_id.'"></td>';
	                echo '</tr>';
	                $index++;
				}
			 ?>
        </tbody>
      </table>
<a href="##" title="" class="btn btn-primary" id="btn-save">保存</a>
<a href="<?php echo site_url('admin/catadd')?>" title="">新增类别</a>


    <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/js/json.js'></script>
    <script>
        (function($) {
            $('#btn-save').click(function(){
                var data = new Array();
                $('.row').each(function(index){
                    data[index] = {id : $(this).find('.cid').attr('value'), name : $(this).find('.cat_name').attr('value'),slug : $(this).find('.cat_slug').attr('value')}
                });
                     data = JSON.stringify(data);

                        // The rest of this code assumes you are not using a library.
                        // It can be made less wordy if you use one.
                        var form = document.createElement("form");
                        form.setAttribute("method", 'POST');
                        form.setAttribute("action", "<?php echo site_url('admin/catupdate_op');?>");

                        var hiddenField = document.createElement("input");
                        hiddenField.setAttribute("type", "hidden");
                        hiddenField.setAttribute("name", 'data');
                        hiddenField.setAttribute("value", data);

                        form.appendChild(hiddenField);

                        document.body.appendChild(form);
                        form.submit();
            });

        })(jQuery);
    </script>

</body>
<html>