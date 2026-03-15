<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('phone_clean', [$this, 'phoneClean']),
        ];
    }

    public function phoneClean(string $phone): string
    {
        return preg_replace('/\D/', '', $phone);
    }
}