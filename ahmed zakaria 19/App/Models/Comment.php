<?php
namespace App\Models;


require_once 'load.php';
class Comment extends Model
{
    const COMMENTS_TABLE = 'comments';
    const USERS_TABLE = 'users';


    static function show_comment($post_id)
    {
        $comments_table = DB_PREFIX . static::COMMENTS_TABLE;
        $users_table = DB_PREFIX . static::USERS_TABLE;

        $qry = "SELECT `comment`,`name` ,$comments_table.user_id,$comments_table.updated_at,$comments_table.id FROM $comments_table left outer join  $users_table on $comments_table.user_id =  $users_table.id where post_id=$post_id;";
        $comments=self::all_assoc($qry);
        // $result = $db->query($qry);
        // $comments = $result->fetch_all(MYSQLI_ASSOC);
        return $comments;
    }



    static function count_posts($post_id)
    {
        $table = DB_PREFIX . static::COMMENTS_TABLE;
     
        $qry = "select count(*) as total from $table where post_id=$post_id";
       
        $comments_count = self::assoc($qry);
        return $comments_count['total'];

    }
}