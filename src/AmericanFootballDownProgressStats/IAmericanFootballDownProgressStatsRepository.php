<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

interface IAmericanFootballDownProgressStatsRepository
{
    public function insert(AmericanFootballDownProgressStatsDto $dto): int;

    public function update(AmericanFootballDownProgressStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballDownProgressStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}