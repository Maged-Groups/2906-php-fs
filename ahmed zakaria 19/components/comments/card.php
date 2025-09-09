

    <div class="comments-container">
     

        <ul id="comments-list" class="comments-list">
            <li>
                <div class="comment-main-level">

                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="users.php?user_id=<?= $comment['user_id']; ?>"><?= $comment['name']; ?></a></h6>
                            <span>  <?= $comment['updated_at']; ?></span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            <?= $comment['comment']; ?>
                        </div>
                    </div>
                </div>
                <!-- replies -->
                <ul class="comments-list reply-list">
                   <?php foreach ($replies as $reply):?>
               <li>
                     <div class='comment-box'>
                                <div class='comment-head'>
                                             <h6 class='comment-name'><a ><?=$reply['name']?></a></h6>
                                             <span><?=$reply['updated_at']?></span>
                                            <!-- <i class="fa fa-reply"></i> 
                                             <i class="fa fa-heart"></i>  -->
                                </div>
                                <div class='comment-content'><?= $reply['reply']?></div>
                    </div>
                </li>
                   <?php endforeach?>
                    

                   
                </ul>
            </li>


        </ul>
    </div>
