<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveGroup;

interface IBaseballDefensiveGroupService
{
    public function insert(BaseballDefensiveGroupModel $model): int;

    public function update(BaseballDefensiveGroupModel $model): int;

    public function get(int $id): ?BaseballDefensiveGroupModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballDefensiveGroupModel;
}