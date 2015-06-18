 <div class="main">

	<?if(Auth::is_logged_in()):?>
		<?= Form::open(); ?>
		<div class="form-row">
			<?= Form::label('url', 'Upload Image' ) ?>
			<?= Form::file('url') ?>
		</div>
		<div class="form-row">
			<?= Form::label('caption', 'Caption') ?>
			<?= Form::textarea('caption') ?>
		</div>
		<?= Form::submit('Submit') ?>
		<?= Form::close() ?>
	<?else:?>
		<a href="register.php"><h1>Must Create Account in order to upload</h1></a>
	<?endif;?>	
	


</div>	