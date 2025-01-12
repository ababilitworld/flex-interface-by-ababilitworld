<?php
namespace Ababilitworld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization;

interface Sanitization 
{
    public function sanitize(mixed $value): bool;
}