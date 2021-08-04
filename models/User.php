<?php

class User
{
    /**
     * Identifiant en base de données
     * @var integer
     */
    private int $id;

    /**
     * Le prénom de l'utilisateur
     * @var string|null
     */
    private string $firstname;

    /**
     * Le nom de l'utilisateur
     * @var string|null
     */
    private string $lastname;

    /**
     * Le nom de l'utilisateur
     * @var string|null
     */
    private string $email;

    /**
     * Le nom de l'utilisateur
     * @var string|null
     */
    private string $pwd;

    /**
     * La date du message
     * @var Datetime|null
     */
    private string $dateCreation;


    public function __construct(
        int $id,
        ?string $firstname = '',
        ?string $lastname = '',
        ?string $email = '',
        ?string $pwd = '',
        ?string $dateCreation = '',
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->dateCreation = $dateCreation;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of pwd
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Get the value of dateCreation
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
