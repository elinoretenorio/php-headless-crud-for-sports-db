<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

interface IAmericanFootballScoringStatsRepository
{
    public function insert(AmericanFootballScoringStatsDto $dto): int;

    public function update(AmericanFootballScoringStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballScoringStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}