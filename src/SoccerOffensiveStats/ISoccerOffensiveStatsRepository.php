<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

interface ISoccerOffensiveStatsRepository
{
    public function insert(SoccerOffensiveStatsDto $dto): int;

    public function update(SoccerOffensiveStatsDto $dto): int;

    public function get(int $id): ?SoccerOffensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}