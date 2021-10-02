<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

interface IBaseballOffensiveStatsService
{
    public function insert(BaseballOffensiveStatsModel $model): int;

    public function update(BaseballOffensiveStatsModel $model): int;

    public function get(int $id): ?BaseballOffensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballOffensiveStatsModel;
}