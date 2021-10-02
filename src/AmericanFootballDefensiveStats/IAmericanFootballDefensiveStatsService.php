<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

interface IAmericanFootballDefensiveStatsService
{
    public function insert(AmericanFootballDefensiveStatsModel $model): int;

    public function update(AmericanFootballDefensiveStatsModel $model): int;

    public function get(int $id): ?AmericanFootballDefensiveStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballDefensiveStatsModel;
}