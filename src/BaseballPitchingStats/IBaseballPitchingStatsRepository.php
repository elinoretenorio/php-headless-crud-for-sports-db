<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

interface IBaseballPitchingStatsRepository
{
    public function insert(BaseballPitchingStatsDto $dto): int;

    public function update(BaseballPitchingStatsDto $dto): int;

    public function get(int $id): ?BaseballPitchingStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}