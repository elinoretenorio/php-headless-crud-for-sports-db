<?php

declare(strict_types=1);

namespace Sports\IceHockeyEventStates;

interface IIceHockeyEventStatesRepository
{
    public function insert(IceHockeyEventStatesDto $dto): int;

    public function update(IceHockeyEventStatesDto $dto): int;

    public function get(int $id): ?IceHockeyEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}