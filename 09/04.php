<h1>Do While</h1>

<?php

function create_list(int $start, int $end)
{
    do {
        echo "<h4>$start</h4>";

        $start++;
    } while ($start <= $end);
}

create_list(1, 10);