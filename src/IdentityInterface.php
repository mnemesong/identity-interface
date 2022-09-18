<?php

namespace Mnemesong\IdentityInterface;

interface IdentityInterface
{
    public function isSame(IdentityInterface $identity): bool;
}