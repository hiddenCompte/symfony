<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Publication;
use App\Entity\User;

#[ORM\Entity(repositoryClass: ReactionRepository::class)]
#[ORM\Table(name: "post_reactions")]
#[ORM\UniqueConstraint(name: 'user_post_unique', columns: ['user_id', 'post_id'])]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $reaction_id = null;

    #[ORM\ManyToOne(targetEntity: Publication::class)]
    #[ORM\JoinColumn(name: "post_id", referencedColumnName: "post_id", nullable: false, onDelete: "CASCADE")]
    private ?Publication $post = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "user_id", nullable: false, onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $reaction_type = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    // --- Getters et Setters ---

    public function getId(): ?int
    {
        return $this->reaction_id;
    }

    public function getReactionId(): ?int
    {
        return $this->reaction_id;
    }

    public function setReactionId(int $reaction_id): static
    {
        $this->reaction_id = $reaction_id;
        return $this;
    }

    public function getPost(): ?Publication
    {
        return $this->post;
    }

    public function setPost(Publication $post): static
    {
        $this->post = $post;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getReactionType(): ?string
    {
        return $this->reaction_type;
    }

    public function setReactionType(string $reaction_type): static
    {
        $this->reaction_type = $reaction_type;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }
}
