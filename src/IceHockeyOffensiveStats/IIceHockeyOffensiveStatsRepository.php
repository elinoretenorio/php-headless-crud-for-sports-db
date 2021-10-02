<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

interface IIceHockeyOffensiveStatsRepository
{
    public function insert(IceHockeyOffensiveStatsDto $dto): int;

    public function update(IceHockeyOffensiveStatsDto $dto): int;

    public function get(int $id): ?IceHockeyOffensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}