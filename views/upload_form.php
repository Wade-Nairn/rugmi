 <div class="main">

	<?if(Auth::is_logged_in()):?>
		
		<?= Form::open_upload() ?>
		
		<div class="form-row">
			<?= Form::label('file', 'Upload Image' ) ?>
			<?= Form::file() ?>
		</div>
		
		<div class="form-row">
			<?= Form::label('caption', 'Caption') ?>
			<?= Form::textarea('caption') ?>
		</div>
		
		<?= Form::submit('Upload') ?>
		
		<?= Form::close() ?>

	<?else:?>
		<a href="register.php"><h1>Must Create Account in order to upload</h1></a>
	<?endif;?>	
	


</div>	