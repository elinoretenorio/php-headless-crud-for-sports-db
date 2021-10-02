<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

interface IIceHockeyPlayerStatsService
{
    public function insert(IceHockeyPlayerStatsModel $model): int;

    public function update(IceHockeyPlayerStatsModel $model): int;

    public function get(int $id): ?IceHockeyPlayerStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyPlayerStatsModel;
}