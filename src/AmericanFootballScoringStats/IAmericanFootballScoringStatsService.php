<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

interface IAmericanFootballScoringStatsService
{
    public function insert(AmericanFootballScoringStatsModel $model): int;

    public function update(AmericanFootballScoringStatsModel $model): int;

    public function get(int $id): ?AmericanFootballScoringStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballScoringStatsModel;
}