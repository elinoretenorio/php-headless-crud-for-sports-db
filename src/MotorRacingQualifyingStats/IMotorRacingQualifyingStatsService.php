<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

interface IMotorRacingQualifyingStatsService
{
    public function insert(MotorRacingQualifyingStatsModel $model): int;

    public function update(MotorRacingQualifyingStatsModel $model): int;

    public function get(int $id): ?MotorRacingQualifyingStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?MotorRacingQualifyingStatsModel;
}