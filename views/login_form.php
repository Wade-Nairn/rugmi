<div>
		
	<h1>Login</h1>

	<?=Form::open()?>
			
		<div class="row">
				
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username')?>		
			
		</div>
			
		<div class="row">
				
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password')?>		
			
		</div>

		<?=Form::submit('Log on')?>

	<?=Form::close()?>

</div>