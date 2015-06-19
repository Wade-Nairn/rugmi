
<div class="main">
	
	

	
	<? if(count($images->items) == 0):  ?>
			<p>There are no images</p>
	<? else: ?>	
		<ul class="block">
		
			<? foreach($images->items as $image):?>
				
				<li>
					<div class="image">
						<a href="image_page.php?id=<?=$image->id ?>"><img src="<?= $image->url ?>" alt=""></a>
							<p><?= $image->caption ?></p>
					</div>	
											
				</li>

			<? endforeach; ?>
		
		</ul>

	<? endif; ?>

	


</div>