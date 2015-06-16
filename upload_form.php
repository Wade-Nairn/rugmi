<div class="image">
	
	<?= Form::open_upload() ?>

		<div class="upload">

			<?= Form::label('file', 'File') ?>
			<?= Form::file() ?>

		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>
</div>
