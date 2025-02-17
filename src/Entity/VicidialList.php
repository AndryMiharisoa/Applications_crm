<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VicidialListRepository")
 * @ORM\Table(name="vicidial_list")
 */
class VicidialList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="lead_id")
     */
    private $leadId;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $modifyDate;

    /**
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vendorLeadCode;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sourceId;

    /**
     * @ORM\Column(type="bigint", nullable=false)
     */
    private $listId;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2, nullable=true)
     */
    private $gmtOffsetNow;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     * @Assert\Choice({"Y", "N", "Y1", "Y2", "Y3", "Y4", "Y5", "Y6"})
     */
    private $calledSinceLastReset;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $phoneCode;

    /**
     * @ORM\Column(type="string", length=18, nullable=false)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $middleInitial;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $address1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $address2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $address3;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $countryCode;

   /**
 * @ORM\Column(type="string", length=1, nullable=true)
 * @Assert\Choice({"M", "F", "U"})
 */
private $gender;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $altPhone;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $securityPhrase;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $calledCount;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastLocalCallTime;

    /**
     * @ORM\Column(type="smallint", nullable=false)
     */
    private $rank;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $owner;

    /**
     * @ORM\Column(type="bigint", nullable=false)
     */
    private $entryListId;

    // Getters and Setters

    public function getLeadId(): ?int
    {
        return $this->leadId;
    }

    public function getEntryDate(): ?\DateTimeInterface
    {
        return $this->entryDate;
    }

    public function setEntryDate(?\DateTimeInterface $entryDate): self
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    public function getModifyDate(): ?\DateTimeInterface
    {
        return $this->modifyDate;
    }

    public function setModifyDate(\DateTimeInterface $modifyDate): self
    {
        $this->modifyDate = $modifyDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getVendorLeadCode(): ?string
    {
        return $this->vendorLeadCode;
    }

    public function setVendorLeadCode(?string $vendorLeadCode): self
    {
        $this->vendorLeadCode = $vendorLeadCode;

        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    public function getListId(): ?string
    {
        return $this->listId;
    }

    public function setListId(string $listId): self
    {
        $this->listId = $listId;

        return $this;
    }

    public function getGmtOffsetNow(): ?string
    {
        return $this->gmtOffsetNow;
    }

    public function setGmtOffsetNow(?string $gmtOffsetNow): self
    {
        $this->gmtOffsetNow = $gmtOffsetNow;

        return $this;
    }

    public function getCalledSinceLastReset(): ?string
    {
        return $this->calledSinceLastReset;
    }

    public function setCalledSinceLastReset(?string $calledSinceLastReset): self
    {
        $this->calledSinceLastReset = $calledSinceLastReset;

        return $this;
    }

    public function getPhoneCode(): ?string
    {
        return $this->phoneCode;
    }

    public function setPhoneCode(?string $phoneCode): self
    {
        $this->phoneCode = $phoneCode;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleInitial(): ?string
    {
        return $this->middleInitial;
    }

    public function setMiddleInitial(?string $middleInitial): self
    {
        $this->middleInitial = $middleInitial;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    public function setAddress3(?string $address3): self
    {
        $this->address3 = $address3;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?\DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getAltPhone(): ?string
    {
        return $this->altPhone;
    }

    public function setAltPhone(?string $altPhone): self
    {
        $this->altPhone = $altPhone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSecurityPhrase(): ?string
    {
        return $this->securityPhrase;
    }

    public function setSecurityPhrase(?string $securityPhrase): self
    {
        $this->securityPhrase = $securityPhrase;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getCalledCount(): ?int
    {
        return $this->calledCount;
    }

    public function setCalledCount(?int $calledCount): self
    {
        $this->calledCount = $calledCount;

        return $this;
    }

    public function getLastLocalCallTime(): ?\DateTimeInterface
    {
        return $this->lastLocalCallTime;
    }

    public function setLastLocalCallTime(?\DateTimeInterface $lastLocalCallTime): self
    {
        $this->lastLocalCallTime = $lastLocalCallTime;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getEntryListId(): ?string
    {
        return $this->entryListId;
    }

    public function setEntryListId(string $entryListId): self
    {
        $this->entryListId = $entryListId;

        return $this;
    }
}