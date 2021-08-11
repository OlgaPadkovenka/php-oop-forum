<?php

class Message
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

    private int $userId;


    private int $topicId;


    public function create()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function __construct(
        ?string $text = '',
        int $userId = null,
        int $topicId = null
    ) {
        $this->id = null;
        $this->text = $text;
        $this->dateCreation = '';
        $this->userId = $userId;
        $this->topicId = $topicId;
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
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get the value of dateCreation
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get the value of topicId
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * Set the value of userId
     *
     * @return  User
     */
    public function setUser($user)
    {
        $this->userId = $user;

        return $this;
    }

    /**
     * Set the value of topic
     *
     * @return  Topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }
}
