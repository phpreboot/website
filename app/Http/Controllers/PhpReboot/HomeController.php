<?php

namespace App\Http\Controllers\PhpReboot;

//use App\User;
use App\Http\Controllers\Controller;
use App\Models\Magazine;
use App\Models\Article;
use Cache;

class HomeController extends Controller
{
    /**
     * Show the home page of PhpReboot.com.
     *
     * @return Response
     */
    public function homePage()
    {
        $cacheTimeout = 1440;
        
        // Number of Magazines | Stores it in the cache
        $issuesCount = Cache::remember('issueCount', $cacheTimeout, function(){
           return Magazine::count(); 
        });
        
        //Number of Articles
        $articlesCount = Cache::remember('articlesCount', $cacheTimeout, function(){
            return Article::count();
        });
        
        //Last Article Date
        $lastArticleDate = Cache::remember('lastArticleDate', $cacheTimeout, function(){
            $lastArticle = Article::orderBy('published_at', 'Desc')->first();
            return $lastArticle->published_at;
        });
        
        return view('PhpReboot.Home.homePage', [
            'menu' => 'home',
            'issuesCount' => $issuesCount,
            'articlesCount' => $articlesCount,
            'lastArticleDate' => $lastArticleDate
            ]);
    }
}