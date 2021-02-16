<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfilSortieRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 * routePrefix="admin",
 * attributes={
 *    "security"= "is_granted('ROLE_Admin')",
 *    "security_message"="Seul l'admin a acces à cette ressource"
 * },
 * normalizationContext={"groups":{"profilsortie:read"}} ,
 * denormalizationContext={"groups":{"profilsortie:write"}} ,
 * collectionOperations={
 *                "GET",
 *                "POST"
 * },
 * itemOperations={"GET","PUT","DELETE"} 
 * 
 * )
 * @ORM\Entity(repositoryClass=ProfilSortieRepository::class)
 */
class ProfilSortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"profilsortie:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ne dois pas etre vide !!!")
     * @Groups({"profilsortie:read","profilsortie:write"})
     */
    private $libelle;

    /**
     * @ORM\Column(nullable=true, type="boolean", options={"default":false})
     * @Groups({"profilsortie:read","profilsortie:write"})
     */
    private $archive=false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(bool $archive): self
    {
        $this->archive = $archive;

        return $this;
    }
}
