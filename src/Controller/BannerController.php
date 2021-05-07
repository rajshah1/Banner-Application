<?php


namespace App\Controller;


use App\Model\Grade;
use App\Model\studentInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController extends AbstractController
{
    /** @Route(path="/",name="app_heroPage") */
    public function heroPage(): Response
    {
        //return new Response('Banner first Controller Created',200);

        // render method is inherited from AbstractController


        // This Creates the Object of Type studentInfo
        // Access Variables using get methods

        // See AutoLoader is not used like PHP-Starter-Kit Project instead we have use
        // use \App\studentInfo which Points to the model file

        $studentInfoObj = new studentInfo('Raj Shah', 'rshah62@unc.edu', 8012035638);

        // Grades Object are created .

        $gradOne = new Grade(80, "ITCS_6181");
        $gradTwo = new Grade(90, "ITCS_6000");
        $gradThree = new Grade(70, "ITCS_6100");

        $grades = [$gradOne, $gradTwo, $gradThree];

        return $this->render('heropage/hero.html.twig', [
            "Name" => $studentInfoObj->getName(),
            "UID" => $studentInfoObj->getUID(),
            "EmailID" => $studentInfoObj->getEmailID(),
            "Grades" => $grades
        ]);
    }

    /**
     * @Route(path="/grades",name="app_grades_main")
     */
    public function annotationRoute(): Response
    {
        return new Response('This Path Requires Subject Name Please add subjectName in URL: ', 200);
    }


    // In Routes If we pass {wildString} then that value can be anything .
    // That can also be accessed via string $courseID in Controller Functions
    /**
     * @Route("/grades/{courseID}/{percentage}",name="app_cid_per")
     */


 /*   public function grades(string $courseID): Response
    {
        // sprintf('value "%s"',$variableName) Make Sure starting is '';

        return new Response('Percentage For Subject is 80%', 200);
    }*/

    public function grades(string $courseID,int $percentage): Response
    {
        // sprintf('value "%s"',$variableName) Make Sure starting is '';

        return new Response(sprintf('Percentage For Subject %s is %s',$courseID,$percentage), 200);
    }


}