<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

interface ISoccerOffensiveStatsService
{
    public function insert(SoccerOffensiveStatsModel $model): int;

    public function update(SoccerOffensiveStatsModel $model): int;

    public function get(int $id): ?SoccerOffensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?SoccerOffensiveStatsModel;
}