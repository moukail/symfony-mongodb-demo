<?php

namespace App\Document;

use App\Repository\ArtistRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

#[ODM\Document(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ODM\Id]
    private $id;

    #[ODM\Field(type: "string")]
    private $name;

    #[ODM\Field(type: "string")]
    private $email;

    #[ODM\Field(type: "string")]
    private $phoneNumber;
}
