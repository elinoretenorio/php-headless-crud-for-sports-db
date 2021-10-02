<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

interface ITennisServiceStatsRepository
{
    public function insert(TennisServiceStatsDto $dto): int;

    public function update(TennisServiceStatsDto $dto): int;

    public function get(int $id): ?TennisServiceStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}