<div class="wp_hook_container">
<a href="?page=lbbch-options" class="hookClick <?php if($tab == ''){echo 'active';}?>">Hooks</a>
<a href="?page=lbbch-options&amp;tab=hook-logs" class="hookClick <?php if($tab == 'hook-logs'){echo 'active';}?>">Logs</a>
</div>
<table>
  <tr>
    <th>Hook Id</th>
		<th>Post Id</th>
		<th>Post Type</th>
		<th>Status</th>
		<th>Date</th>
  </tr>
	<?php foreach($data as $key => $val){?>
		<tr>
		  <td><?php echo $val["hook_id"]; ?></td>
			<td><?php echo $val["post_id"]; ?></td>
			<td><?php echo $val["post_type"]; ?></td>
			<td><?php echo response_codes($val["response_code"]); ?></td>
			<td><?php echo $val["date_added"]; ?></td>
		</tr>
	<?php } ?>
</table>
</div>