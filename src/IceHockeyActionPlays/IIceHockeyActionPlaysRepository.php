<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

interface IIceHockeyActionPlaysRepository
{
    public function insert(IceHockeyActionPlaysDto $dto): int;

    public function update(IceHockeyActionPlaysDto $dto): int;

    public function get(int $id): ?IceHockeyActionPlaysDto;

    public function getAll(): array;

    public function delete(int $id): int;
}