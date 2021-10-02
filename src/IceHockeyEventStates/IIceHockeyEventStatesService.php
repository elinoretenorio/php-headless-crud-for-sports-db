<?php

declare(strict_types=1);

namespace Sports\IceHockeyEventStates;

interface IIceHockeyEventStatesService
{
    public function insert(IceHockeyEventStatesModel $model): int;

    public function update(IceHockeyEventStatesModel $model): int;

    public function get(int $id): ?IceHockeyEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyEventStatesModel;
}