<?php

declare(strict_types=1);

namespace Sports\TeamAmericanFootballStats;

interface ITeamAmericanFootballStatsRepository
{
    public function insert(TeamAmericanFootballStatsDto $dto): int;

    public function update(TeamAmericanFootballStatsDto $dto): int;

    public function get(int $id): ?TeamAmericanFootballStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}