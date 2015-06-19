
<div class="main">

		<div class="single-image">
			<img src="<?= $image->url ?>" alt="">


							<div class="comments">
									<?foreach($comments->items as $comment): ?>
										<? if($comment->image_id == $image->id): ?>
											<? if(count($comments->items) == 0): ?>
													<p>No comments</p>
												<? else: ?>

												<ul class="comment-list">
													
													<li>
														<p><?= $comment->content ?></p>
														<div class="comment-buttons">
															<? if($comment->user_id == Auth::user_id()): ?>
																<a href="edit_comment.php?id=<?= $comment->id ?>">Edit Comment</a>
															<? endif; ?>
															<? if($comment->user_id == Auth::user_id() || $image->user_id == Auth::user_id()): ?>	
																<a href="delete_comment.php?id=<?= $comment->id ?>&image_id=<?= $image->id ?>" class="delete">Delete Comment</a>
															<? endif; ?>
														</div>
													</li>

													

												</ul>
											<? endif; ?>
										<? endif; ?>
									<? endforeach; ?>
								</div>

								<? if(Auth::user_id() ): ?>
									<a href="add_comment.php?id=<?=$image->id ?>" class="add-comment">Add Comment</a>
								<? endif; ?>

							
											
									
		</div>

</div>