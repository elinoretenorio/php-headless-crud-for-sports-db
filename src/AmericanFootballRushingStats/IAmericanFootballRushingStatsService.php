<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

interface IAmericanFootballRushingStatsService
{
    public function insert(AmericanFootballRushingStatsModel $model): int;

    public function update(AmericanFootballRushingStatsModel $model): int;

    public function get(int $id): ?AmericanFootballRushingStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballRushingStatsModel;
}