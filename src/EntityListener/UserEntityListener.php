<?php

namespace App\EntityListener;

use App\Entity\User;
use DateTime;
use RdKafka;

class UserEntityListener
{
    public function prePersist(User $user)
    {
        $dateTime = new DateTime();

        $user->setCreatedAt($dateTime);
        $user->setUpdatedAt($dateTime);
    }

    public function preUpdate(User $user)
    {
        $user->setUpdatedAt(new DateTime());
    }
}
