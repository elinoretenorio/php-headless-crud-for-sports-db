<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

interface IAmericanFootballFumblesStatsRepository
{
    public function insert(AmericanFootballFumblesStatsDto $dto): int;

    public function update(AmericanFootballFumblesStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballFumblesStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}