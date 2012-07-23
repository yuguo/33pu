<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/bootstrap.css" />


</head>
<body>
<div class="" style="width:400px;margin:100px auto;">

<?php
//验证登录用户名和密码
if(isset($_POST['user_email']) && isset($_POST['user_password'])){
	$user_email = $_POST['user_email'];
	$user_password = md5($_POST['user_password']);

	$query = $this->db->get_where('admin', array('user_email' => $user_email,'user_password' => $user_password));
	$result = $query->result();

	if(empty($result)){
		echo '用户密码错误！';
		echo site_url();
	}else{
        $this->input->set_cookie('user_email', $user_email, 60*60*24*365);
        $this->input->set_cookie('user_password', $user_password, 60*60*24*365);
	    //跳转
		Header("HTTP/1.1 303 See Other");
		Header("Location: ".site_url('admin'));
		exit;
	}
}
?>

<form action="<?php echo site_url('login')?>" method="post">
<p><input name="user_email" type="text" placeholder="Email" /></p>
<p><input name="user_password" type="password" placeholder="密码" /></p>

<p><input type="submit" value="登录" class="btn btn-success"></p>
</form>

</div>
</body>
<html>