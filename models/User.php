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
     * @var string
     */
    private string $firstname;

    /**
     * Le nom de l'utilisateur
     * @var string
     */
    private string $lastname;

    /**
     * Le nom de l'utilisateur
     * @var string
     */
    private string $email;

    /**
     * Le nom de l'utilisateur
     * @var string
     */
    private string $pwd;

    public function __construct(
        int $id,
        string $firstname = '',
        string $lastname = '',
        string $email = '',
        string $pwd = ''
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    /**
     * Get identifiant en base de données
     *
     * @return  integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get le prénom de l'utilisateur
     *
     * @return  string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get le nom de l'utilisateur
     *
     * @return  string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get le nom de l'utilisateur
     *
     * @return  string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get le nom de l'utilisateur
     *
     * @return  string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}
