<?php
class User
{
    const USERS_TABLE = 'users';

    static function all($limit = 0)
    {
        $users_table = DB_PREFIX . static::USERS_TABLE;


        $qry = "SELECT * FROM $users_table order by 'name'";
        if ($limit > 0)
            $qry .= "LIMIT $limit";

        global $db;
        $result = $db->query($qry);
        $users = $result->fetch_all(MYSQLI_ASSOC);
        return $users;
    }


}