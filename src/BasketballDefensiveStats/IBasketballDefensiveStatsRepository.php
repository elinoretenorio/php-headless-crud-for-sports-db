<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

interface IBasketballDefensiveStatsRepository
{
    public function insert(BasketballDefensiveStatsDto $dto): int;

    public function update(BasketballDefensiveStatsDto $dto): int;

    public function get(int $id): ?BasketballDefensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}