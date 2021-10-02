<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

interface IBaseballDefensivePlayersRepository
{
    public function insert(BaseballDefensivePlayersDto $dto): int;

    public function update(BaseballDefensivePlayersDto $dto): int;

    public function get(int $id): ?BaseballDefensivePlayersDto;

    public function getAll(): array;

    public function delete(int $id): int;
}