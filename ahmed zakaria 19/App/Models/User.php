<?php
namespace App\Models;
class User extends Model
{
    const USERS_TABLE = 'users';

    static function show_user($user_id)
    {
        $users_table = DB_PREFIX . static::USERS_TABLE;


        $qry = "SELECT * FROM $users_table where id = $user_id";

        $user=self::assoc($qry);
        // $result = $db->query($qry);
        // $users = $result->fetch_all(MYSQLI_ASSOC);
         return $user;
    }


}