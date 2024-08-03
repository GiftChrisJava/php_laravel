<table id="articlesTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?php echo $article['id']; ?></td>
                <td><?php echo $article['title']; ?></td>
                <td><?php echo $article['body']; ?></td>
                <td>
                    <button onclick="editArticle(<?php echo $article['id']; ?>, '<?php echo $article['title']; ?>', '<?php echo $article['body']; ?>')">Edit</button>
                    <button onclick="deleteArticle(<?php echo $article['id']; ?>)">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
