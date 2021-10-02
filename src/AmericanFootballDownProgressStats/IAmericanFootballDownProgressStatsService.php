<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

interface IAmericanFootballDownProgressStatsService
{
    public function insert(AmericanFootballDownProgressStatsModel $model): int;

    public function update(AmericanFootballDownProgressStatsModel $model): int;

    public function get(int $id): ?AmericanFootballDownProgressStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballDownProgressStatsModel;
}