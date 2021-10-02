<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

interface IBaseballActionSubstitutionsRepository
{
    public function insert(BaseballActionSubstitutionsDto $dto): int;

    public function update(BaseballActionSubstitutionsDto $dto): int;

    public function get(int $id): ?BaseballActionSubstitutionsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}