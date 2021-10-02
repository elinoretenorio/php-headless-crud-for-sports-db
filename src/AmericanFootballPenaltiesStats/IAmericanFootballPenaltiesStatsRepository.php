<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

interface IAmericanFootballPenaltiesStatsRepository
{
    public function insert(AmericanFootballPenaltiesStatsDto $dto): int;

    public function update(AmericanFootballPenaltiesStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballPenaltiesStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}