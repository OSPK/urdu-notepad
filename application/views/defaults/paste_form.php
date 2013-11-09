<?php echo validation_errors(); ?>


<div style="color:#ef303e; font-size:20px;"><a style="color:#ef303e;"  <?php if($l == "about"){ echo 'class="active"'; }?> href="<?php echo site_url('about'); ?>" title="Download Font">Please download the required font for this to work perfectly. Don't worry, it will only take 2 minutes!</a></div>
<div class="form_wrapper margin" dir="rtl" >
	<form action="<?php echo base_url(); ?>" method="post">

		<h1><?php if(!isset($page['title'])){ ?>
			نئی تحریر لکھیں
		<?php } else { ?>
			<?php echo $page['title']; ?>
		<?php } ?></h1>
		<p class="explain border"><?php if(!isset($page['instructions'])){ ?>
			یہاں پر آپ نیا نوٹ لکھ سکتے ہیں
		<?php } else { ?>
			<?php echo $page['instructions']; ?>
		<?php } ?></p>								
		
		<div class="item_group">								
			<div class="item">
				<label for="name">مصنف
					<span class="instruction">آپ کا کیا نام ہے؟</span>
				</label>
				
				<?php $set = array('name' => 'name','dir' => 'rtl', 'id' => 'name', 'value' => $name_set, 'maxlength' => '32', 'tabindex' => '1');
				echo form_input($set);?>
			</div>
			
			<div class="item">
				<label for="title">عنوان
					<span class="instruction">اپنی تحریر کا عنوان لکھئے</span>
				</label>
				
				<input value="<?php if(isset($title_set)){ echo $title_set; }?>" width="400px" type="text" id="title" name="title" tabindex="2" maxlength="132" dir="rtl" />
			</div>
		<div class="item last">
				<label for="lang">زبان
					<span class="instruction">تحریر کی زبان</span>
				</label>
				
				<?php $lang_extra = 'id="lang" class="select" tabindex="3"'; echo form_dropdown('lang', $languages, $lang_set, $lang_extra); ?>
			</div>																	
											
		</div>							
		
		<div class="item">
			<label for="paste" dir="rtl" style="float:right;">تحریر
				<span class="instruction" style="width: 800px !important;color: rgb(51, 51, 51);font-size: 15px;margin-right: 20px;">Hint: Type "<span style="color:red;">Amjad, kya tmhara dmagh tou nhin kharab?</span>" and press space / Wait for the page to load completely before writing.</span>
                <span class="instruction"><a href="#" id="enable_codemirror"></a></span>
			</label>
			
			<textarea id="code" name="code" cols="40" rows="7" tabindex="4" lang="ur" dir="rtl"><?php if(isset($paste_set)){ echo $paste_set; }?></textarea>
		</div>																											
		
		<div class="item_groupbelow">
<!--			<div class="item">
				<label for="snipurl">چھوٹا یو آر ایل
					<span class="instruction"></span>
				</label>
				<div class="text_beside">
					<?php
						$set = array('name' => 'snipurl', 'id' => 'snipurl', 'value' => '1', 'tabindex' => '5', 'checked' => $snipurl_set);
						echo form_checkbox($set);
					?>
				</div>
			</div> -->
		
			<div class="item">
				<label for="private">پوشیدہ
					<span class="instruction">کسی لسٹ میں نظر نہ آے</span>
				</label>
				<div class="text_beside">
					<?php
						$set = array('name' => 'private', 'id' => 'private', 'tabindex' => '6', 'value' => '1', 'checked' => $private_set);
                        if ($this->config->item('private_only')){
                            $set['checked'] = 1;
                            $set['disabled'] = 'disabled';
                        }
						echo form_checkbox($set);
					?>
				</div>
			</div>
		
			<div class="item">
				<label for="expire">ڈیلیٹ کب کیا جائے؟
					<span class="instruction"></span>
				</label>
				<?php 
					$expire_extra = 'id="expire" class="select" tabindex="7"';
					$options = array(
									"0" => "Keep Forever",
									"30" => "30 Minutes",
									"60" => "1 hour",
									"360" => "6 Hours",
									"720" => "12 Hours",
									"1440" => "1 Day",
									"10080" => "1 Week",
									"40320" => "4 Weeks"
								);
				echo form_dropdown('expire', $options, $expire_set, $expire_extra); ?>
			</div>
		</div>
		
<?php if($reply){ ?>
		<input type="hidden" value="<?php echo $reply; ?>" name="reply" />
<?php } ?>

<?php if($this->config->item('enable_captcha')){ ?>
		<div class="item_group">
			<div class="item item_captcha">
				<label for="captcha">Spam Protection
					<span class="instruction">Type in the characters displayed in the picture.</span>
				</label>
                <img class="captcha" src="<?php echo site_url('view/captcha'); ?>?<?php echo date('U', mktime()); ?>" alt="captcha" width="110" height="40" />
                <input value="<?php if(isset($captcha_set)){ echo $captcha_set; }?>" type="text" id="captcha" name="captcha" tabindex="2" maxlength="32" />
			</div>
		</div>
<?php } ?>

<?php
    $set = array('name' => 'email', 'hidden' => 'hidden');
    echo form_input($set);
?>

		<div><button type="submit" value="submit" name="submit">Save</button></div>
		<div class="spacer"></div>
	</form>
</div>
