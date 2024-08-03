<?php

require_once __DIR__ . '/../models/Article.php';

class ArticleController
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new Article();
    }

    public function index()
    {
        $articles = $this->articleModel->getAll();
        include __DIR__ . '/../views/index.php';
    }

    public function store()
    {
        $id = $_POST['id'] ?? null;
        $data = [
            'title' => $_POST['title'],
            'body' => $_POST['body']
        ];

        if ($id) {
            $this->articleModel->update($id, $data);
        } else {
            $this->articleModel->create($data);
        }

        header('Location: /');
        exit;
    }

    public function destroy($id)
    {
        $this->articleModel->delete($id);
        header('Location: /');
        exit;
    }
}
?>
