<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

interface IMotorRacingRaceStatsRepository
{
    public function insert(MotorRacingRaceStatsDto $dto): int;

    public function update(MotorRacingRaceStatsDto $dto): int;

    public function get(int $id): ?MotorRacingRaceStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}