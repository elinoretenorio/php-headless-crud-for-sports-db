<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

interface IAmericanFootballFumblesStatsService
{
    public function insert(AmericanFootballFumblesStatsModel $model): int;

    public function update(AmericanFootballFumblesStatsModel $model): int;

    public function get(int $id): ?AmericanFootballFumblesStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballFumblesStatsModel;
}