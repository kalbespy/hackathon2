<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $mileage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fuel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $generalCondition = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $transmition = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbPlace = null;

    #[ORM\Column(nullable: true)]
    private ?bool $availability = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(nullable: true)]
    private ?int $consumption = null;

    #[ORM\Column(nullable: true)]
    private ?int $emissions = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gps = null;

    #[ORM\Column(nullable: true)]
    private ?bool $airConditioning = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $license = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\ManyToOne(inversedBy: 'vehicle')]
    private ?Movie $film = null;

    #[ORM\OneToMany(mappedBy: 'vehicle', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'vehicle')]
    private Collection $users;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $quote = null;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    public function setMileage(?int $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    public function setFuel(?string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getGeneralCondition(): ?string
    {
        return $this->generalCondition;
    }

    public function setGeneralCondition(?string $generalCondition): self
    {
        $this->generalCondition = $generalCondition;

        return $this;
    }

    public function getTransmition(): ?string
    {
        return $this->transmition;
    }

    public function setTransmition(?string $transmition): self
    {
        $this->transmition = $transmition;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nbPlace;
    }

    public function setNbPlace(?int $nbPlace): self
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    public function isAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(?bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getConsumption(): ?int
    {
        return $this->consumption;
    }

    public function setConsumption(?int $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    public function getEmissions(): ?int
    {
        return $this->emissions;
    }

    public function setEmissions(?int $emissions): self
    {
        $this->emissions = $emissions;

        return $this;
    }

    public function isGps(): ?bool
    {
        return $this->gps;
    }

    public function setGps(?bool $gps): self
    {
        $this->gps = $gps;

        return $this;
    }

    public function isAirConditioning(): ?bool
    {
        return $this->airConditioning;
    }

    public function setAirConditioning(?bool $airConditioning): self
    {
        $this->airConditioning = $airConditioning;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->film;
    }

    public function setMovie(?Movie $film): self
    {
        $this->film = $film;

        return $this;
    }

    public function getFilm(): ?string
    {
        return (string) $this->film;
    }

    public function setFilm(?Movie $film): self
    {
        $this->film = $film;

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setVehicle($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getVehicle() === $this) {
                $comment->setVehicle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addVehicle($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeVehicle($this);
        }

        return $this;
    }

    public function getQuote(): ?string
    {
        return $this->quote;
    }

    public function setQuote(?string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }
}
