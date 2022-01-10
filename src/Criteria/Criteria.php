<?php

declare(strict_types=1);

namespace CoderSapient\JsonApi\Criteria;

final class Criteria
{
    public function __construct(
        private Filters $filters,
        private Orders $ordering,
        private Chunk $chunk,
        private ?Search $search = null,
    ) {
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    public function orders(): Orders
    {
        return $this->ordering;
    }

    public function chunk(): Chunk
    {
        return $this->chunk;
    }

    public function search(): ?Search
    {
        return $this->search;
    }

    public function key(): string
    {
        return md5(serialize($this));
    }
}
