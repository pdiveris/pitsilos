<?php

namespace App\Contracts;

trait NegotiatesLocale
{
    public function getLocale(): string
    {
        return session()->get('locale') ?? app()->getLocale();
    }
}
