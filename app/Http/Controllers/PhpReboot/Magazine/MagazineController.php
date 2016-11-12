<?php

namespace App\Http\Controllers\PhpReboot\Magazine;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use App\Services\FavouriteService;
use App\Services\MagazineService;
use Auth;

/**
 * Class MagazineController contains common controllers for magazine.
 * @package App\Http\Controllers\PhpReboot\Magazine
 */
class MagazineController extends Controller
{
    /**
     * @var App\Services\ArticleService
     */
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function monthPage($shortName, MagazineService $magazineService)
    {
        $magazine = $magazineService->getMagazineByShortName($shortName);
        $articles = $this->articleService->getCategorizedArticlesByMagazine($magazine->id);

        $viewData = [
            'magazine' => $magazine,
            'articles' => $articles,
            'menu' => 'magazine',
            'contentTitleSmall' => $magazine->name . ' issue.',
        ];

        return view('PhpReboot.Magazine.monthPage', $viewData);
    }

    public function articleDetails($articleId, FavouriteService $favouriteService)
    {
        $article = $this->articleService->getArticle($articleId);

        // Issue-161. Redirect if article's website do not want's to be listed.
        // Done in hurry for hot-fix. Can we do it in better way?
        if ($article->website->noc == 'remove') {
            return redirect('/');
        }

        $viewData = [
            'article' => $article,
            'menu' => 'magazine',
            'contentTitleSmall' => $article->magazine->name . ' issue.',
        ];

        if (Auth::check()) {
            $viewData['isFavourite'] = $favouriteService->isFavourite(
                Auth::user()->id,
                $articleId
            );
        }

        return view('PhpReboot.Magazine.articleDetails', $viewData);
    }
}
