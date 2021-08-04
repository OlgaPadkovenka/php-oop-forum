<?php

class Topic
{
    /**
     * Identifiant en base de données
     * @var integer
     */
    private ?int $id;

    /**
     * Le titre du message
     * @var string|null
     */
    private string $text;

    /**
     * La date du message
     * @var Datetime|null
     */
    private string $dateCreation;

    public function create()
    {
        $this->dateCreation = date('Y.m.d H:i:s');
        $databaseHandler = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
        $statement = $databaseHandler->prepare(
            'INSERT INTO `topic` (`text`, `date_creation`)
            VALUES (:text, :dateCreation)'
        );
        $statement->execute([
            'text' => $this->text,
            'dateCreation' => $this->dateCreation
        ]);
        $this->id = $databaseHandler->lastInsertId();
    }

    public function update()
    {

        $databaseHandler = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
        $statement = $databaseHandler->prepare(
            'UPDATE `topic`
                SET `text` = :text
              WHERE `id` = :id'
        );
        $statement->execute([
            'text' => $this->text,
            'id' => $this->id
        ]);
        $this->id = $databaseHandler->lastInsertId();
    }

    public function __construct(
        ?string $text = ''
    ) {
        $this->id = null;
        $this->text = $text;
        $this->dateCreation = '';
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
     * Get le titre du message
     *
     * @return  string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get la date du message
     *
     * @return  Datetime|null
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
