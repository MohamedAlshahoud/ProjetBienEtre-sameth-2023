<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class PasswordContainsLettersAndNumbers extends Constraint
{
    public $message = 'Votre mot de passe doit être au moins 1 letter et 1 chiffre';
}