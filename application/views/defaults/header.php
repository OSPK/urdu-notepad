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
    <meta property="fb:app_id" content="459117500798602" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content=" مصنف - <?php echo $name; ?> - Read, write Urdu at UrduNotepad.com" />
    <meta property="og:image" content="<?php echo base_url(); ?>static/images/logo.png"/>
<meta name="google-site-verification" content="heZP7OQp99uSlU-I7jFecsJtJm7RJvlFN1Un-tK24vs" />
<META NAME="Description" CONTENT="<?php echo $title; ?> - <?php echo $name; ?> | Urdu Notepad - Read, Write Urdu Online. Best online Urdu typing tool. Write Urdu on the web. Urdu text unicode writing. Write and save text online. ">
<META NAME="Title" CONTENT="<?php echo $page_title; ?>">
        <title><?php echo $page_title; ?></title>


<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'static/js/', 
    'style_dir'  => 'static/styles/',
    'cache_dir'  => 'static/asset/',
    'base_uri'   => base_url(),
    'combine'    => true,
    'dev'        => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('reset.css');
$this->carabiner->css('fonts.css');
$this->carabiner->css('main.css');
$this->carabiner->css('print.css', 'print');
$this->carabiner->css('codemirror.css');
$this->carabiner->css('diff.css');

$this->carabiner->display('css'); 

?>
<style>
@font-face {
    font-family: NafeesWeb;
    src: url(<?php echo base_url(); ?>static/fonts/NafeesWeb.ttf);
}
    textarea#code
           {font-family:"Jameel Noori Nastaleeq",NafeesWeb !important;font-size:1.4em !important;}

body {font-family:"Jameel Noori Nastaleeq",NafeesWeb !important;font-size:1.4em !important;}

.fbFeedbackPost .postText {
    line-height: 20px;
    font-family: Jameel Noori Nastaleeq, NafeesWeb !important;
    font-size: 25px;}

.cse .gsc-control-cse, .gsc-control-cse {
    background-color: rgba(229, 188, 122, 0) !important;
    border: medium none rgb(229, 188, 122) !important;
}
.nicEdit-main {background-color:white;}

input.gsc-input {
    font-family: Jameel Noori Nastaleeq,Nafeesweb !important;
    font-size: 20px;
}

.gsc-input-box {
    height: 35px !important;
}

.gsc-table-cell-snippet-close, .gs-promotion-text-cell {
    font-family: Jameel Noori Nastaleeq, Nafeesweb;
    text-align: right;

}

cse .gs-result .gs-snippet, .gs-result .gs-snippet, .cse .gs-spelling-original, .gs-spelling-original {
    text-align: right;
}
</style>
    <script type="text/javascript">
    //<![CDATA[
    var base_url = '<?php echo base_url(); ?>';
    //]]>
    </script>
    
    </head>
    <body>
        <div id="container">
            <div class="container">         
                <div class="header">
                    <h1><a href="<?php echo base_url(); ?>" class="title" style="font-family:Verdana;font-weight:300;">Urdu Notepad</a></h1>
                    <ul class="tabs">
                        <?php $l = $this->uri->segment(1)?>
                        <?php if(! $this->config->item('private_only')){ ?>
                        <li><a <?php if($l == "lists"){ echo 'class="active"'; }?> href="<?php echo site_url('lists'); ?>" title="Recent Notes">تازہ ترین</a></li>
                        <li><a <?php if($l == "trends"){ echo 'class="active"'; }?> href="<?php echo site_url('trends'); ?>" title="Trending Notes">بہترین</a></li>
<?php } ?>
                        <li><a  <?php if($l == "about"){ echo 'class="active"'; }?> href="<?php echo site_url('about'); ?>" title="About">ہمارے بارے میں</a></li>
<li><a <?php if($l == ""){ echo 'class="active"'; }?> href="<?php echo base_url()?>" title="Create A New Note">نئی تحریر</a></li>
                        <?php
                            if ($this->config->item('require_auth') ){
                                if ($this->auth_ldap->is_authenticated()){
                                    echo "<li><a href=" . site_url('auth/logout') . ' title="Logout">Logout</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
                <div class="content">
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
                    <div class="container">
                        <?php if(isset($status_message)){?>
                        <div class="message success change">
                            <div class="container">
                                <?php echo $status_message; ?>

                            </div>
                        </div>
                        <?php }?>   
    
<script>
  (function() {
    var cx = '001672719662798549273:dgatccwytp4';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
