<?php
session_start();

$old = $_SESSION['old'] ?? [];

// $old['tags'] = ['ABC', 'EEE', 'ERR'];

$main_image_path = $_SESSION['main_image'] ?? [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .body {
            background-color: tomato;
            border: solid 1px;
            padding: 10px;
        }

        img {
            height: 100%;
            width: 100%;
            margin: auto;
            border: solid 1px;
            padding: 5px;
            max-width: 25%;
        }

        .post>div {
            padding: 5px;
        }

        .post {
            padding: 10px;
            border: 4px solid red;
            max-width: 700px;
        }

        .title {
            color: midnightblue;
            font-size: 20px;
            background-color: cyan;
        }

        .tags {
            display: flex;
            gap: 10px;

            .tag {
                padding: 2px 5px;
                border: solid #340;
            }
        }
    </style>

    </style>
</head>

<body>
    <div class="posts">
        <?php

        if (empty($old)) {
            echo '<p>You do not have any posts yet <a href="/">Click here to add your first post</a></p>';
        } else {
            ?>
            <div class="post">
                <div>
                    <h4>Tiltle</h4>
                    <span class="title"><?= @$old['title']; ?></span>
                    <h4>Type :</h4>
                    <span class="type"> <?= match (@$old['type']) {
                        '1' => 'Sports',
                        '2' => 'News',
                        '3' => 'Art',
                        '4' => 'Cars',
                        default => false
                    }; ?></span>
                </div>
                <div>
                    <h4>Body</h4>
                    <div class="body"><?= @$old['body'] ?></div>
                    <div class="main_image"> <?= "<img src='$main_image_path' alt='' />" ?> </div>
                </div>


                <div>
                    <h4>Status</h4>
                    <div class="status"> <?= match (@$old['post_status_id']) {
                        '1' => 'Pending',
                        '2' => 'Published',
                        '3' => 'Archived',
                        default => false
                    };
                    ?></div>
                    <h4>Tags</h4>
                    <div class="tags">
                        <?php
                        if (isset($old['tags'])) {
                            echo implode(' - ', $old['tags']);
                            foreach ($old['tags'] as $tag) {
                                echo "<span class='tag'>$tag</span>";
                            }
                        } else {
                            echo '<p class="warning">No tags for this post</p>';
                        }
                        ?>

                    </div>
                </div>
                <?php if (isset($_SESSION['images'])) {
                    foreach ($_SESSION['images'] as $i => $m_image) {
                        echo "<div class='mini_images'><img src='$m_image' alt=''></div>";
                    }
                } ?>
            </div>
            <?php
        }
        ?>
    </div>

</body>

</html>