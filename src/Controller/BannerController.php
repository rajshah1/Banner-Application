<?php


namespace App\Controller;


use App\Model\studentInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController extends AbstractController
{
 public function heropage(): Response
 {
     //return new Response('Banner first Controller Created',200);

     // render method is inherited from AbstractController


     // This Creates the Object of Type studentInfo
     // Access Variables using get methods

     // See AutoLoader is not used like PHP-Starter-Kit Project instead we have use
     // use \App\studentInfo which Points to the model file
     $studentInfoObj=new studentInfo('Raj Shah','rshah62@unc.edu',8012035638);


     return $this->render('heropage/hero.html.twig',[
         "Name"=>$studentInfoObj->getName(),
         "UID"=>$studentInfoObj->getUID(),
         "EmailID"=>$studentInfoObj->getEmailID()
     ]);
 }

    /**
     * @Route(path="/annotationRoute",name="app_annotationRoute")
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