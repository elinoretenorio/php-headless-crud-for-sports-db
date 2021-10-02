<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

interface IBasketballTeamStatsRepository
{
    public function insert(BasketballTeamStatsDto $dto): int;

    public function update(BasketballTeamStatsDto $dto): int;

    public function get(int $id): ?BasketballTeamStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}