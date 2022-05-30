<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ContactsTest extends ApiTestCase
{
    use RefreshDatabaseTrait;
    public function testContactsApiRouteExists(): void{
        $response = static::createClient()->request('GET', '/api/contacts');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['@id' => '/api/contacts',]);

    }

    public function testContactsList(): void
    {
        $response = static::createClient()->request('GET', '/api/contacts');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/Contact',
            '@id' => '/api/contacts',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 100,
            'hydra:view' => [
                '@id' => '/api/contacts?page=1',
                '@type' => 'hydra:PartialCollectionView',
                'hydra:first' => '/api/contacts?page=1',
                'hydra:last' => '/api/contacts?page=10',
                'hydra:next' => '/api/contacts?page=2',
            ],
            'hydra:search' => [
                '@type' => 'hydra:IriTemplate',
                'hydra:template' => '/api/contacts{?firstName,lastName}',
                'hydra:variableRepresentation' => 'BasicRepresentation',
                'hydra:mapping' =>[
                    [
                '@type' => 'IriTemplateMapping',
                'variable' => 'firstName',
                'property' => 'firstName',
                'required' => false,
                ],
            [
                '@type' => 'IriTemplateMapping',
                'variable' => 'lastName',
                'property' => 'lastName',
                'required' => false,
            ],
        ]]
        ]);
        $this->assertCount(10, $response->toArray()['hydra:member']);

    }

    public function testAddContactWithoutPicture(): void
    {
        $response = static::createClient()->request('POST', '/api/contacts', [
            'headers' => ['Content-Type' => 'multipart/form-data'],

            'extra' => [
                'parameters'=>[
                "firstName" => "John",
                'lastName' => 'Doe',
                'email' => 'john.doe@example.com',
                'dob' => '1993-08-14',
                'address' => 'Main Hessen, Frankfurt',
                'phoneNumber' => '+49025422145'
            ]]
        ]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        $this->assertJsonContains([
            '@context' => '/api/contexts/Contact',
            '@type' => 'Contact',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => 'Main Hessen, Frankfurt',
            'phoneNumber' => '+49025422145',
            'dob' => '1993-08-14',
        ]);
    }
    public function testAddContactWithPicture(): void
    {
        $file = new UploadedFile('fixtures/files/image.jpg', 'image.jpg');
        $response = static::createClient()->request('POST', '/api/contacts', [
            'headers' => ['Content-Type' => 'multipart/form-data'],

            'extra' => [
                'parameters'=>[
                    "firstName" => "John",
                    'lastName' => 'Doe',
                    'email' => 'john.doe@example.com',
                    'dob' => '1993-08-14',
                    'address' => 'Main Hessen, Frankfurt',
                    'phoneNumber' => '+49025422145'
                ],
                'files' => [
                    'file' => $file
                ]

            ]
        ]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        $this->assertJsonContains([
            '@context' => '/api/contexts/Contact',
            '@type' => 'Contact',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => 'Main Hessen, Frankfurt',
            'phoneNumber' => '+49025422145',
            'dob' => '1993-08-14',
        ]);
    }

    public function testUpdateContact(): void
    {
        static::createClient()->request('POST', '/api/contacts/1', [
            'headers' => ['Content-Type' => 'multipart/form-data'],
            'extra' => [
                'parameters'=>[
                    "firstName" => "John 123",
                    'lastName' => 'Doe',
                    'email' => 'john.doe@example.com',
                    'dob' => '1993-08-14',
                    'address' => 'Main Hessen, Frankfurt',
                    'phoneNumber' => '+49025422145'
                ],
            ]
        ]);

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@id' => '/api/contacts/1',
            'firstName' => 'John 123',
        ]);
    }

    public function testUpdateContactAvatar(): void
    {
        static::createClient()->request('POST', '/api/contacts/1', [
            'headers' => ['Content-Type' => 'multipart/form-data'],
            'extra' => [
                'parameters'=>[
                    "firstName" => "John 123",
                    'lastName' => 'Doe',
                    'email' => 'john.doe@example.com',
                    'dob' => '1993-08-14',
                    'address' => 'Main Hessen, Frankfurt',
                    'phoneNumber' => '+49025422145'
                ],
            ]
        ]);

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@id' => '/api/contacts/1',
            'firstName' => 'John 123',
        ]);
    }
    public function testDeleteContact(): void
    {
        $client = static::createClient();
        $iri = $this->findIriBy(Contact::class, ['id' => '1']);
        $client->request('DELETE', $iri);
        $this->assertResponseStatusCodeSame(204);
    }

    public function testCreateInvalidContact(): void
    {
        $response = static::createClient()->request('POST', '/api/contacts', [
            'headers' => ['Content-Type' => 'multipart/form-data'],
            'extra' => [
                'parameters'=>[
                    "firstName" => null,
                    'lastName' => 'Doe',
                    'email' => 'john.doe@example.com',
                    'dob' => '1993-08-14',
                    'address' => 'Main Hessen, Frankfurt',
                    'phoneNumber' => '+49025422145'
                ]]
        ]);

        $this->assertResponseStatusCodeSame(422);
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

        $this->assertJsonContains([
            '@context' => '/api/contexts/ConstraintViolationList',
            '@type' => 'ConstraintViolationList',
            'hydra:title' => 'An error occurred',
            'hydra:description' => 'firstName: This value should not be blank.',
        ]);
    }


}
