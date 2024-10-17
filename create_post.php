<?php
include 'db.php';
session_start();

if (isset($_POST['create_post'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO posts (title, content, user_id) VALUES ('$title', '$content', '$user_id')";
    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="">
    Title: <input type="text" name="title" required>
    Content: <textarea name="content" required></textarea>
    <button type="submit" name="create_post">Create Post</button>
</form>
