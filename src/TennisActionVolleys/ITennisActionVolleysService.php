<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

interface ITennisActionVolleysService
{
    public function insert(TennisActionVolleysModel $model): int;

    public function update(TennisActionVolleysModel $model): int;

    public function get(int $id): ?TennisActionVolleysModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TennisActionVolleysModel;
}