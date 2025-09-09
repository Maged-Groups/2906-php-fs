<?php
class Reaction
{
    const REACTIONS_TABLE = 'reactions';
    const REACTION_TYPES_TABLE = 'reaction_types';
    static function all($post_id)
    {
        $reactions_table = DB_PREFIX . static::REACTIONS_TABLE;
        $reaction_types_table = DB_PREFIX . static::REACTION_TYPES_TABLE;
        $qry = "SELECT $reaction_types_table .type, COUNT(*) as count FROM $reactions_table left outer join $reaction_types_table  on $reactions_table.reaction_type_id=$reaction_types_table .id WHERE post_id = $post_id GROUP BY type";
        global $db;
        $result = $db->query($qry);
        $reactions = $result->fetch_all(MYSQLI_ASSOC);
        // $reactions = [];
        // while ($row = $result->fetch_assoc()) {
        //     $reactions[$row['type']] = $row['count'];
        // }
        return $reactions;
    }

}