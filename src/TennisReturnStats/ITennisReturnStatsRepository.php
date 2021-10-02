<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

interface ITennisReturnStatsRepository
{
    public function insert(TennisReturnStatsDto $dto): int;

    public function update(TennisReturnStatsDto $dto): int;

    public function get(int $id): ?TennisReturnStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}