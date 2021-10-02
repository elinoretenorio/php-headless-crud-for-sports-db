<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

interface IAmericanFootballOffensiveStatsRepository
{
    public function insert(AmericanFootballOffensiveStatsDto $dto): int;

    public function update(AmericanFootballOffensiveStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballOffensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}