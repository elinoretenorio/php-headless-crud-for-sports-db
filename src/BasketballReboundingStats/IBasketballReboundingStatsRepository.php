<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

interface IBasketballReboundingStatsRepository
{
    public function insert(BasketballReboundingStatsDto $dto): int;

    public function update(BasketballReboundingStatsDto $dto): int;

    public function get(int $id): ?BasketballReboundingStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}