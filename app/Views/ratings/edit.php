<!DOCTYPE html>
<html>
<head>
    <title>Edit Rating</title>
</head>
<body>
    <h2>Edit Rating</h2>
    <form action="/ratings/update/<?= $rating['r_id']; ?>" method="post">
        <label>Review:</label>
        <input type="text" name="review" value="<?= $rating['review']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
