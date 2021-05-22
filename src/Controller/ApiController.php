<?php
declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route(path="/api",name="api_entrypoint",condition="")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function publicAPIEntry(Request $request):Response{
        $request->headers->set('testKeyPass','api Entry Point');
        dd($request->request->get('ApiPublicSecret'));
        //dd($request);
        return new Response('This is ENTRY Endpoint for Public API',Response::HTTP_OK,['Test'=>'JWT TOKEN']);
    }
}