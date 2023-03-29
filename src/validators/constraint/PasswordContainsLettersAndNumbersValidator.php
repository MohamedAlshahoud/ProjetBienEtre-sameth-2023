<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PasswordContainsLettersAndNumbersValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/\d/', $value) || !preg_match('/[A-Za-z]/', $value)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}