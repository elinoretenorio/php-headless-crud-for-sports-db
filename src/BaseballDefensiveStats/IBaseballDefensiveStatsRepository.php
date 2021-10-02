<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

interface IBaseballDefensiveStatsRepository
{
    public function insert(BaseballDefensiveStatsDto $dto): int;

    public function update(BaseballDefensiveStatsDto $dto): int;

    public function get(int $id): ?BaseballDefensiveStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}