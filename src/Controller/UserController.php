<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\UserServices;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{






    /**
     * @Route(
     *  name="add_user",
     *  path="/api/admin/users",
     *  methods={"POST"},
     *  defaults={
     *          "__controller"="App\Controller\UserController::addUser",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="add_user"
     *     }       
     * )
     */

    public function addUser(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EntityManagerInterface $manager,
        UserServices $serviceuser
    ) {

        // $test=$request->getContent();
        // $test=$request->request->all();
        //$d="test";
        //    $test = $request->request->all();
        $user = $request->request->all();
        // dd($user);
        switch ($user['profil']) {
            case '/api/admin/profils/1':
                $entite = "App\Entity\Admin";
                break;
            case '/api/admin/profils/2':
                $entite = "App\Entity\CM";
                break;
            case '/api/admin/profils/3':
                $entite = "App\Entity\Formateur";
                break;
            case '/api/admin/profils/4':
                $entite = "App\Entity\Apprenant";
                break;
            default:
                # code...
                break;
        }

        // dd($user);
        $serviceuser->ajout($manager,$validator,$request,$serializer,$user,$entite);
        return $this->json("success", Response::HTTP_CREATED);
        // $user = $request->request->all();
        //dd($test);
        // dd($test);
    }


    /**
     * @Route(
     *  name="update_user",
     * path="/api/admin/users/{id}",
     *  methods={"PUT"},
     *  defaults={
     *          "__controller"="App\Controller\UserController::putUser",
     *          "__api_resource_class"=User::class,
     *          "__api_item_operation_name"="put"
     *     }       
     * )
     */

    public function putUser(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EntityManagerInterface $manager,
        UserPasswordEncoderInterface $encoder,
        UserRepository $repo,
        int $id,
        UserServices $service
    ) {
        $object = $repo->find($id);
        $data = $service->UpdateUser($request, 'avatar');
        // dd($data);

        foreach ($data as $key=>$value){
            $ok="set".ucfirst($key);
            if ($key === "password"){
                $object->$ok($encoder->encodePassword($object,$value));
            }
            else {
                $object->$ok($value);
            }
        }
        $errors = $validator->validate($object);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        $manager->persist($object);
        $manager->flush();
        //dd($object);
        return new JsonResponse("modification reussie",Response::HTTP_CREATED,[],true);


        // $image=$request->files->get("avatar");
        // $content=$request->getContent();
        //dd($request->getContent());
        // dd($request->request->get('test'));
        // $request = $request->getCurrentRequest();
        // $imageContent = $request->getContent();
        // dd($request);
        // dd($request->headers->get('Content-Type'));
        // dd($request->getContentType());
        //  $content=file_get_contents('php://input');
        // $items = preg_split("/form-data; /", $content);
        //dd($content);
        // dd($request->headers->get('Content-Type'));

    }

    /**
     * @Route("/user", name="user")
     */
    // public function index(): Response
    // {
    //     return $this->render('user/index.html.twig', [
    //         'controller_name' => 'UserController',
    //     ]);
    // }
}
