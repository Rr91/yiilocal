<?php


namespace app\controllers;


use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        //$posts = Post::find()->limit(4)->all();
        $query = Post::find()->with('category');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 1,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            ]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('posts', 'pages'));
    }

    public function actionView($id)
    {
        var_dump($id); exit;
    }
}