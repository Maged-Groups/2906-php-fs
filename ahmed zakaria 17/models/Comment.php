<?php
class Comment{
    const COMMENTS_TABLE = 'comments';
    const USERS_TABLE = 'users';


    static function show($post_id)
    {
        $comments_table = DB_PREFIX . static::COMMENTS_TABLE;
        $users_table = DB_PREFIX . static::USERS_TABLE;
       
        $qry = "SELECT `comment`,`name` ,$comments_table.updated_at,$comments_table.id FROM $comments_table left outer join  $users_table on $comments_table.user_id =  $users_table.id where post_id=$post_id;";
           global $db;
        $result = $db->query($qry);
        $comments = $result->fetch_all(MYSQLI_ASSOC);
        return $comments;
    }

    

    static function count($post_id)
    {
        $table = DB_PREFIX . static::COMMENTS_TABLE;
        global $db;
        $qry = "select count(*) as total from $table where post_id=$post_id";
        $result = $db->query($qry);
        $comments_count = $result->fetch_assoc();
        return $comments_count['total'];

    }
}