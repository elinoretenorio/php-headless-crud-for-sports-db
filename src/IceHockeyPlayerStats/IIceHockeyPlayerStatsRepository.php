<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

interface IIceHockeyPlayerStatsRepository
{
    public function insert(IceHockeyPlayerStatsDto $dto): int;

    public function update(IceHockeyPlayerStatsDto $dto): int;

    public function get(int $id): ?IceHockeyPlayerStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}