<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECHO AND PRINT</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        div {
            border: 1px solid #333;
            margin: 10px;
        }

        h2 {
            background-color: #999;
        }

        h2,
        section {
            padding: 10px;
        }
    </style>

</head>

<body>

    <?php
    $title = 'I Love to Study PHP';
    $x = 5;
    $y = 4;
    $ok = true;
    $no = false;
    $arr = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'), 'd' => 11);
    $arr2 = ['a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'), 'd' => 11];
    ?>

    <div>
        <h2>ECHO</h2>
        <section>
            <?php
            echo $title . '<hr />';
            echo $x + $y . '<hr />';
            echo $ok . '<hr />';
            echo $no . '<hr />';
            echo $arr;
            echo $arr2;
            echo '<hr />';
            ?>
        </section>
    </div>

    <div>
        <h2>PRINT</h2>
        <section>
            <?php
            print $title . '<hr />';
            print $x + $y . '<hr />';
            print $ok . '<hr />';
            print $no . '<hr />';
            print $arr;
            print $arr2;
            print '<hr />';
            ?>
        </section>
    </div>

    <div>
        <h2>PRINT_R</h2>
        <section>
            <?php
            print_r($title . '<hr />');
            print_r($x + $y . '<hr />');
            print_r($ok . '<hr />');
            print_r($no . '<hr />');
            print_r($arr);
            print_r($arr2);
            echo '<hr />';
            ?>
        </section>
    </div>

    <div>
        <h2>VAR_DUMP</h2>
        <section>
            <?php
            var_dump($title);
            echo '<hr />';
            var_dump($x + $y);
            echo '<hr />';
            var_dump($ok);
            echo '<hr />';
            var_dump($no);
            echo '<hr />';
            var_dump($arr);
            var_dump($arr2);
            echo '<hr />';
            ?>
        </section>
    </div>


    <div>
        <pre>
       line 1
        line 2
        line 3
        line 4
        line                                    5
        line 6
       </pre>
    </div>
    <div>
        <h2>VAR_DUMP with pre</h2>
        <section>
            <pre>
                <?php
                var_dump($title);
                echo '<hr />';
                var_dump($x + $y);
                echo '<hr />';
                var_dump($ok);
                echo '<hr />';
                var_dump($no);
                echo '<hr />';
                var_dump($arr);
                var_dump($arr2);
                echo '<hr />';
                ?>
            </pre>
        </section>
    </div>

    <div>
        <h2>echo vs. print</h2>
        <section>

            <?php
            echo 'echo: Sample text output<hr />';
            print 'print: Sample text output<hr />';

            echo ('echo: Sample text output<hr />');
            print ('print: Sample text output<hr />');

            echo 'echo: Sample text output' . ' - ' . 'I Love PHP<hr />';
            print 'print: Sample text output' . ' - ' . 'I Love PHP<hr />';

            echo 'echo: Sample text output', ' - comma separated -  ', 'I Love PHP<hr />';
            // print 'Sample text output', ' - ', 'I Love PHP<hr />'; // Will not work
            
            // echo ('echo: Sample text output' , 'Extra' , '<hr />');// Will not work
            // print ('print: Sample text output','Extra','<hr />');// Will not work
            
            echo print 'echo -> print: Sample text output<hr />';
            // print echo 'Print -> echo: Sample text output<hr />';
            
            echo '<hr />';
            $res = print 'This is a message';
            echo '<hr />';

            var_dump($res);

            // Next block will not work (ECHO SHOULD BE THE FIRST WORD IN THE LINE OF CODE)
            // echo '<hr />';
            // $res = echo 'This is a message';
            // echo '<hr />';
            
            // var_dump($res);
            ?>

        </section>
    </div>

    <div>
        <h2>echo short method</h2>
        <section>
            <pre>
                <?php echo 'Line 1 by echo<hr />'; ?>
            </pre>
        </section>
        <section>
            <pre>
                <?= 'Line 2 by echo(Replace "php echo" with "=")<hr />'; ?>
                <?= '
                <pre>
                    Line 3 by echo
                    Line 4 by echo
                    Line 5 by echo
                    Line 6 by echo<hr />
                </pre>
                '; ?>
            </pre>
        </section>
    </div>

</body>

</html>