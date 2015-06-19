

<div class="main">
  <div class="single-image">
    
      <img src="<?= $image->url ?>" alt="">

            <?= Form::open() ?>
    
                <div class="row"> 
                  <?= Form::label('content', 'Comment') ?>
                  <?= Form::textarea('content') ?>
                </div>
                
              <?= Form::submit('Add Comment') ?>
              <?= Form::close() ?>    

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
                              <? if($comment->user_id == Auth::user_id() || $image->user_id == Auth::user_id()): ?>
                                <a href="edit_comment.php?id=<?= $comment->id ?>">Edit Comment</a>
                                <a href="delete_comment.php?id=<?= $comment->id ?>&image_id=<?= $image->id ?>" class="delete">Delete Comment</a>
                              <? endif; ?>
                              </div>
                          <li>

                        </ul>
                      <? endif; ?>
                    <? endif; ?>
                  <? endforeach; ?> 
                
              </div>
              </div>
                      
                