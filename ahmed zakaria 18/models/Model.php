<?php
require_once 'load.php';

class Model{
    static function all($limit = 0)
    {
        $posts_table = DB_PREFIX . static::POSTS_TABLE;
        $users_table = DB_PREFIX . static::USERS_TABLE;
        $statuses_table = DB_PREFIX . static::POST_STATUSES;

        $qry = "SELECT $posts_table.id,title,$posts_table.user_id,body,pst_post_statuses.type,pst_users.name FROM $posts_table left outer join $statuses_table on $statuses_table.id= $posts_table.post_status_id left outer join $users_table on $users_table.id=$posts_table.user_id order by $posts_table.id desc ";
        if($limit >0)
        $qry.="LIMIT $limit";

        global $db;
        $result = $db->query($qry);
        $posts = $result->fetch_all(MYSQLI_ASSOC);
        return $posts;
    }

    static function show($id)
    {
        $posts_table = DB_PREFIX . static::POSTS_TABLE;
        $users_table = DB_PREFIX . static::USERS_TABLE;
        $statuses_table = DB_PREFIX . static::POST_STATUSES;

        $qry = "SELECT $posts_table.id,title,body,pst_post_statuses.type,pst_users.name FROM $posts_table left outer join $statuses_table on $statuses_table.id= $posts_table.post_status_id left outer join $users_table on $users_table.id=$posts_table.user_id where $posts_table.id=$id order by $posts_table.id desc ";
        global $db;
        $result = $db->query($qry);
        $post = $result->fetch_assoc();
        return $post;
    }

    static function count()
    {
        $table = DB_PREFIX . static::POSTS_TABLE;
        global $db;
        $qry = "select count(*) as total from $table";
        $result = $db->query($qry);
        $rows_count = $result->fetch_assoc();
        return $rows_count['total'];

    }
}