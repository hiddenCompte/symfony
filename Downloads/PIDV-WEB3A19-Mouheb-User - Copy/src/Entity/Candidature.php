<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
#[ORM\Table(name: "candidature")]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "userId", referencedColumnName: "id", nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Mission::class)]
    #[ORM\JoinColumn(name: "missionId", referencedColumnName: "id", nullable: false)]
    private ?Mission $mission = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le nom du fichier ne doit pas dépasser {{ limit }} caractères"
    )]
    private ?string $image = null;

    #[ORM\Column(name: "reponseQuestions", type: 'text', nullable: true)]
    #[Assert\Length(
        max: 2000,
        maxMessage: "Les réponses ne doivent pas dépasser {{ limit }} caractères"
    )]
    private ?string $reponseQuestions = null;

    #[ORM\Column(name: "lettreMotivation", type: 'text', nullable: true)]
    #[Assert\Length(
        min: 100,
        max: 2000,
        minMessage: "Minimum {{ limit }} caractères requis",
        maxMessage: "Maximum {{ limit }} caractères autorisés"
    )]
    private ?string $lettreMotivation = null;

    public function getId(): ?int { return $this->id; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }

    public function getMission(): ?Mission { return $this->mission; }
    public function setMission(?Mission $mission): self { $this->mission = $mission; return $this; }

    public function getImage(): ?string { return $this->image; }
    public function setImage(?string $image): self { $this->image = $image; return $this; }

    public function getReponseQuestions(): ?string { return $this->reponseQuestions; }
    public function setReponseQuestions(?string $reponseQuestions): self {
        $this->reponseQuestions = $reponseQuestions;
        return $this;
    }

    public function getLettreMotivation(): ?string { return $this->lettreMotivation; }
    public function setLettreMotivation(?string $lettreMotivation): self {
        $this->lettreMotivation = $lettreMotivation;
        return $this;
    }

    public function getMissionId(): ?int
    {
        return $this->mission ? $this->mission->getId() : null;
    }

    public function getUserId(): ?int
    {
        return $this->user ? $this->user->getId() : null;
    }
}
