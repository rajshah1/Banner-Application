<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController
{
 public function heropage(): Response
 {
     return new Response('Banner first Controller Created',200);
 }

    /**
     * @Route("/annotationRoute")
     */
    public function annotationRoute(): Response
    {
        return new Response('Annotation Based Route Directly From Controller',200);
    }


    // In Routes If we pass {wildString} then that value can be anything .
    // That can also be accessed via string $courseID in Controller Functions
    /**
     * @Route("/grades/{courseID}")
     */
    public function grades(string $courseID): Response
    {
        // sprintf('value "%s"',$variableName) Make Sure starting is '';

        return new Response(sprintf('This Route will give grades for subject : %s ',$courseID),200);
    }



}