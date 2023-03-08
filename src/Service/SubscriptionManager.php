<?php


namespace src\Service;
use Service\DateTime;

class SubscriptionManager
{
    private $subscriptions;


    public function __construct()
    {
        $this->subscriptions = array();
    }


    public function updateExpirationDate()
    {
        foreach ($this->subscriptions as $subscription) {
            $expirationDate = $subscription->getExpirationDate();
            $term = $subscription->getTerm();
            $newExpirationDate = $this->calculateNewExpirationDate($expirationDate, $term);
            $subscription->setExpirationDate($newExpirationDate);
        }
    }

    private function calculateNewExpirationDate($expirationDate, $term)
    {

        foreach ($this->subscriptions as $subscription) {
            $newExpirationDate = $subscription->calculateNewExpirationDate();

            // voeg de nieuwe vervaldatum toe aan het abonnement
            $subscription->setExpirationDate($newExpirationDate);
        }

    }

    public function renewSubscription(): DateTime
    {
        // bepaal de verlengdatum op de 25e van de huidige maand
        $renewSubscriptionDate = new DateTime($this->renewSubscriptionDate->format('m-25-y'));

        // als de 25e in het weekend valt, verschuif dan naar de dichtstbijzijnde werkdag
        if ($renewSubscriptionDate->format('N') >= 6) {
            $renewSubscriptionDate->modify('next Monday');
        }

        return $renewSubscriptionDate;
    }
    public function addSubscription($subscription)
    {
    }


}