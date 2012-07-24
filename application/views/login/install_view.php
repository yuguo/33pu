<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/search.css" />

</head>
<body>

<?php
//验证登录用户名和密码
if(!empty($_POST['user_email'])){
	$user_email = $_POST['user_email'];
	$user_password = md5($_POST['user_password']);

	$query = $this->db->insert('admin', array('user_email' => $user_email,'user_password' => $user_password));


	//  当验证通过后，启动 Session
    session_start();
    //  注册登陆成功的 admin 变量，并赋值 true
    $_SESSION["admin"] = true;
	//跳转
	Header("HTTP/1.1 303 See Other");
	Header("Location: ".site_url('admin'));
}
?>

<?php
	echo $text;

	//如果已经有管理员帐号了，则不运行再初始化
	if($is_installed){
		echo '管理员帐号已经存在，请<a href="'.site_url('login').'">登录</a>';
		exit();
	}
?>

<form action="<?php echo site_url('login/install')?>" method="post">
<p><input name="user_email" type="text" placeholder="Email" /></p>
<p><input name="user_password" type="password" placeholder="密码" /></p>
<p><input type="submit" value="创建" class="btn btn-success"></p>
</form>


</body>
<html>