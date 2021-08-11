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
    }

    public function update()
    {
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
