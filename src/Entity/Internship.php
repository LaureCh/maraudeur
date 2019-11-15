<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InternshipRepository")
 */
class Internship
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="company_name")
     */
    private $companyName;

    /**
     * @ORM\Column(type="date", nullable=true, name="contact_date", nullable=true)
     */
    private $contactDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="contact_way")
     */
    private $contactWay;

    /**
     * @ORM\Column(type="string", length=255, name="contact_name")
     */
    private $contactName;

    /**
     * @ORM\Column(type="string", length=255, name="job_name")
     */
    private $jobName;

    /**
     * @ORM\Column(type="date", nullable=true, name="second_contact_date")
     */
    private $secondContactDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $response;

    /**
     * @ORM\Column(type="boolean", nullable=true, name="internship_proposed")
     */
    private $internshipProposed;

    /**
     * @ORM\Column(type="boolean", name="internship_accepted")
     */
    private $internshipAccepted;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Internship
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getContactDate(): ?\DateTimeInterface
    {
        return $this->contactDate;
    }

    public function setContactDate(?\DateTimeInterface $contactDate): self
    {
        $this->contactDate = $contactDate;

        return $this;
    }

    public function getContactWay(): ?string
    {
        return $this->contactWay;
    }

    public function setContactWay(string $contactWay): self
    {
        $this->contactWay = $contactWay;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    public function setJobName(string $jobName): self
    {
        $this->jobName = $jobName;

        return $this;
    }

    public function getSecondContactDate(): ?\DateTimeInterface
    {
        return $this->secondContactDate;
    }

    public function setSecondContactDate(\DateTimeInterface $secondContactDate): self
    {
        $this->secondContactDate = $secondContactDate;

        return $this;
    }

    public function getResponse(): ?bool
    {
        return $this->response;
    }

    public function setResponse(?bool $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getInternshipProposed(): ?bool
    {
        return $this->internshipProposed;
    }

    public function setInternshipProposed(?bool $internshipProposed): self
    {
        $this->internshipProposed = $internshipProposed;

        return $this;
    }

    public function getInternshipAccepted(): ?bool
    {
        return $this->internshipAccepted;
    }

    public function setInternshipAccepted(bool $internshipAccepted): self
    {
        $this->internshipAccepted = $internshipAccepted;

        return $this;
    }
}
