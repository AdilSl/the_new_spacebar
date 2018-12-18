<?php
/**
 * Created by PhpStorm.
 * User: adil
 * Date: 18/12/18
 * Time: 08:58
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/",)
     */
    public function homePage(){
        return new Response('hello this is my first page in symfony 4');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        return new Response(sprintf('Future page to show the article: "%s" ',$slug));
    }
}