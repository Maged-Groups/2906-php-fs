<pre>
    <?php

    $calc_total = 0;

    function calculateSpeed(int $distance, int $time): float
    {

        global $calc_total;

        $calc_total++;

        return $distance / $time;
    }


    function report(): void
    {
        global $calc_total;

        echo "The Total of the calculations are $calc_total<hr />";

    }

    $speed_1 = calculateSpeed(1000, 211);
    $speed_1 = calculateSpeed(1000, 211);
    $speed_1 = calculateSpeed(1000, 211);
    $speed_1 = calculateSpeed(1000, 211);
    $speed_1 = calculateSpeed(1000, 211);

    var_dump($speed_1);


    function x(int $c, int $i)
    {
        return $c + $i;
    }


