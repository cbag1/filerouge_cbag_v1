<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfilSortieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 * routePrefix="admin",
 * attributes={
 *    "security"= "is_granted('ROLE_Admin')",
 *    "security_message"="Seul l'admin a acces à cette ressource"
 * },
 *    normalizationContext={"groups":{"profilsortie:read"}} ,
 *     denormalizationContext={"groups":{"profilsortie:write"}} ,
 * collectionOperations={
 *                      "GET",
 *                      "POST"
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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archive;

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
