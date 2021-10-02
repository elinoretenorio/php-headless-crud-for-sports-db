<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

interface ITennisServiceStatsService
{
    public function insert(TennisServiceStatsModel $model): int;

    public function update(TennisServiceStatsModel $model): int;

    public function get(int $id): ?TennisServiceStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TennisServiceStatsModel;
}