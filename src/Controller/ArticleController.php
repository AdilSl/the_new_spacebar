<?php
/**
 * Created by PhpStorm.
 * User: adil
 * Date: 18/12/18
 * Time: 08:58
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
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
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig',array(
            'titre' =>  ucwords(str_replace('-', ' ', $slug)),
            'comments'=> $comments
        ));
    }
}