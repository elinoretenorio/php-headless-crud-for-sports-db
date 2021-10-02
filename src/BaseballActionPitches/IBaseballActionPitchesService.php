<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

interface IBaseballActionPitchesService
{
    public function insert(BaseballActionPitchesModel $model): int;

    public function update(BaseballActionPitchesModel $model): int;

    public function get(int $id): ?BaseballActionPitchesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballActionPitchesModel;
}