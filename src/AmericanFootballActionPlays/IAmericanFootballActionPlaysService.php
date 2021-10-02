<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

interface IAmericanFootballActionPlaysService
{
    public function insert(AmericanFootballActionPlaysModel $model): int;

    public function update(AmericanFootballActionPlaysModel $model): int;

    public function get(int $id): ?AmericanFootballActionPlaysModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballActionPlaysModel;
}