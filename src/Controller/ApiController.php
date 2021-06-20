<?php
declare(strict_types=1);


namespace App\Controller;


use App\Entity\User as DoctrineUserEntity;
use App\Traits\UserRepositoryTrait;
use Doctrine\ORM\ORMException;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ApiController
 * @Route (path="/api",name="api_")
 * @package App\Controller
 */
class ApiController extends AbstractController
{
    use UserRepositoryTrait;

    /**
     * @Route(path="/",name="entrypoint")
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Psr\Log\LoggerInterface $messengerAuditLogger
     * @return \Symfony\Component\HttpFoundation\Response
     * @group api
     */
    public function publicAPIEntry(Request $request, LoggerInterface $messengerAuditLogger): Response
    {
        $messengerAuditLogger->info("CustomerLogger At Path : " . $request->getUri());
        $request->headers->set('testKeyPass', 'api Entry Point');
        //dd($request->request->get('ApiPublicSecret'));
        //dd($request);
        $response = new Response('This is ENTRY Endpoint for Public API');
        $response->headers->set('Test', 'JWT TOKEN');
        //$response->setContent('text/html');
        $response->setStatusCode(Response::HTTP_OK);
        // Set Type based on request so imcompablity is ignored.
        $response->prepare($request);
        // Set Cookie By this way
        $response->headers->setCookie(Cookie::create('Cokkie-API-Secret', '10018', 30000));
        // Redirect USER TO other Page  From Controller
        // $response = new RedirectResponse('http://example.com/');
        return $response;
    }


    /**
     * @Route(name="jsonResp",path="/json",methods={"POST","GET"})
     * @group api
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function jsonResponseAPI(): Response
    {
        $response = new Response();
        $response->setContent(json_encode([
                'name' => 'Raj Shah',
                'age' => 23
            ]) ?? null);
        $response->headers->set('Content-Type', 'application/json');
        $jsonResponse = new JsonResponse();
        $jsonResponse->setContent(json_encode([
            'test' => '1'
        ]));
        return $response;
    }

    /**
     * @Route (path="/create/user",name="create_user",methods={"POST"})
     * @param Request $request
     * @param \Psr\Log\LoggerInterface $messengerAuditLogger
     * @return Response
     * @throws ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function addUserToDB(Request $request, LoggerInterface $messengerAuditLogger): Response
    {
        $messengerAuditLogger->info("Inside addUserToDB Method : Request Obj Captured : \n" . $request->getContent());

        $userobj = $request->toArray();
        // todo Create a serializerTrait which can be centerized.
        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new DateTimeNormalizer()];
        $serializer = new Serializer($normalizers);
        //
        /** @var DoctrineUserEntity $test */
        $test = $serializer->denormalize($userobj, DoctrineUserEntity::class);

        $this->getUserRepository()->save($test);
        return $this->json(["code"=>"success"]);
    }


}