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
        global $databaseHandler;

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwd2'])) {

            $firstname = filter_var(trim($_POST['firstname']));
            $lastname = filter_var(trim($_POST['lastname']));
            $email = filter_var(trim($_POST['email']));
            $pwd = filter_var(trim($_POST['pwd']));
            $pwd2 = filter_var(trim($_POST['pwd2']));

            if ($pwd !== $pwd2) {
                throw new Exception("Les mots de passe ne sont pas identiqués.");
            }

            $pwd = password_hash($pwd, PASSWORD_ARGON2I);

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

    static public function connexionUser()
    {
        global $databaseHandler;

        //session_start();

        //$_SESSION['asdasd'] = 'asdasd';

        $email = filter_var(trim($_POST['email']));
        $pwd = filter_var(trim($_POST['pwd']));

        $statement = $databaseHandler->prepare('SELECT * FROM `user` WEHERE email = :email');
        $statement->execute([
            'email' => $email
        ]);
        $user = $statement->fetch();

        if (!password_verify($pwd, $user['pwd'])) {
            throw new Exception('Le mot de passe n\'est pas correct.');
        }
    }

    static public function userProfil(int $id): array|false
    {
        global $databaseHandler;

        $statement = $databaseHandler->prepare('SELECT * FROM `user` WHERE id = :id');
        $statement->execute([
            'id' => $id
        ]);
        return $statement->fetch();
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
