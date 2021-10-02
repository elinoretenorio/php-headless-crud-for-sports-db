<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

interface ITennisActionPointsService
{
    public function insert(TennisActionPointsModel $model): int;

    public function update(TennisActionPointsModel $model): int;

    public function get(int $id): ?TennisActionPointsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?TennisActionPointsModel;
}