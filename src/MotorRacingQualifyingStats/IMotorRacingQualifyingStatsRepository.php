<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

interface IMotorRacingQualifyingStatsRepository
{
    public function insert(MotorRacingQualifyingStatsDto $dto): int;

    public function update(MotorRacingQualifyingStatsDto $dto): int;

    public function get(int $id): ?MotorRacingQualifyingStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}