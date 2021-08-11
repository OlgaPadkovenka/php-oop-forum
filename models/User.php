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

    /**
     * La date du message
     * @var Datetime
     */
    private string $dateCreation;


    public function __construct(
        int $id,
        string $firstname = '',
        string $lastname = '',
        string $email = '',
        string $pwd = '',
        string $dateCreation = '',
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->dateCreation = $dateCreation;
    }

    static public function createUser()
    {

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pwd'])) {

            $firstname = filter_var(trim($_POST['firstname']));
            $lastname = filter_var(trim($_POST['lastname']));
            $email = filter_var(trim($_POST['email']));
            $pwd = filter_var(trim($_POST['pwd']));

            $pwd = password_hash($pwd, PASSWORD_ARGON2I);

            $databaseHandler = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');

            $statement = $databaseHandler->prepare(
                'INSERT INTO
                    `user`
                    (`firstname`, `lastname`, `email`, `pwd`)
                    VALUES
                    (:firstname, :lastname, :email, :pwd)'
            );

            $statement->execute([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'pwd' => $pwd
            ]);
        }
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
