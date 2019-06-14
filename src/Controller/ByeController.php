<?php
/**
 * Created by PhpStorm.
 * User: lhyve
 * Date: 04/04/2019
 * Time: 15:14
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ByeController
{
    public function index(Environment $twig){

        $content = $twig->render('Advert/bye.html.twig',['name' => 'Hyvernat Luc']);

        return new response($content);
    }

}