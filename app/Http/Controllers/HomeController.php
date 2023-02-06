<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    /**
     * Returns the view associated with the recently added page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        
        return view('/welcome');
    }

    /**
     * Summary of getRecentArticle
     * @param int $num the article being retrieved. 0 is the most recent article, 1 is the second most and so on.
     * @return mixed A recent article, defaults to most recent article if asked for article outside of range ($maxArticles),or null if no articles found
     */
    public function getRecentArticle(int $articleNum)
    {
        //Database that controller will check for the articles
        $tableName = 'posts';

        $article = null;
        //array of collection
        $recentArticles = DB::table($tableName)
            ->orderBy('id','desc')
            ->limit($articleNum+1)
            ->get();

            if($recentArticles->isNotEmpty()){
                if($recentArticles->has($articleNum)){
                    $article = $recentArticles[$articleNum];
                }
                else{
                    $article = $recentArticles[0];
                    }
            } else
                return $article;
            
        return $article;
    }

    public function getRecentArticleName(int $articleNum){

        $article = $this->getRecentArticle($articleNum);

        //if no articles found
        if(!$article)
            return "Default Name";

        return $article->title;
    }

    public function getRecentArticleContent(int $articleNum){

        $article = $this->getRecentArticle($articleNum);

        //If no articles found
        if(!$article)
            return "Default Content";

        return $article->content;
    }
    
    /**
     * Retrieves a Category from the database based on given category id
     * @param int $categoryNum the id of the category
     * @return mixed Returns the category if it is in the database, otherwise it returns null
     */
    public function getCategory(int $categoryNum)
    {
        //Database that controller will check for the articles
        $tableName = 'categories';

        $category = null;
        
        //array of collection
        $categories = DB::table($tableName)
            ->where('id', $categoryNum)
            ->first();

        if ($categories) {
            if($categories->has(0)){
                $category = $categories[0];
            }
        }

            
        
        
        return $category;
    }

    public function getCategoryName(int $categoryNum){

        $category = $this->getCategory($categoryNum);

        //if no categories found
        if(!$category)
            return "Default Name";
        
        return $category->name;
    }

    public function getCategoryContent(int $categoryNum){

        $category = $this->getCategory($categoryNum);

        //if no categories found
        if(!$category)
            return "Default Content";
        return $category->content;
    }

}
