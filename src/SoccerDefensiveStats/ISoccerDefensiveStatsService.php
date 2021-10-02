<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

interface ISoccerDefensiveStatsService
{
    public function insert(SoccerDefensiveStatsModel $model): int;

    public function update(SoccerDefensiveStatsModel $model): int;

    public function get(int $id): ?SoccerDefensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?SoccerDefensiveStatsModel;
}