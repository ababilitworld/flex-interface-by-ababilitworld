<?php
namespace Ababilitworld\FlexInterfaceByAbabilitworld\Interface\Security\Validation;

interface Validation 
{
    public function validate(mixed $value): bool;
}