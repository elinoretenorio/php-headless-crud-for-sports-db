<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

interface IAmericanFootballSpecialTeamsStatsRepository
{
    public function insert(AmericanFootballSpecialTeamsStatsDto $dto): int;

    public function update(AmericanFootballSpecialTeamsStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballSpecialTeamsStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}