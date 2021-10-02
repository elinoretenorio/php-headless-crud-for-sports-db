<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

interface IAmericanFootballSpecialTeamsStatsService
{
    public function insert(AmericanFootballSpecialTeamsStatsModel $model): int;

    public function update(AmericanFootballSpecialTeamsStatsModel $model): int;

    public function get(int $id): ?AmericanFootballSpecialTeamsStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballSpecialTeamsStatsModel;
}