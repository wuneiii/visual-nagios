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
	<tr style="height:1px;" bgcolor="#a9a9a9">
		<td valign="bottom" colspan="3" nowrap>
			<table width="100%" cellspacing="0" cellpadding="0">
				<tr style="background: transparent url('<?php echo UI_STATIC?>cacti_backdrop.gif') no-repeat center right;">
					<td id="tabs" valign="bottom">
						&nbsp;
						<?php foreach($data as $tag => $url){ ?>
						<a href="<?php echo $url;?>"><?php echo $tag;?></a>
						<?php  } ?>
                         </td<
                         </tr></table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="height:2px;" bgcolor="#183c8f">
		<td colspan="3">
			<img src="<?php echo UI_STATIC?>transparent_line.gif" style="height:2px;" border="0"><br>
		</td>
	</tr>
	<tr style="height:5px;" bgcolor="#e9e9e9">
		<td colspan="3">
			<table width="100%">
				<tr>
					<td>
						Console					</td>
					<td align="right">
													Logged in as <strong>admin</strong> (<a href="/cacti/logout.php">Logout</a>)&nbsp;
												</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#f5f5f5" colspan="1" style="height:8px;width:135px;background-image: url(<?php echo UI_STATIC?>shadow_gray.gif); background-repeat: repeat-x; border-right: #aaaaaa 1px solid;">
			<img src="<?php echo UI_STATIC?>transparent_line.gif" style="height:2px;width:135px;" border="0"><br>
		</td>
		<td colspan="2" style="height:8px;background-image: url(<?php echo UI_STATIC?>shadow.gif); background-repeat: repeat-x;" bgcolor="#ffffff">

		</td>
	</tr>
