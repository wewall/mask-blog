<?php
define('PUBLIC_PATH', __DIR__);
if(is_file("0")){
    if($_POST["_install_type"] == 1){
        //安装 Wordpress
        rename("0", "1");
        require PUBLIC_PATH.'/wordpress/index.php';
    }else if($_POST["_install_type"] == 2){
        //安装 typecho
        rename("0", "2");
        require PUBLIC_PATH.'/typecho/install.php';
    }
?>
<!DOCTYPE html>
<!--直接引用 Wordpress 安装样式-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	<title>ss-panel 伪装安装程序</title>
	<link rel='stylesheet' id='buttons-css'  href='/wordpress/wp-includes/css/buttons.min.css?ver=5.1-alpha-43678' type='text/css' media='all' />
<link rel='stylesheet' id='install-css'  href='/wordpress/wp-admin/css/install.min.css?ver=5.1-alpha-43678' type='text/css' media='all' />
</head>
<body class="language-chooser wp-core-ui">
	<h1 class="screen-reader-text"></h1><form id="setup" method="post" action="/"><label class='screen-reader-text' for='language'></label>
<select size='3' name='_install_type' id='_install_type'>
<option value="0" lang="option" data-continue="继续" selected = "selected">选择伪装</option>
<option value="1" lang="Wordpress" data-continue="继续">Wordpress</option>
<option value="2" lang="Typecho" data-continue="继续">Typecho</option>
</select>

<p class="step"><span class="spinner"></span><input id="language-continue" type="submit" class="button button-primary button-large" value="继续" /></p></form><script type='text/javascript' src='/wordpress/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='/wordpress/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='/wordpress/wp-admin/js/language-chooser.min.js?ver=5.1-alpha-43678'></script>
</body>
</html>
<?php

}else if(is_file("1") and !is_file("2")){
		require PUBLIC_PATH.'/wordpress/index.php';
}else if(is_file("2") and !is_file("1")){
    if(is_file("typecho/install.php")){
      	require PUBLIC_PATH.'/typecho/install.php';
    }else{
      	require PUBLIC_PATH.'/typecho/index.php';
    }
}
?>
