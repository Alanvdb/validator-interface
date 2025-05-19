<?php declare(strict_types=1);

namespace AlanVdb\Validator;

use AlanVdb\Validator\Definition\ValidatorInterface;

abstract class AbstractValidator implements ValidatorInterface
{
    protected string $errorMessage;

    public function __construct(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function getErrorMessage() : string
    {
        return $this->errorMessage;
    }
}
