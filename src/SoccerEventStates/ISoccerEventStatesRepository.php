<?php

declare(strict_types=1);

namespace Sports\SoccerEventStates;

interface ISoccerEventStatesRepository
{
    public function insert(SoccerEventStatesDto $dto): int;

    public function update(SoccerEventStatesDto $dto): int;

    public function get(int $id): ?SoccerEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}