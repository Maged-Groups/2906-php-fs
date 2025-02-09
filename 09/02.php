<h1>For Loop</h1>
<?php




function create_list(int $start, int $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "<h4>$i</h4>";
    }
}

create_list(1, 10);