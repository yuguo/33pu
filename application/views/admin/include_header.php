<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>assets/backend.css" />

</head>
<body>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="brand" href="<?php echo site_url()?>">首页</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="<?php echo site_url('admin')?>">后台</a>
              </li>
              <li class="">
                <a href="<?php echo site_url('admin/cat')?>">类别</a>
              </li>
              <li class="">
                <a href="<?php echo site_url('admin/status/items')?>">统计</a>
              </li>
              <li class="">
                <a href="<?php echo site_url('admin/logout')?>">登出</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>