<?php

namespace App\Entity;

use App\Repository\CancionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CancionRepository::class)]
class Cancion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\ManyToOne(inversedBy: 'canciones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?grupo $grupo = null;

    #[ORM\ManyToOne(inversedBy: 'canciones')]
    private ?album $album = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $letra = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGrupo(): ?grupo
    {
        return $this->grupo;
    }

    public function setGrupo(?grupo $grupo): static
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getAlbum(): ?album
    {
        return $this->album;
    }

    public function setAlbum(?album $album): static
    {
        $this->album = $album;

        return $this;
    }

    public function getLetra(): ?string
    {
        return $this->letra;
    }

    public function setLetra(?string $letra): static
    {
        $this->letra = $letra;

        return $this;
    }
}
