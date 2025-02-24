<style>
    pre {
        background-color: #112;
        color: #6f3;
        padding: 10px;
        overflow: auto;
    }

    h6 {
        color: #f00;
    }

    p {
        background-color: #eef;
        padding: 15px;
    }

    span {
        color: #561;
    }
</style>

<a href="https://www.php.net/manual/en/datetime.format.php" target="_blank">Reference</a>

<?php

function dd($str, $itm)
{
    echo '<pre>';

    echo "<h2>$str</h2>";

    echo '<h6>Evaluated to</h6>';

    var_dump($itm);

    echo '</pre>';
}

function title($title)
{
    echo "<p>$title</p>";
}

function note($text)
{
    echo "<span>$text</span>";
}

title('DAY Formats');

dd('Leading Zero - d -> 01 02 03: ', date('d',)); 
dd('No Leading Zero - j -> 1 2 3: ', date('j'));
dd('Day Name - l: ', date('l'));
dd('Short Day Name - D: ', date('D'));
dd('Day of the Week Start from Monday - N: ', date('N'));
dd('Day of the Week Start from Sunday(0) - w: ', date('w'));
dd('st, nd, rd, th - S: ', date('S'));
dd('Day of the Year - z: ', date('z'));


title('WEEK FORMATS');

dd('W: ', date('W'));


title('MONTH FORMAT');

dd('Month Name - F: ', date('F'));
dd('Month Name Short - M: ', date('M'));
dd('Month Number Leading Zero- m: ', date('m'));
dd('Month Number No Leading Zero - n: ', date('n'));
dd('Number of days in the given month - t: ', date('t'));


title('YEAR FORMAT');

dd('1 if it is a leap year, 0 otherwise - L: ', date('L'));
dd('4 Digits Year - Y: ', date('Y'));
dd('2 Digits Year - y: ', date('y'));


title('TIME FORMAT');

dd('Lowercase am or pm - a: ', date('a'));
dd('Uppercase AM or PM - A: ', date('A'));
dd('12-hour format of an hour no leading zeros - g: ', date('g'));
dd('12-hour format of an hour with leading zeros - h: ', date('h'));
dd('24-hour format of an hour no leading zeros - G: ', date('G'));
dd('12-hour format of an hour with leading zeros - H: ', date('H'));
dd('Minutes with leading zeros - i: ', date('i'));
dd('Seconds with leading zeros - s: ', date('s'));
dd('Milliseconds - v: ', date('v'));
dd('Microseconds-  u: ', date('u'));
dd('Timezone identifier - e: ', date('e'));


title('EXAMPLES');

dd('l,  M d, Y: ', date('l, M d, Y'));
dd('d M Y: ', date('d M Y'));
dd('His: ', date('H:i:s'));

title('time');
dd('time', time());
