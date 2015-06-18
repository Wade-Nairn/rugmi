<div class="main">

	
	<?= Form::open() ?>
	<div class="form-row">
		<?= Form::label('caption', 'Edit Caption') ?>
		<?= Form::textarea('caption', $image->caption) ?>
	</div>
	<?= Form::submit('Submit') ?>
	<?= Form::close() ?>

</div>