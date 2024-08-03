<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article CRUD App</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
        <h1>Article CRUD App</h1>
        <?php include __DIR__ . '/form.php'; ?>
        <?php include __DIR__ . '/table.php'; ?>
    </div>
    <script>
        function editArticle(id, title, body) {
            document.getElementById('articleId').value = id;
            document.getElementById('title').value = title;
            document.getElementById('body').value = body;
        }

        function deleteArticle(id) {
            if (confirm('Are you sure you want to delete this article?')) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '/index.php?action=destroy&id=' + id;
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</body>
</html>
