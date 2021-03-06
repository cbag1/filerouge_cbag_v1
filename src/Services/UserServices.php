<?php
namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserServices{


    public function __construct(
        UserPasswordEncoderInterface $encoder,
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        EntityManagerInterface $manager,
        UserPasswordEncoderInterface $passwordEncoder

    ) {
        $this->entityManager = $manager;
        $this->passwordEncoder = $passwordEncoder;
        $this->encoder = $encoder;
        $this->serialize = $serializer;
        $this->validator = $validator;
    }

    
    public function ajout($manager,$validator,$request,$serializer,$user,$entity){
        $avatar = $request->files->get("avatar");
        $user = $serializer->denormalize($user, $entity, true);
        $avatar = fopen($avatar->getRealPath(), "rb");
        $errors = $validator->validate($user);
        if (count($errors)) {
            $errors = $serializer->serialize($errors, "json");
            return new JsonResponse($errors, Response::HTTP_BAD_REQUEST, [], true);
        }
        $password = "cbag";
        $user->setPassword($this->encoder->encodePassword($user, $password));
        $user->setAvatar($avatar);
        $manager->persist($user);
        $manager->flush();
        fclose($avatar);
        // return $this->json("success", Response::HTTP_CREATED);
    }

      /**
     * put image of user
     * @param Request $request
     * @param string|null $fileName
     */
    public function UpdateUser(Request $request,string $fileName = null)
    {
        $raw =$request->getContent();
        $delimiteur = "multipart/form-data; boundary=";
        $boundary= "--" . explode($delimiteur,$request->headers->get("content-type"))[1];
        $elements = str_replace([$boundary,'Content-Disposition: form-data;',"name="],"",$raw);
        $elementsTab = explode("\r\n\r\n",$elements);
        $data =[];
        //dd($elementsTab);
        for ($i=0;isset($elementsTab[$i+1]);$i+=2){
            $key = str_replace(["\r\n",' "','"'],'',$elementsTab[$i]);
            if (strchr($key,$fileName)){
                $stream =fopen('php://memory','r+');
                fwrite($stream,$elementsTab[$i +1]);
                rewind($stream);
                $data[$fileName] = $stream;
            }else{
                $val=$elementsTab[$i+1];
                $data[$key] = $val;
            }
        }
        return $data;
    }
    
}
