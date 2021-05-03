<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class BannerController
{
 public function heropage(): Response
 {
     return new Response('Banner first Controller Created',200);
 }

}