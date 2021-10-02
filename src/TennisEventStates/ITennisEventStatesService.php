<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

interface ITennisEventStatesService
{
    public function insert(TennisEventStatesModel $model): int;

    public function update(TennisEventStatesModel $model): int;

    public function get(int $id): ?TennisEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TennisEventStatesModel;
}