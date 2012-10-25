<hr>
共<?php echo count($data);?>个组

<table>
<tr>
<th>服务器组</th>
<th>成员</th>
</tr>
<?php

foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['hostgroup_name']?></td>
<td><?php 

$mbs = nagios_parse_hostgroup_members($i['members']);
echo "(".count($mbs).")";
foreach($mbs as $i){
	echo $i." ";
}

?></td>
</tr>
<?php
}
?>
</table>
