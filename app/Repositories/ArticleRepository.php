<?php
/**
 * Created by PhpStorm.
 * User: kapil
 * Date: 28/8/16
 * Time: 1:51 PM
 */

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Contract\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    protected  $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function find()
    {
        return $this->article->all();
    }

    public function findOne($id)
    {
        return $this->article->find($id);
    }

    public function findBy($name, $value)
    {
        return $this->article->where($name, $value)->get();
    }
}