 <div class="main">
	
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
</div>	