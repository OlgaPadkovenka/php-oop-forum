<?php

class Message
{
    /**
     * Identifiant en base de données
     * @var integer|null
     */
    private ?int $id;

    /**
     * Le titre du message
     * @var string
     */
    private string $title;

    /**
     * Le text du message
     * @var string
     */
    private string $text;

    /**
     * La date du message
     * @var Datetime
     */
    private string $dateMessage;

    /**
     * Get identifiant en base de données
     *
     * @return  integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get le titre du message
     *
     * @return  string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get le text du message
     *
     * @return  string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get la date du message
     *
     * @return  Datetime
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }
}
