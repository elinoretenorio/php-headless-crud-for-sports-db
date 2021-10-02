<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

interface IIceHockeyActionPlaysService
{
    public function insert(IceHockeyActionPlaysModel $model): int;

    public function update(IceHockeyActionPlaysModel $model): int;

    public function get(int $id): ?IceHockeyActionPlaysModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyActionPlaysModel;
}