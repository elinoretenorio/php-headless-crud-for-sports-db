<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

interface IBasketballTeamStatsService
{
    public function insert(BasketballTeamStatsModel $model): int;

    public function update(BasketballTeamStatsModel $model): int;

    public function get(int $id): ?BasketballTeamStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BasketballTeamStatsModel;
}