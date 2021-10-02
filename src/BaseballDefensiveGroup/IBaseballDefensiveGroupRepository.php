<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveGroup;

interface IBaseballDefensiveGroupRepository
{
    public function insert(BaseballDefensiveGroupDto $dto): int;

    public function update(BaseballDefensiveGroupDto $dto): int;

    public function get(int $id): ?BaseballDefensiveGroupDto;

    public function getAll(): array;

    public function delete(int $id): int;
}