<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

interface IMotorRacingEventStatesRepository
{
    public function insert(MotorRacingEventStatesDto $dto): int;

    public function update(MotorRacingEventStatesDto $dto): int;

    public function get(int $id): ?MotorRacingEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}