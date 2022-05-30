<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

#[AsController]
class ContactsUpdateAction
{
    public function __invoke(Request $request, FileUploader $fileUploader, Contact $contact): Contact
    {
        $uploadedFile = $request->files->get('avatar');
//        if (!$uploadedFile) {
//            throw new BadRequestHttpException('"file" is required');
//        }

        $contact->firstName =  $request->get('firstName');
        $contact->lastName =  $request->get('lastName') ?: $contact->lastName;
        $contact->email =  $request->get('email')?: $contact->email;
        $contact->phoneNumber =  $request->get('phoneNumber')?: $contact->phoneNumber;
        $contact->address =  $request->get('address')?: $contact->address;
        $contact->dob =  $request->get('dob') ?\DateTime::createFromFormat('Y-m-d', $request->get('dob')) : $contact->dob;
        $contact->avatar = $uploadedFile ? $fileUploader->upload($uploadedFile) :  $contact->avatar;
        return $contact;
    }
}