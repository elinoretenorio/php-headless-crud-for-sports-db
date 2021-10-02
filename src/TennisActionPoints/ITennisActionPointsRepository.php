<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

interface ITennisActionPointsRepository
{
    public function insert(TennisActionPointsDto $dto): int;

    public function update(TennisActionPointsDto $dto): int;

    public function get(int $id): ?TennisActionPointsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}