<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

interface IAmericanFootballPenaltiesStatsService
{
    public function insert(AmericanFootballPenaltiesStatsModel $model): int;

    public function update(AmericanFootballPenaltiesStatsModel $model): int;

    public function get(int $id): ?AmericanFootballPenaltiesStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballPenaltiesStatsModel;
}