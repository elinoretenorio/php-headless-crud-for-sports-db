<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

interface IBaseballDefensivePlayersService
{
    public function insert(BaseballDefensivePlayersModel $model): int;

    public function update(BaseballDefensivePlayersModel $model): int;

    public function get(int $id): ?BaseballDefensivePlayersModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballDefensivePlayersModel;
}