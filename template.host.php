<hr>
共<?php echo count($data);?>台服务器

<table>
<tr>
<th>机器名</th>
<th>别名</th>
<th>ip地址</th>
</tr>
<?php

foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['host_name']?></td>
<td><?php echo $i['alias']?></td>
<td><?php echo $i['address']?></td>
</tr>
<?php
}
?>
</table>
