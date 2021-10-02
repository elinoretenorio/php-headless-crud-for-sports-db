<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

interface IAmericanFootballEventStatesRepository
{
    public function insert(AmericanFootballEventStatesDto $dto): int;

    public function update(AmericanFootballEventStatesDto $dto): int;

    public function get(int $id): ?AmericanFootballEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}