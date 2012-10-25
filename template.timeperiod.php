<hr>
共<?php echo count($data);?>台服务器

<table>
<tr>
<td>时间区间</td>
<td>别名</td>
<td>周一</td>
<td>周二</td>
<td>周三</td>
<td>周四</td>
<td>周五</td>
<td>周六</td>
<td>周日</td>
</tr>
<?php

foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['timeperiod_name']?></td>
<td><?php echo $i['alise']?></td>
<td><?php echo $i['monday']?></td>
<td><?php echo $i['tuesday']?></td>
<td><?php echo $i['wednesday']?></td>
<td><?php echo $i['thursday']?></td>
<td><?php echo $i['friday']?></td>
<td><?php echo $i['saturday']?></td>
<td><?php echo $i['sunday']?></td>
</tr>
<?php
}
?>
</table>
