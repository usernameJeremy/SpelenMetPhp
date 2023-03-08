<?php

namespace src\Models;
class Subscription
{
    private $subscriptionNumber;
    private $name;
    private $term;
    private $expirationDate;

    public function __construct($subscriptionNumber, $name, $term, $expirationDate)
    {
        $this->subscriptionNumber = $subscriptionNumber;
        $this->name = $name;
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    public function getSubscriptionNumber()
    {
        return $this->subscriptionNumber;
    }

    public function setSubscriptionNumber($subscriptionNumber)
    {
        $this->subscriptionNumber = $subscriptionNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getTerm()
    {
        return $this->term;
    }

    public function setTerm($term)
    {
        $this->term = $term;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

}