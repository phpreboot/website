<?php
/**
 * Created by PhpStorm.
 * User: kapil
 * Date: 28/8/16
 * Time: 2:13 PM
 */

namespace App\Services;

use App\Repositories\Contract\ArticleRepositoryInterface;

class ArticleService {
    protected $articleRepo;

    public function __construct(ArticleRepositoryInterface $articleRepo)
    {
        $this->articleRepo = $articleRepo;
    }

    public function getCategorizedArticlesByMagazine($magazineId)
    {
        $articles = $this->articleRepo->findBy('magazine_id', $magazineId);
        $categories = [];

        foreach ($articles as $article) {

            // issue - 161 (Hot-fix)
            // Can we do iti n better way?
            if ($article->website->noc == 'remove') {
                continue;
            }

            $category = $article->category;
            $categoryName = $category->name;

            if (!isset($categories[$categoryName])) {
                $categories[$categoryName] = [];
            }

            $categories[$categoryName][] = $article;
        }

        // For now, simply sorting categories alphabetically.
        ksort($categories);

        return $categories;
    }

    public function getArticle($articleId)
    {
        return $this->articleRepo->findOne($articleId);
    }
}