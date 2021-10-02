<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

interface ISoccerDefensiveStatsRepository
{
    public function insert(SoccerDefensiveStatsDto $dto): int;

    public function update(SoccerDefensiveStatsDto $dto): int;

    public function get(int $id): ?SoccerDefensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}