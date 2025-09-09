<style>
    .parent {
        display: flex;
        perspective: 1000px;
        padding: 20px 50px;
        flex-wrap: wrap;
              width: 320px;

    }
</style>
<?php
 require_once 'load.php';

use App\Models\{
    Post,
    Reaction,
    Comment
    };
    
$posts = Post::all();
$rows_count=Post::count();

foreach ($posts as $post) {
    
    $comments_count=Comment::count_posts($post['id']);
    $reactions = Reaction::all_reactions($post['id']);
  
        "<div class='parent'>".
  require 'components/posts/card.php';"
  </div>";
  }