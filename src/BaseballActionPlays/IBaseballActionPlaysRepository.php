<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

interface IBaseballActionPlaysRepository
{
    public function insert(BaseballActionPlaysDto $dto): int;

    public function update(BaseballActionPlaysDto $dto): int;

    public function get(int $id): ?BaseballActionPlaysDto;

    public function getAll(): array;

    public function delete(int $id): int;
}