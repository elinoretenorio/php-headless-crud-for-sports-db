<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

interface IBaseballActionPlaysService
{
    public function insert(BaseballActionPlaysModel $model): int;

    public function update(BaseballActionPlaysModel $model): int;

    public function get(int $id): ?BaseballActionPlaysModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballActionPlaysModel;
}