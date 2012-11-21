<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title><?php echo C('app_name')?></title>
	<link href="<?php echo UI_STATIC?>main.css" type="text/css" rel="stylesheet">
	<link href="<?php echo UI_STATIC?>favicon.ico" rel="shortcut icon">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="<?php echo UI_STATIC?>layout.js"></script>
	</head>

<body style="background-image:url('<?php echo UI_STATIC?>left_border.gif');background-repeat:repeat-y;" >

<table width="100%" cellspacing="0" cellpadding="0">
	<tr style="height:38px;" bgcolor="#a9a9a9">
		<td valign="bottom" colspan="3" nowrap>
			<table width="100%" cellspacing="0" cellpadding="0" height="100%">
				<tr style="background: transparent url('<?php echo UI_STATIC?>cacti_backdrop.gif') no-repeat center right;" height="38px">
					<td id="tabs" valign="bottom">
						&nbsp;
						<?php foreach($data as $tag => $url){ ?>
						<a href="<?php echo $url;?>" style="display:block;float:left; padding-left:20px;padding-bottom:8px;"><?php echo $tag;?></a>
						<?php  } ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
