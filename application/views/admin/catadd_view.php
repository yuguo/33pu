<?php

//如果是一个列表，那么列出所有的子项来checkbox
if(!empty($resp->item_cats)){
	echo '<div style="padding:20px;">';
	echo '<ul class="unstyled">';
	foreach($resp->item_cats->item_cat as $item_cat){
		?>
			<li>
                <input type="checkbox" value="<?php echo $item_cat->cid ?>">

				<?php
				if($item_cat -> is_parent == 'true')
				{
					 echo '<a href="'.site_url('admin/catadd').'/'.$item_cat->cid.'">'.$item_cat->name.'</a>';
				}else if($item_cat -> is_parent == 'false'){
					echo '<span>'.$item_cat->name.'</span>';
				}
				?>
             </li>
		<?php
		}
    echo '</ul>';

    //添加按钮，用来添加子项
    echo '<input type="submit" value="添加" class="btn btn-success" id="btn-add">';
    echo '</div>';
}
	?>

    <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>assets/js/json.js'></script>
    <script>
        (function($) {
            $('#btn-add').click(function(){
                var data = new Array();
                $('input:checked').each(function(index){
                    data[index] = {id : $(this).attr('value'), name : $(this).next().text()}
                });
                     data = JSON.stringify(data);

                        // The rest of this code assumes you are not using a library.
                        // It can be made less wordy if you use one.
                        var form = document.createElement("form");
                        form.setAttribute("method", 'POST');
                        form.setAttribute("action", "<?php echo site_url('admin/catadd_op') ?>");

                        var hiddenField = document.createElement("input");
                        hiddenField.setAttribute("type", "hidden");
                        hiddenField.setAttribute("name", 'data');
                        hiddenField.setAttribute("value", data);

                        form.appendChild(hiddenField);

                        document.body.appendChild(form);
                        form.submit();


            }

            );
        })(jQuery);
    </script>

</body>
</html>
