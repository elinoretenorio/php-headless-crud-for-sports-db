<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

interface IAmericanFootballPassingStatsService
{
    public function insert(AmericanFootballPassingStatsModel $model): int;

    public function update(AmericanFootballPassingStatsModel $model): int;

    public function get(int $id): ?AmericanFootballPassingStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballPassingStatsModel;
}