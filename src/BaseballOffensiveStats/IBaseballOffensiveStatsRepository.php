<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

interface IBaseballOffensiveStatsRepository
{
    public function insert(BaseballOffensiveStatsDto $dto): int;

    public function update(BaseballOffensiveStatsDto $dto): int;

    public function get(int $id): ?BaseballOffensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}