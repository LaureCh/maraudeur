<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobCardRepository")
 */
class JobCard
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Student")
     * @JoinColumn(name="student", referencedColumnName="id")
     */
    private $student;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="git_link")
     */
    private $gitLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="website_link")
     */
    private $webSiteLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="linkedin_link")
     */
    private $linkedinLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?string
    {
        return $this->student;
    }

    public function setStudent(string $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getGitLink(): ?string
    {
        return $this->gitLink;
    }

    public function setGitLink(string $gitLink): self
    {
        $this->gitLink = $gitLink;

        return $this;
    }

    public function getWebSiteLink(): ?string
    {
        return $this->webSiteLink;
    }

    public function setWebSiteLink(string $webSiteLink): self
    {
        $this->webSiteLink = $webSiteLink;

        return $this;
    }

    public function getLinkedinLink(): ?string
    {
        return $this->linkedinLink;
    }

    public function setLinkedinLink(?string $linkedinLink): self
    {
        $this->linkedinLink = $linkedinLink;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }
}
