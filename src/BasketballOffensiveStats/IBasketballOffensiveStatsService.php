<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

interface IBasketballOffensiveStatsService
{
    public function insert(BasketballOffensiveStatsModel $model): int;

    public function update(BasketballOffensiveStatsModel $model): int;

    public function get(int $id): ?BasketballOffensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BasketballOffensiveStatsModel;
}