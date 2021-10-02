<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

interface ISoccerFoulStatsService
{
    public function insert(SoccerFoulStatsModel $model): int;

    public function update(SoccerFoulStatsModel $model): int;

    public function get(int $id): ?SoccerFoulStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?SoccerFoulStatsModel;
}