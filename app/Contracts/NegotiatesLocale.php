<?php

namespace App\Contracts;

trait NegotiatesLocale
{
    public function getLocale(): string
    {
        return $locale = session()->get('locale') ?? app()->getLocale();
    }
}
