<hr>
共<?php echo count($data);?>个服务监控项

<table>
<tr>
<td>监控名</td>
<td>命令</td>
<td>被监控组</td>
</tr>
<?php

foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['service_description']?></td>
<td><?php echo $i['check_command']?></td>
<td><?php echo $i['hostgroup_name']?></td>
</tr>
<?php
}
?>
</table>
