<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

interface IAmericanFootballRushingStatsRepository
{
    public function insert(AmericanFootballRushingStatsDto $dto): int;

    public function update(AmericanFootballRushingStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballRushingStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}