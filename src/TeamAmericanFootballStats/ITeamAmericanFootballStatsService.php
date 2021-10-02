<?php

declare(strict_types=1);

namespace Sports\TeamAmericanFootballStats;

interface ITeamAmericanFootballStatsService
{
    public function insert(TeamAmericanFootballStatsModel $model): int;

    public function update(TeamAmericanFootballStatsModel $model): int;

    public function get(int $id): ?TeamAmericanFootballStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TeamAmericanFootballStatsModel;
}