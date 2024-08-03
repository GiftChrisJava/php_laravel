<form id="articleForm" method="post" action="/index.php?action=store">
    <input type="hidden" name="id" id="articleId">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <label for="body">Body:</label>
    <textarea name="body" id="body" rows="4"></textarea>
    <input type="submit" value="Save">
</form>
