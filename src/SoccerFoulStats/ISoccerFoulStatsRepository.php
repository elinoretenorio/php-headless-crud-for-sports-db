<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

interface ISoccerFoulStatsRepository
{
    public function insert(SoccerFoulStatsDto $dto): int;

    public function update(SoccerFoulStatsDto $dto): int;

    public function get(int $id): ?SoccerFoulStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}