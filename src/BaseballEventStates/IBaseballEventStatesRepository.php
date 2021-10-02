<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

interface IBaseballEventStatesRepository
{
    public function insert(BaseballEventStatesDto $dto): int;

    public function update(BaseballEventStatesDto $dto): int;

    public function get(int $id): ?BaseballEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}