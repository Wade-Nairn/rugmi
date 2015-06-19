<div class="main">
	
	<? if(count($images->items) == 0):  ?>
			<p>There are no images</p>
	<? else: ?>	
		<ul>
		
			<? foreach($images->items as $image):?>
				
				<li>
					<div class="image">
						<img src="<?= $image->url ?>" alt="">
							<p><?= $image->caption ?></p>
					</div>	
							<div class="comments">
									<?foreach($comments->items as $comment): ?>
										<? if($comment->image_id == $image->id): ?>
											<? if(count($comments->items) == 0): ?>
													<p>No comments</p>
												<? else: ?>

												<ul class="comment-list">
													
													<li>
															<h2><?= $comment->content ?></h2>
															<? if($comment->user_id == Auth::user_id()): ?>
																<a href="edit_comment.php?id=<?= $comment->id ?>">Edit Comment</a>
																<a href="delete_comment.php?id=<?= $comment->id ?>" class="delete">Delete Comment</a>
															<? endif; ?>
													<li>

													

												</ul>
											<? endif; ?>
										<? endif; ?>
									<? endforeach; ?>	
								<? if(Auth::user_id() ): ?>
									<a href="add_comment.php?id=<?=$image->id ?>">Add Comment</a>
								<? endif; ?>

							</div>
											
									
				</li>

			<? endforeach; ?>
		
		</ul>

	<? endif; ?>

	


</div>