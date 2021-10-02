<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

interface IAmericanFootballOffensiveStatsService
{
    public function insert(AmericanFootballOffensiveStatsModel $model): int;

    public function update(AmericanFootballOffensiveStatsModel $model): int;

    public function get(int $id): ?AmericanFootballOffensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballOffensiveStatsModel;
}