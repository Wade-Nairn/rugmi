<div>
	
	<h1>Register</h1>

	<?=Form::open()?>
			
		<div class="row">
			
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username')?>		
		
		</div>
			
		<div class="row">
	
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password')?>		
	
		</div>

		<?=Form::submit('Create User')?>

	<?=Form::close()?>

</div>