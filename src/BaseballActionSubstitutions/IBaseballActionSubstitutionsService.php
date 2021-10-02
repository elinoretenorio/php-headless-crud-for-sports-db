<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

interface IBaseballActionSubstitutionsService
{
    public function insert(BaseballActionSubstitutionsModel $model): int;

    public function update(BaseballActionSubstitutionsModel $model): int;

    public function get(int $id): ?BaseballActionSubstitutionsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballActionSubstitutionsModel;
}