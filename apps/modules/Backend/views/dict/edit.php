<?php
use common\YUrl;
require_once (dirname(__DIR__) . '/common/header.php');
?>

<style type="text/css">
html {
	_overflow-y: scroll
}
</style>

<div class="pad_10">
	<form action="<?php echo YUrl::createBackendUrl('Dict', 'edit'); ?>"
		method="post" name="myform">
		<table cellpadding="2" cellspacing="1" class="table_form" width="100%">
			<tr>
				<th width="100">字典编码：</th>
				<td><input type="text" name="dict_code" id="dict_code" size="40"
					class="input-text"
					value="<?php echo htmlspecialchars($dict['dict_code']); ?>"></td>
			</tr>
			<tr>
				<th width="100">字典值：</th>
				<td><input type="text" name="dict_value" id="dict_value" size="40"
					class="input-text"
					value="<?php echo htmlspecialchars($dict['dict_value']); ?>"></td>
			</tr>
			<tr>
				<th width="100">字典值描述：</th>
				<td><textarea name="description" id="dict_description"
						style="width: 300px;" rows="5" cols="50"><?php echo htmlspecialchars($dict['description']); ?></textarea></td>
			</tr>
			<tr>
				<input type="hidden" name="dict_type_id"
					value="<?php echo $dict['dict_type_id']; ?>" />
				<input type="hidden" name="dict_id"
					value="<?php echo $dict['dict_id']; ?>" />
				<td width="100%" align="center" colspan="2"><input id="form_submit"
					type="button" name="dosubmit" class="btn_submit" value=" 提交 " /></td>
			</tr>

		</table>

	</form>
</div>

<script type="text/javascript">
<!--

$(document).ready(function(){
	$('#form_submit').click(function(){
	    $.ajax({
	    	type: 'post',
            url: $('form').eq(0).attr('action'),
            dataType: 'json',
            data: $('form').eq(0).serialize(),
            success: function(data) {
                if (data.code == 200) {
                	parent.location.reload();
                } else {
                	dialogTips(data.msg, 3);
                }
            }
	    });
	});
});

//-->
</script>

</body>
</html>