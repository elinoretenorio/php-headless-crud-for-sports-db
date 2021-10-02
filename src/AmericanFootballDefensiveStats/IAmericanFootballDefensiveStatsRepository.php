<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

interface IAmericanFootballDefensiveStatsRepository
{
    public function insert(AmericanFootballDefensiveStatsDto $dto): int;

    public function update(AmericanFootballDefensiveStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballDefensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}