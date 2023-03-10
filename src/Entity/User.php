<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * A user
 * @ORM\Entity
 */
#[ApiResource]
class User {
    /**
     * The id of the user
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    /**
     * The name of the user
     * 
     * @ORM\Column
     */
    private string $username = '';
    /**
     * @var UserModule[] Available UserModule from this users
     * @ORM\OneToMany(targetEntity="UserModule", mappedBy="userId")
     */
    private iterable $UserModules;

    /**
     * The email of the user
     * 
     * @ORM\Column
     */
    private string $email = '';
    /**
     * The password of the user
     * 
     * @ORM\Column(length=16)
     */
    private string $password = '';
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $modifiedAt;
    /**
     * The modified_by of the user
     * 
     * @ORM\Column(type="integer")
     */
    private ?int $modified_by = null;
    /**
     * The status of the user
     * 
     * @ORM\Column(type="text")
     */
    private string $status = '';
    /**
     * The role_id of the user
     * 
     * @ORM\Column(type="integer")
     */
    private ?int $role_id = null;
    public function __construct()
    {
        $this->UserModules = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->modifiedAt = new \DateTime();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUserName(): string{
        return $this->username;
    }
    /**
     * @param string $username
     */
    public function setUserName(string $username): void{
        $this->username = $username;
    }


     /**
     * @return string
     */
    public function getEmail(): string{
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void{
        $this->email = $email;
    }

    
     /**
     * @return string
     */
    public function getPassword(): string{
        return $this->password;
    }
    /**
     * @param string $password
     */
    public function setPassword(string $password): void{
        $this->password = $password;
    }


     /**
     * @return \DateTime
     */
    public function getCreatedAt(){
        return $this->createdAt;
    }
     /**
     * @return \DateTime
     */
    public function getModifieAt(){
        return $this->modifiedAt;
    }
     /**
     * @return int
     */
    public function getModifiedBy(): int{
        return $this->modified_by;
    }
    /**
     * @param int $modified_by
     */
    public function setModifiedBy(int $modified_by): void{
        $this->modified_by = $modified_by;
    }


     /**
     * @return string
     */
    public function getStatus(): string{
        return $this->status;
    }
    /**
     * @param string $status
     */
    public function setStatus(string $status): void{
        $this->status = $status;
    }


     /**
     * @return int
     */
    public function getRoleId(): int{
        return $this->role_id;
    }
    /**
     * @param int $role_id
     */
    public function setRoleId(int $role_id): void{
        $this->role_id = $role_id;
    }
    /**
     * @return UserModule[]
     */
    public function getUserModule(): iterable|ArrayCollection
    {
        return $this->UserModules;
    }
}