<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

interface IBaseballPitchingStatsService
{
    public function insert(BaseballPitchingStatsModel $model): int;

    public function update(BaseballPitchingStatsModel $model): int;

    public function get(int $id): ?BaseballPitchingStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballPitchingStatsModel;
}