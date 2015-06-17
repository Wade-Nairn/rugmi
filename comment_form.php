
<div class="main"> 
  
  <?= Form::open() ?>
    
    <div class="row">
      
      <?= Form::label('content', 'Content') ?>
      <?= Form::textarea('content') ?>
    
    </div>
    
    <?= Form::submit() ?>
  
  <?= Form::close() ?>
  
  <? if($comment->id): ?>
  
    <a href="delete_comment.php?id=<?= $comment->id ?>">Delete</a>
    <a href="edit_comment.php?id=<?= $comment->id ?>">Edit</a>
  
  <? endif; ?>
  
</div>
