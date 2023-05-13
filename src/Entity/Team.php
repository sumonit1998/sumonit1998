<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column]
    private ?int $balance = null;

    #[ORM\OneToMany(mappedBy: 'team', targetEntity: TeamPlayer::class)]
    private Collection $teamPlayers;

    #[ORM\OneToMany(mappedBy: 'team', targetEntity: Listing::class)]
    private Collection $listingTeam;

    public function __construct()
    {
        $this->teamPlayers = new ArrayCollection();
        $this->listingTeam = new ArrayCollection();
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getBalance(): ?int
    {
        return $this->balance;
    }

    public function setBalance(int $balance): self
    {
        $this->balance = $balance;

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
            $teamPlayer->setTeam($this);
        }

        return $this;
    }

    public function removeTeamPlayer(TeamPlayer $teamPlayer): self
    {
        if ($this->teamPlayers->removeElement($teamPlayer)) {
            // set the owning side to null (unless already changed)
            if ($teamPlayer->getTeam() === $this) {
                $teamPlayer->setTeam(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Listing>
     */
    public function getListingTeam(): Collection
    {
        return $this->listingTeam;
    }

    public function addListingTeam(Listing $listingTeam): self
    {
        if (!$this->listingTeam->contains($listingTeam)) {
            $this->listingTeam->add($listingTeam);
            $listingTeam->setTeam($this);
        }

        return $this;
    }

    public function removeListingTeam(Listing $listingTeam): self
    {
        if ($this->listingTeam->removeElement($listingTeam)) {
            // set the owning side to null (unless already changed)
            if ($listingTeam->getTeam() === $this) {
                $listingTeam->setTeam(null);
            }
        }

        return $this;
    }

  



}
