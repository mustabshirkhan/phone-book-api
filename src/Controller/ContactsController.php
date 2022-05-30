<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ContactsController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function __invoke(Request $request, FileUploader $fileUploader): Contact
    {
        $uploadedFile = $request->files->get('file');

        $contact = new Contact();
        $contact->firstName =  $request->get('firstName');
        $contact->lastName =  $request->get('lastName');
        $contact->email =  $request->get('email');
        $contact->phoneNumber =  $request->get('phoneNumber');
        $contact->address =  $request->get('address');
        $contact->dob =  \DateTime::createFromFormat('Y-m-d', $request->get('dob'));
        $contact->avatar = $uploadedFile ? $fileUploader->upload($uploadedFile) :  null;

        return $contact;
    }
}