<?php

namespace App\DTO;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

class IdentifiedCaseDTO
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Expose()
     * @Serializer\SerializedName("ID")
     */
    public ?int $id = null;

    /**
     * @Serializer\Expose()
     * @Serializer\SerializedName("photoFilename")
     * @Serializer\Type("string")
     * @Assert\NotBlank
     */
    public string $photoFilename;

    /**
     * @Serializer\Expose()
     * @Serializer\SerializedName("uuid")
     * @Serializer\Type("string")
     * @Assert\NotBlank
     */
    public string $uuid;

    /**
     * @Serializer\Expose()
     * @Serializer\SerializedName("temperature")
     * @Serializer\Type("float")
     * @Assert\NotBlank
     */
    public float $temperature;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\Expose()
     * @Serializer\SerializedName("datePhoto")
     */
    public DateTime $datePhoto;

    /**
     * @Serializer\Type("DateTime")
     * @Serializer\Expose()
     * @Serializer\SerializedName("firstDate")
     */
    public DateTime $firstDate;
}
