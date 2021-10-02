<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

interface IAmericanFootballEventStatesService
{
    public function insert(AmericanFootballEventStatesModel $model): int;

    public function update(AmericanFootballEventStatesModel $model): int;

    public function get(int $id): ?AmericanFootballEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballEventStatesModel;
}