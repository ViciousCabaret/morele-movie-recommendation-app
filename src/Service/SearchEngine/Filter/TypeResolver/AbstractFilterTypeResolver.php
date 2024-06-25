<?php

namespace App\Service\SearchEngine\Filter\TypeResolver;

use App\Service\SearchEngine\Filter\TypeResolver\Interface\FilterTypeResolverInterface;

abstract class AbstractFilterTypeResolver implements FilterTypeResolverInterface
{
    public function __construct(
        protected readonly array $filterableItems,
        protected readonly array $filters,
    ) {
    }

    public abstract function filter(): array;
}