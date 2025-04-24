<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
#[ORM\Table(name: "comments")]
class Comments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $comment_id = null;

    #[ORM\ManyToOne(targetEntity: Publication::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(name: 'post_id', referencedColumnName: 'post_id', nullable: false)]
    private ?Publication $post = null;

   
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $comment_text = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

#[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'replies')]
#[ORM\JoinColumn(name: 'parent_id', referencedColumnName: 'comment_id')]
private ?self $parent_id ;

#[ORM\OneToMany(mappedBy: 'parent_id', targetEntity: self::class, cascade: ['persist', 'remove'])]
private Collection $replies;

public function __construct()
{
    $this->replies = new ArrayCollection();
}
public function getReplies(): Collection
{
    return $this->replies;
}

public function addReply(self $reply): self
{
    if (!$this->replies->contains($reply)) {
        $this->replies[] = $reply;
        $reply->setParentId($this);
    }

    return $this;
}

public function removeReply(self $reply): self
{
    if ($this->replies->removeElement($reply)) {
        if ($reply->getParentId() === $this) {
            $reply->setParentId(null);
        }
    }

    return $this;
}

    public function getCommentId(): ?int
    {
        return $this->comment_id;
    }

    public function setCommentId(int $comment_id): static
    {
        $this->comment_id = $comment_id;

        return $this;
    }

    public function getPost(): ?Publication
    {
        return $this->post;
    }

    public function setPost(?Publication $post): self
    {
        $this->post = $post;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getCommentText(): ?string
    {
        return $this->comment_text;
    }

    public function setCommentText(?string $comment_text): static
    {
        $this->comment_text = $comment_text;

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

    public function getParentId(): ?self
    {
        return $this->parent_id;
    }

    public function setParentId(?self $parent_id): void
    {
        $this->parent_id = $parent_id;
    }
}
