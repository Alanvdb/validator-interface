<?php declare(strict_types=1);

namespace AlanVdb\Validator\Definition;

interface ValidatorInterface
{
    public function isValid(mixed $value) : bool;

    public function getErrorMessage() : string;
}
