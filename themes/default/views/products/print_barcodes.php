<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $page_title.' | '.$Settings->site_name; ?></title>
	<link rel="shortcut icon" href="<?= $assets ?>img/icon.png"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="<?= $assets ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= $assets ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?= $assets ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<style>
		body { text-align:center; }
		td { text-align: center; }
		h4 { margin:5px; padding:0; }
		.price { font-size:0.9em; font-weight:bold; }
		@media print
		{
			.container { width: auto !important; }
			.container h4,
			.btn-group, .pagination { display: none; }
		}
	</style>
</head>
<body>
	<div class="container">
		<h4><?=$Settings->site_name.'<br>'.$page_title?></h4>
		<div class="btn-group">
			<a class="btn btn-primary" href="<?=site_url('settings');?>"><i class="fa fa-dashboard"></i> <?= lang('dashboard'); ?></a>
			<a class="btn btn-default" href="javascript:void();" onclick="window.print();"><i class="fa fa-print"></i> <?= lang('print'); ?></a>
		</div>
		<div  class="text-center"><?php echo $this->pagination->create_links(); ?></div>
		<?=$html?>
		
		<div  class="text-center"><?php echo $this->pagination->create_links(); ?></div>
	</div>
	
</body>
</html>	