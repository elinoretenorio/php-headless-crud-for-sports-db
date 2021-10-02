<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

interface IBasketballReboundingStatsService
{
    public function insert(BasketballReboundingStatsModel $model): int;

    public function update(BasketballReboundingStatsModel $model): int;

    public function get(int $id): ?BasketballReboundingStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BasketballReboundingStatsModel;
}