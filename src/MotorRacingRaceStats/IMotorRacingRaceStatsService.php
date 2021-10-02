<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

interface IMotorRacingRaceStatsService
{
    public function insert(MotorRacingRaceStatsModel $model): int;

    public function update(MotorRacingRaceStatsModel $model): int;

    public function get(int $id): ?MotorRacingRaceStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?MotorRacingRaceStatsModel;
}