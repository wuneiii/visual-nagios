<hr>
共<?php echo count($data);?>各命令

<table>
<tr>
<th>名称</th>
<th>命令</th>
</tr>
<?php


foreach($data as $i){?>
<tr class="<?php echo $cnt%2==0?'odd':'even';$cnt++;?>">
<td><?php echo $i['command_name']?></td>

<td><pre><?php echo htmlspecialchars($i['command_line']);?></pre></td>
</tr>
<?php
}
?>
</table>
