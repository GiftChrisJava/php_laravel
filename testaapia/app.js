document.addEventListener('DOMContentLoaded', function () {
    const apiBaseUrl = 'http://127.0.0.1:8000/api/articles';
    const articlesTable = document.getElementById('articlesTable').getElementsByTagName('tbody')[0];
    const articleForm = document.getElementById('articleForm');
    const articleIdInput = document.getElementById('articleId');
    const titleInput = document.getElementById('title');
    const bodyInput = document.getElementById('body');

    function fetchArticles() {
        fetch(apiBaseUrl)
            .then(response => response.json())
            .then(data => {
                articlesTable.innerHTML = '';
                data.forEach(article => {
                    const row = articlesTable.insertRow();
                    row.insertCell(0).innerText = article.id;
                    row.insertCell(1).innerText = article.title;
                    row.insertCell(2).innerText = article.body;
                    const actionsCell = row.insertCell(3);
                    actionsCell.innerHTML = `
                        <button onclick="editArticle(${article.id}, '${article.title}', '${article.body}')">Edit</button>
                        <button onclick="deleteArticle(${article.id})">Delete</button>
                    `;
                });
            });
    }

    window.editArticle = function (id, title, body) {
        articleIdInput.value = id;
        titleInput.value = title;
        bodyInput.value = body;
    };

    window.deleteArticle = function (id) {
        fetch(`${apiBaseUrl}/${id}`, {
            method: 'DELETE'
        }).then(() => fetchArticles());
    };

    articleForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const id = articleIdInput.value;
        const title = titleInput.value;
        const body = bodyInput.value;
        const method = id ? 'PUT' : 'POST';
        const url = id ? `${apiBaseUrl}/${id}` : apiBaseUrl;
        const data = { title, body };

        fetch(url, {
            method: method,
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(() => {
            fetchArticles();
            articleForm.reset();
            articleIdInput.value = '';
        });
    });

    fetchArticles();
});
