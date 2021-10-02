<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

interface IIceHockeyOffensiveStatsService
{
    public function insert(IceHockeyOffensiveStatsModel $model): int;

    public function update(IceHockeyOffensiveStatsModel $model): int;

    public function get(int $id): ?IceHockeyOffensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyOffensiveStatsModel;
}