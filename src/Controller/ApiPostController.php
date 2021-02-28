<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post",name: 'api_post_index', methods={"GET"})
     */
    public function index( UsersRepository $UsersRepository , NormalizerInterface $Normalizer): Response
    {
        $Posts=$UsersRepository->findAll();
        $PostsNormalizer = $Normalizer->normalize($Posts);
        
       
        $json=json_encode($PostsNormalizer);
         
        $response = new JsonResponse($json ,200, [] , true );
        return $response;
    }
    /**
     * @Route("/api/post",name: 'api_post_users', methods={"POST"})
     */

    public function signup(Request $request , SerializerInterface $Serializer )
    {
       $Jsonrecu=$request->getContent();
       $post=$Serializer->deserialize($Jsonrecu , Post::class , 'json');

       dd($post);

    }
}
