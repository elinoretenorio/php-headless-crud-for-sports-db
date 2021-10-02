<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

interface IMotorRacingEventStatesService
{
    public function insert(MotorRacingEventStatesModel $model): int;

    public function update(MotorRacingEventStatesModel $model): int;

    public function get(int $id): ?MotorRacingEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?MotorRacingEventStatesModel;
}