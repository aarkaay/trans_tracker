<?php
/**
* Genext
*
* @package		Genext
* @subpackage           View
* @author		Ritesh Singh
* @copyright	        Copyright (c) 2012 - 2013 
* @purpose              <head> for admin login page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Panel | <?php if(isset($title)){echo $title;} ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/charCount.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/ui.spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/chosen.jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom/general.js"></script>
<?php
if(isset($js))
{
?>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom/<?php echo $js; ?>.js"></script>
<?php
}
?>
<?php
if(isset($js1))
{
?>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom/<?php echo $js1; ?>.js"></script>
<?php
}
?>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>public/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>public/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
