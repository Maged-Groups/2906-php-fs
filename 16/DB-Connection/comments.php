<?php
require_once 'load.php';

$sql = "SELECT 
    flo_posts.id AS post_id,
    flo_posts.title AS post_title,
    flo_posts.body AS post_body,
    COUNT(DISTINCT flo_comments.id) AS number_of_comments,
    SUM(CASE WHEN flo_reaction_types.type = 'Like' THEN 1 ELSE 0 END) AS like_count,
    SUM(CASE WHEN flo_reaction_types.type = 'Love' THEN 1 ELSE 0 END) AS love_count,
    SUM(CASE WHEN flo_reaction_types.type = 'Care' THEN 1 ELSE 0 END) AS care_count,
    SUM(CASE WHEN flo_reaction_types.type = 'Happy' THEN 1 ELSE 0 END) AS happy_count,
    SUM(CASE WHEN flo_reaction_types.type = 'Sad' THEN 1 ELSE 0 END) AS sad_count,
    SUM(CASE WHEN flo_reaction_types.type = 'Laugh' THEN 1 ELSE 0 END) AS laugh_count
FROM flo_posts
LEFT JOIN flo_reactions ON flo_posts.id = flo_reactions.post_id
LEFT JOIN flo_reaction_types ON flo_reactions.reaction_type_id = flo_reaction_types.id
LEFT JOIN flo_comments ON flo_posts.id = flo_comments.post_id
GROUP BY flo_posts.id;";

$result = $db->query($sql);
$posts = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .post-container {
            width: 80%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .post-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .post-body {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .reactions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 10px;
        }
        .reaction {
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            background: #f0f0f0;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .comments-toggle {
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .comments-section {
            display: none;
            background: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            max-height: 200px;
            overflow-y: auto;
        }
        .comment {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            display: flex;
            flex-direction: column;
        }
        .comment:last-child {
            border-bottom: none;
        }
        .comment-user {
            font-weight: bold;
            color: #222;
            margin-bottom: 2px;
        }
        .comment-text {
            color: #555;
            background: #fff;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php foreach ($posts as $post) { ?>
    <div class="post-container">
        <div class="post-title"><?= $post['post_id']; ?> - <?= $post['post_title']; ?></div>
        <div class="post-body"><?= $post['post_body']; ?></div>

        <div class="reactions">
            <div class="reaction">👍 <span><?= $post['like_count']; ?></span></div>
            <div class="reaction">❤️ <span><?= $post['love_count']; ?></span></div>
            <div class="reaction">🤗 <span><?= $post['care_count']; ?></span></div>
            <div class="reaction">😃 <span><?= $post['happy_count']; ?></span></div>
            <div class="reaction">😢 <span><?= $post['sad_count']; ?></span></div>
            <div class="reaction">😂 <span><?= $post['laugh_count']; ?></span></div>
        </div>

        <div class="comments-toggle" onclick="toggleComments(this)">💬 <?= $post['number_of_comments']; ?> comments</div>
        <div class="comments-section">
            <?php
            $all_comments = "SELECT flo_comments.*, flo_users.name 
                            FROM flo_comments 
                            INNER JOIN flo_users ON flo_comments.user_id = flo_users.id
                            WHERE flo_comments.post_id = " . $post['post_id'] . ";";

            $result2 = $db->query($all_comments);
            $comments = $result2->fetch_all(MYSQLI_ASSOC);

            foreach ($comments as $comment) { ?>
                <div class="comment">
                    <span class="comment-user">👤 <?= $comment['name']; ?></span>
                    <span class="comment-text"><?= $comment['comment']; ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<script>
    function toggleComments(element) {
        let commentsSection = element.nextElementSibling;
        let isHidden = commentsSection.style.display === "none" || commentsSection.style.display === "";
        commentsSection.style.display = isHidden ? "block" : "none";
        element.style.color = isHidden ? "#dc3545" : "#007bff";
    }
</script>

</body>
</html>
