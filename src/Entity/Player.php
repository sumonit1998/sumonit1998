<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\OneToMany(mappedBy: 'player', targetEntity: TeamPlayer::class)]
    private Collection $teamPlayers;

    #[ORM\OneToMany(mappedBy: 'player', targetEntity: Listing::class)]
    private Collection $listingPlayer;

    #[ORM\Column(nullable: true)]
    private ?int $status = null;

    public function __construct()
    {
        $this->teamPlayers = new ArrayCollection();
        $this->listingPlayer = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, TeamPlayer>
     */
    public function getTeamPlayers(): Collection
    {
        return $this->teamPlayers;
    }

    public function addTeamPlayer(TeamPlayer $teamPlayer): self
    {
        if (!$this->teamPlayers->contains($teamPlayer)) {
            $this->teamPlayers->add($teamPlayer);
            $teamPlayer->setPlayer($this);
        }

        return $this;
    }

    public function removeTeamPlayer(TeamPlayer $teamPlayer): self
    {
        if ($this->teamPlayers->removeElement($teamPlayer)) {
            // set the owning side to null (unless already changed)
            if ($teamPlayer->getPlayer() === $this) {
                $teamPlayer->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Listing>
     */
    public function getListingPlayer(): Collection
    {
        return $this->listingPlayer;
    }

    public function addListingPlayer(Listing $listingPlayer): self
    {
        if (!$this->listingPlayer->contains($listingPlayer)) {
            $this->listingPlayer->add($listingPlayer);
            $listingPlayer->setPlayer($this);
        }

        return $this;
    }

    public function removeListingPlayer(Listing $listingPlayer): self
    {
        if ($this->listingPlayer->removeElement($listingPlayer)) {
            // set the owning side to null (unless already changed)
            if ($listingPlayer->getPlayer() === $this) {
                $listingPlayer->setPlayer(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
