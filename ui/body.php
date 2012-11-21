<tr>

                <td valign="top" colspan="1" rowspan="2" style="width:135px;padding:5px;border-right:#aaaaaa 1px solid;" bgcolor='#f5f5f5'>
                        <table bgcolor="#f5f5f5" width="100%" cellpadding="1" cellspacing="0" border="0" style="width:135px;">
                                <tr><td width='100%'>
                                        <table cellpadding='3' cellspacing='0' border='0' width='100%'>
<?php
	foreach($left_menu as $menu => $item){
	?>
		<tr><td class='textMenuHeader'>
            <?php echo $menu;?>
        </td></tr>
		<?php
			if(@is_array($item) && count($item)!=0){
				foreach($item as $action => $desc){
				?>
				<tr><td class='textMenuItem' style='background-image:url("<?php echo UI_STATIC;?>menu_line.gif");'>
					<a href="<?php echo Url($header,$action)?>"><?php echo $desc?></a>
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
                        <p style="width:135px;" align="center">
                            <a href='/cacti/about.php'><img src="/cacti/images/cacti_logo.gif" border="0"></a>
                        </p>
                        <img src="/cacti/images/transparent_line.gif" style="height:5px;width:135px;" border="0"><br>
                </td>


		<td width="100%" colspan="2" valign="top" style="padding: 5px; border-right: #aaaaaa 1px solid;">
          <div style='position:relative;' id='main'><?php echo $right_main_body;?></div>
		</td>
	</tr>
</table>

