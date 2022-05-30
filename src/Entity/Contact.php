<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiProperty;
use App\Controller\ContactsController;
use App\Controller\ContactsUpdateAction;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="contacts")
 */

#[ApiResource(
    normalizationContext: ['groups' => ['read']],
    denormalizationContext: ['groups' => ['write']],
    itemOperations: [
        'get', 'patch', 'delete',
        'put' => [
            'controller' => ContactsUpdateAction::class,
            'method'=>"POST",
            'path'=>"contacts/{id}",
            'deserialize' => false,
            'openapi_context' => [
                'requestBody' => [
                    'content' => [
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'firstName' => [
                                        'type' => 'string',
                                        'example' => 'lilly',
                                    ],
                                    'lastName' => [
                                        'type' => 'string',
                                        'example'=>'doo'
                                    ],
                                    'email' => [
                                        'type' => 'string',
                                        'format' => 'email',
                                        'example' => 'john.doe@example.com',
                                    ],
                                    'address' => [
                                        'type' => 'string',
                                        'example'=>'Frankfurter Strasse 15'
                                    ],
                                    'phoneNumber' => [
                                        'type' => 'string',
                                        'example'=> '19987856',
                                        'required'=>true,
                                    ],
                                    'dob' => [
                                        'type' => 'string',
                                        'format' => 'string',
                                        'example'=> '1998-04-15',
                                    ],
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        ],
    collectionOperations: [
        'get',
        'post' => [
            'controller' => ContactsController::class,
            'deserialize' => false,
            'validation_groups' => ['Default', 'media_object_create'],
            'openapi_context' => [
                'requestBody' => [
                    'content' => [
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'firstName' => [
                                        'type' => 'string',
                                        'example'=> 'Demo'

                                    ],
                                    'lastName' => [
                                        'type' => 'string',
                                        'example' => 'USer',
                                    ],
                                    'email' => [
                                        'type' => 'string',
                                        'format' => 'email',
                                        'example'=> 'john.doe@example.com'

                                    ],
                                    'address' => [
                                        'type' => 'string',
                                        'example'=> 'Main Hessen Frankfurt'
                                    ],
                                    'phoneNumber' => [
                                        'type' => 'string',
                                        'example'=> '19987856',
                                    ],
                                    'dob' => [
                                        'type' => 'string',
                                        'format' => 'string',
                                        'example'=> '1998-04-15',
                                    ],
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    attributes: ["pagination_items_per_page" => 10],
),
    ApiFilter(
        SearchFilter::class,
        properties: [
            'firstName' => SearchFilter::STRATEGY_PARTIAL,
            'lastName' => SearchFilter::STRATEGY_PARTIAL,
        ]
    ),

]

class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @Groups({"read"})
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=70)
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     */
    public string $firstName;

    /**
     * @ORM\Column(length=70)
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     */
    public string $lastName;

    /**
     * @ORM\Column(length=70, unique="true")
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     */
    public string $email;

    /**
     * @ORM\Column(length=70)
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     */
    public string $address;

    /**
     * @ORM\Column(length=70)
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     */
    public string $phoneNumber;

    /**
     * @ORM\Column(type="date", name="birthday")
     * @Assert\NotBlank()
     * @Groups({"read", "write"})
     * @ApiProperty(
     *   iri="http://schema.org/date",
     *   attributes={
     *     "openapi_context"={
     *       "type"="string",
     *     }
     *   }
     * )

     */
    public ?\DateTime $dob;

    /**
     * @ORM\Column(length=70, nullable=true)
     * @Groups({"read", "write"})
     * @ApiProperty(
     *   iri="http://schema.org/image",
     *   attributes={
     *     "openapi_context"={
     *       "type"="string",
     *     }
     *   }
     * )
     */
    public ?string $avatar = null;


    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read"})
     */
    public ?\DateTime $createdAt = null;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read"})
     */

    public DateTime|\DateTime $updatedAt;

    /**
     * @param DateTime $updatedAt
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /******** METHODS ********/

    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Prepersist gets triggered on Insert
     * @ORM\PrePersist
     */
    public function updatedTimestamps()
    {
        $this->setUpdatedAt(new \DateTime('now'));
        if ($this->createdAt == null) {
            $this->createdAt = new \DateTime('now');
        }
    }

    public function getDob() : string {
        return $this->dob->format('Y-m-d');
    }

    public function __toString()
    {
        return $this->firstName.' '.$this->lastName;
    }
}