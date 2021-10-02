<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

interface IBaseballEventStatesService
{
    public function insert(BaseballEventStatesModel $model): int;

    public function update(BaseballEventStatesModel $model): int;

    public function get(int $id): ?BaseballEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballEventStatesModel;
}