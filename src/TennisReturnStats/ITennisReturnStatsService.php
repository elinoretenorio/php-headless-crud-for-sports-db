<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

interface ITennisReturnStatsService
{
    public function insert(TennisReturnStatsModel $model): int;

    public function update(TennisReturnStatsModel $model): int;

    public function get(int $id): ?TennisReturnStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TennisReturnStatsModel;
}