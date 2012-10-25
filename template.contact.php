<hr>
共<?php echo count($data);?>个服务监控项

<table>
<tr>
<th>名字</th>
<th>邮箱</th>
<th>手机</th>
<th>服务通知周期</th>
<th>服务通知命令</th>
</tr>
<?php

foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['contact_name']?></td>
<td><?php echo $i['email']?></td>
<td><?php echo $i['pager']?></td>
<td><?php echo $i['service_notification_period']?></td>
<td><?php echo $i['service_notification_commands']?></td>
</tr>
<?php
}
?>
</table>
