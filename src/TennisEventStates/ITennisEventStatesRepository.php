<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

interface ITennisEventStatesRepository
{
    public function insert(TennisEventStatesDto $dto): int;

    public function update(TennisEventStatesDto $dto): int;

    public function get(int $id): ?TennisEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}