<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

interface IAmericanFootballActionPlaysRepository
{
    public function insert(AmericanFootballActionPlaysDto $dto): int;

    public function update(AmericanFootballActionPlaysDto $dto): int;

    public function get(int $id): ?AmericanFootballActionPlaysDto;

    public function getAll(): array;

    public function delete(int $id): int;
}