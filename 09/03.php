<h1>While Do</h1>

<?php




function create_list(int $start, int $end)
{
    while ($start <= $end) {
        echo "<h4>$start</h4>";

        $start++;
    }
}

create_list(1, 10);