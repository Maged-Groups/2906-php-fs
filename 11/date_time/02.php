<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function dnd($item, $die = false)
    {
        echo '<pre>';
        var_dump($item);
        echo '</pre>';
    }

    function h2($title)
    {
        echo '<h2>' . $title . '</h2>';
    }

    h2('checkdate');
    dnd(checkdate(2, 8, 2022)); // true - February 8, 2022
    dnd(checkdate(21, 8, 2022)); // false no month 21

    h2('Current Date and Time');
    $date = date_create();
    dnd($date);

    h2('date_interval_create_from_date_string');
    $date_interval = date_interval_create_from_date_string('1 day, 1 second 1 min, 1 hours, 1 years 1 month'); // no order required
    dnd($date_interval);

    h2('Date after Interval');
    $new_date = date_add($date, $date_interval); // add date_interval to date
    dnd($new_date);


    h2('date_create_from_format');
    $date_f = date_create_from_format("j-M-Y", '20-Apr-1982');
    dnd($date_f);

    h2('date_format');
    dnd(date_format($date_f, "Y/m/d"));

    h2('date_default_timezone_get');
    dnd(date_default_timezone_get());

    date_default_timezone_set("Africa/cairo");
    h2('Date after set default timezone get');
    dnd(date_default_timezone_get());
    date_default_timezone_set("UTC");

    date_default_timezone_set('Africa/Cairo');
    h2('mktime');
    // $mktime = mktime(0, 0, 0, 9, 14, 2011);
    $mktime = mktime(0, 0, 0, 10, 12, 2000);
    dnd($mktime);

    h2('created date string from mktime');
    $created_date_from_mktime = date('M d y H:i:s', $mktime);
    dnd($created_date_from_mktime);

    h2('created date string from today');
    $created_date_from_today = date('M d y H:i:s');
    dnd($created_date_from_today);

    h2('created date object');
    $birth_date = date_create($created_date_from_mktime);
    $today = date_create();
    $unix = date_create('1-1-1970');
    h2('Birth_date');
    dnd($birth_date);
    h2('Today');
    dnd($today);
    h2('Unix Date 1970');
    dnd($unix);

    h2('Diff between today and unix date 1970');
    $diff = date_diff($today, $unix);
    dnd($diff);
    h2('Years between today and unix date 1970');
    dnd($diff->y);

    h2('Diff between birthdate and today');
    $diff_age = date_diff($today, $birth_date);
    dnd($diff_age);
    h2('Age in Years');
    dnd($diff_age->y);

    h2('Format Today');
    $today_str = $today->format('Y-m-d H:i:s');
    $unix_str = $unix->format('Y-m-d H:i:s');
    dnd($today_str);
    dnd($unix_str);

    $today_time = strtotime($today_str);
    $unix_time = strtotime($unix_str);
    dnd($today_time);
    dnd($unix_time);

    $diff_in_seconds = $today_time - $unix_time;
    dnd($diff_in_seconds);
    // dnd($diff->format('Y-m-d H:i:s'));
    ?>
</body>

</html>