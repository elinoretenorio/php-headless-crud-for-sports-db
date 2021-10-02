<?php

declare(strict_types=1);

namespace Sports\SoccerEventStates;

interface ISoccerEventStatesService
{
    public function insert(SoccerEventStatesModel $model): int;

    public function update(SoccerEventStatesModel $model): int;

    public function get(int $id): ?SoccerEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?SoccerEventStatesModel;
}