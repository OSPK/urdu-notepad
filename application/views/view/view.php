<?php $this->load->view('defaults/header'); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ur_PK/all.js#xfbml=1&appId=459117500798602";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<?php if(isset($insert)){
	echo $insert;
}?>

<div class="paste_info">
	<div class="info">
		<h1 class="pagetitle right" dir="rtl" ><?php echo $title; ?></h1>
		<div class="meta">
			<span class="detail by" dir="rtl"> مصنف - <?php echo $name; ?> , <?php $p = explode(',', timespan($created, time())); echo $p[0]?>  پہلے,  <?php echo $hits; ?> بار پڑھا جا چکا ہے </span>
			<?php if(isset($inreply)){?><span class="detail by">This note is a reply to <a href="<?php echo $inreply['url']?>"><?php echo $inreply['title']; ?></a> by <?php echo $inreply['name']; ?></span><?php }?>
			<div class="spacer"></div>
			<span class="detail" dir="rtl"><a class="control" href="<?php echo site_url("view/embed/".$pid); ?>">View Full-Screen</a></span>
			<span class="detail"><span class="item">URL </span><a href="<?php echo $url; ?>"><?php echo $url; ?></a></span>
			<?php if(!empty($snipurl)){?>
				<span class="detail"><span class="item">Shorturl </span><a href="<?php echo $snipurl; ?>"><?php echo htmlspecialchars($snipurl) ?></a></span>
			<?php }?>
			<span class="detail"><span class="item">Embed </span><input id="embed_field" type="text" value="<?php echo htmlspecialchars('<iframe src="' . site_url('view/embed/' . $pid) . '" style="border:none;width:100%"></iframe>'); ?>" /></span>
			<div class="spacer"></div>
			
			<span class="detail"><a class="control" rel="nofollow" href="<?php echo site_url("view/download/".$pid); ?>">Download Note</a> or <a class="control" rel="nofollow" href="<?php echo site_url("view/raw/".$pid); ?>">View Raw</a></span>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>



<div class="spacer"></div>

<div class="paste">

	<div class="text_formatted">
		<div class="container" dir="rtl" style="margin-right:20px;font-size:1.2em;">
		<h1><?php echo $title; ?></h1><br/ >
			<?php echo $paste; ?>
		</div>

	</div>
    
    

<div class="fb-comments" data-href="<?php echo $url; ?>" data-width="890" data-num-posts="2" dir="rtl"></div>               
</div>

<?php $this->load->view('view/view_footer'); ?>

