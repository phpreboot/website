<?php

namespace App\Http\Controllers\PhpReboot;

//use App\User;
use App\Http\Controllers\Controller;
use App\Models\Magazine;
use App\Models\Article;
use Cache;
use App\Services\ArticleService;

class HomeController extends Controller
{
    /**
     * Show the home page of PhpReboot.com.
     *
     * @return Response
     */
    public function homePage(ArticleService $articleService)
    {
        //Number of Articles
        $articlesCount = $articleService->getArticleCount();
        
        //Last Article Date
        $latestArticle = $articleService->getLatestArticle();
        $lastArticleDate = $latestArticle->created_at;
        
        $lastArticleDate = $lastArticleDate->toFormattedDateString();
        
        
        return view('PhpReboot.Home.homePage', [
            'menu' => 'home',
            'articlesCount' => $articlesCount,
            'lastArticleDate' => $lastArticleDate
            ]);
    }
}