<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

interface IAmericanFootballPassingStatsRepository
{
    public function insert(AmericanFootballPassingStatsDto $dto): int;

    public function update(AmericanFootballPassingStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballPassingStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}