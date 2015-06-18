<div class="main">
	
	<div class="upload">
		<a href="upload_image.php">Upload New Image</a>
	</div>
	
	<ul>
		<li>
			<? if($images->items == 0):  ?>
			<p>You have no images</p>
		</li>	

	<? else: ?>
		<li>

			<?while($images->items as $image):?>
					<img src="<?= $image->url ?>" alt="">
					<p><?=$image->caption?></p>
					
					<a href="edit_image">Edit Image</a>
					
					<a href="delete_image">Delete Image</a>
			<?endwhile;?>		
		</li>

	<? endif; ?>
	</ul>


</div>