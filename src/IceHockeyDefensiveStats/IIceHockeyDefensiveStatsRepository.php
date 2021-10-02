<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

interface IIceHockeyDefensiveStatsRepository
{
    public function insert(IceHockeyDefensiveStatsDto $dto): int;

    public function update(IceHockeyDefensiveStatsDto $dto): int;

    public function get(int $id): ?IceHockeyDefensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}