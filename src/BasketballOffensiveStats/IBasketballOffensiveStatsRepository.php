<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

interface IBasketballOffensiveStatsRepository
{
    public function insert(BasketballOffensiveStatsDto $dto): int;

    public function update(BasketballOffensiveStatsDto $dto): int;

    public function get(int $id): ?BasketballOffensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}