<tr>

                <td valign="top" colspan="1" rowspan="2" style="width:135px;padding:5px;border-right:#aaaaaa 1px solid;" bgcolor='#f
5f5f5'>
                        <table bgcolor="#f5f5f5" width="100%" cellpadding="1" cellspacing="0" border="0" style="width:135px;">
                                <tr><td width='100%'>
                                        <table cellpadding='3' cellspacing='0' border='0' width='100%'>
<?php
	foreach($left_menu as $menu => $item){
	?>
		<tr><td class='textMenuHeader'><a href="<?php echo U($header,$menu)?>"><?php echo @$item['text']==''?$menu:$item['text'];?></a></td></tr>
		<?php
			if(@is_array($item['sub_menu']) && count($item['sub_menu']!=0)){
				foreach($item['sub_menu'] as $action){
				?>
				<tr><td class='textMenuItem' style='background-image:url("<?php echo UI_STATIC;?>menu_line.gif");'>
					<a href="<?php echo U($header,$menu,$action)?>"><?php echo $action?></a>
				</td></tr>
			<?php
                }
			}
	}		

?>
                                        </table>
                                </td></tr>                      
                        </table>

                        <img src="/cacti/images/transparent_line.gif" style="height:5px;width:135px;" border="0"><br>
                        <p style="width:135px;" align="center"><a href='/cacti/about.php'><img src="/cacti/images/cacti_logo.gif" bo
rder="0"></a></p>
                        <img src="/cacti/images/transparent_line.gif" style="height:5px;width:135px;" border="0"><br>
                </td>


		<td width="100%" colspan="2" valign="top" style="padding: 5px; border-right: #aaaaaa 1px solid;"><div style='position:relative;' id='main'>
			<table width="100%" align="center">
				<tr>
				<td class="textArea">
				<strong>You are now logged into <a href="about.php">Cacti</a>. You can follow these basic steps to getstarted.</strong>

			<ul>
				<li><a href="host.php">Create devices</a> for network</li>
				<li><a href="graphs_new.php">Create graphs</a> for your new devices</li>
				<li><a href="graph_view.php">View</a> your new graphs</li>
			</ul>
		</td>
		<td class="textArea" align="right" valign="top">
			<strong>Version 0.8.8a</strong>
		</td>
	</tr>
</table>

</div>
		</td>
	</tr>
</table>

