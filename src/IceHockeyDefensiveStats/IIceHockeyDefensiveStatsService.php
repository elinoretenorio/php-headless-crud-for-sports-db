<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

interface IIceHockeyDefensiveStatsService
{
    public function insert(IceHockeyDefensiveStatsModel $model): int;

    public function update(IceHockeyDefensiveStatsModel $model): int;

    public function get(int $id): ?IceHockeyDefensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyDefensiveStatsModel;
}