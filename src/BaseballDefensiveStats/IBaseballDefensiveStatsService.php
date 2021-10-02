<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

interface IBaseballDefensiveStatsService
{
    public function insert(BaseballDefensiveStatsModel $model): int;

    public function update(BaseballDefensiveStatsModel $model): int;

    public function get(int $id): ?BaseballDefensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballDefensiveStatsModel;
}