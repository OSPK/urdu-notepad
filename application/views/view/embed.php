<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$page_title = '';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta property="og:site_name" content="Urdu Notepad" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="UR" />
	<meta property="fb:app_id" content="522826074409311" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:description" content=" مصنف - <?php echo $name; ?> - Read, write Urdu at UrduNotepad.com" />
	<meta property="og:image" content="<?php echo base_url(); ?>static/images/logo.png"/>
<META NAME="Description" CONTENT="<?php echo $title; ?> - <?php echo $name; ?> | Urdu Notepad - Read, Write Urdu Online. Best online Urdu typing tool. Write Urdu on the web. Urdu text unicode writing. Write and save text online. ">
<META NAME="Title" CONTENT="<?php echo $page_title; ?>">
		<title><?php echo $page_title; ?></title>
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'static/js/', 
    'style_dir'  => 'static/styles/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => base_url(),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('reset.css');
$this->carabiner->css('fonts.css');
$this->carabiner->css('main.css');
$this->carabiner->css('embed.css');

$this->carabiner->display('css'); 

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	
	<style>
@font-face {
    font-family: NafeesWeb;
    src: url(<?php echo base_url(); ?>static/fonts/NafeesWeb.ttf);
}

body {font-family:"Jameel Noori Nastaleeq",NafeesWeb !important;font-size:1.2em !important;}
	</style>
	
	</head>
	<body>

<div class="paste">
    <p>Brought to you by <a href="<?php echo base_url(); ?>"><?php echo $this->config->item('site_name'); ?></a> / <a href="<?php echo site_url('view/' . $pid); ?>"> اس تحریر کے لنکس </a> /<a href="<?php echo site_url('lists'); ?>"> تازہ ترین </a>/ <a href="<?php echo site_url('trends'); ?>"> بہترین </a>/<a class="right" href="<?php echo site_url('view/raw/' . $pid); ?>" rel="nofollow" target="_blank"> View Raw </a><a class="right" href="<?php echo base_url(); ?>">/ نئی تحریر لکھیں /</a></p>
	<div class="text_formatted">

		<div class="container" dir="rtl" style="margin-right:20px;font-size:1.2em;">
		<h1><?php echo $title; ?></h1>
<span class="detail by"> مصنف - <?php echo $name; ?></span>
			<?php echo $paste; ?>
		</div>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b1b4a04d210096"></script>
<!-- AddThis Button END -->

	</div>
</div>

<?php

//stats
$this->load->view('defaults/stats');

?>
<script>
</script>
	</body>
</html>

