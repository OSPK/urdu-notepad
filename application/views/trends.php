<?php $this->load->view('defaults/header');?>
<div dir="rtl"><h1>سب سے زیادہ پڑھی جانے والی تحریریں</h1>

		<?php 
		function checkNum($num){
			return ($num%2) ? TRUE : FALSE;
		}
		$n = 0;		
		if(!empty($pastes)){ ?>
			<table class="recent">
				<tbody>
					<tr>
						<th class="title"></th>
						<th class="name"></th>
						<th class="hits"></th>
						<th class="time"></th>
					</tr>
		<?php	foreach($pastes as $paste) {
				if(checkNum($n) == TRUE) {
					$eo = "even";
				} else {
					$eo = "odd";
				}
				$n++;
		?>	

		<tr class="<?php echo $eo; ?>">
			<td class="first"><a href="<?php echo site_url("view/".$paste['pid']); ?>"><?php echo $paste['title']; ?></a></td>
			<td><?php echo $paste['name']; ?></td>
			<td><?php echo $paste['hits']; ?> لوگ </td>
			<td dir="ltr"><?php $p = explode(",", timespan($paste['created'], time())); echo $p[0]; ?> ago </td>
		</tr>

		<?php }?>
				</tbody>
			</table> 
		<?php } else { ?>
			<p>There have been no pastes :(</p>
		<?php }?>
</div>
<?php echo $pages; ?>
<div class="spacer"></div>
<?php $this->load->view('defaults/footer');?>

