<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<?php
// RESET CSS
$resetCSS = array(
			'href' => 'assets/css/resetcss.css',
			'rel' => 'stylesheet',
			'type' => 'text/css'
			);
echo link_tag($resetCSS);

// CORE CSS
$coreCSS = array(
			'href' => 'assets/css/core.css',
			'rel' => 'stylesheet',
			'type' => 'text/css'
			);
echo link_tag($coreCSS);

// JQUERY CSS
$jqueryCSS = array(
				'href' => base_url().'assets/js/jquery-ui-1.10.2.custom/css/redmond/jquery-ui-1.10.2.custom',
				'rel' => 'stylesheet',
				'type' => 'text/css'
			);
echo link_tag($jqueryCSS);

// FAVICON
$favicon = array(
		'href' => 'assets/images/icons/favicon.ico',
		'rel' => 'shortcut icon'
		); 
echo link_tag($favicon);
?>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.2.custom/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.2.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.2.custom/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.function.js"></script>
</head>

<body>
<header><div id="headerArea"></div></header>