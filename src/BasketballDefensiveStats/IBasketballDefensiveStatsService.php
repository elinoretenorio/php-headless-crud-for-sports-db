<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

interface IBasketballDefensiveStatsService
{
    public function insert(BasketballDefensiveStatsModel $model): int;

    public function update(BasketballDefensiveStatsModel $model): int;

    public function get(int $id): ?BasketballDefensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BasketballDefensiveStatsModel;
}