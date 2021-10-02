<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

interface IAmericanFootballSacksAgainstStatsService
{
    public function insert(AmericanFootballSacksAgainstStatsModel $model): int;

    public function update(AmericanFootballSacksAgainstStatsModel $model): int;

    public function get(int $id): ?AmericanFootballSacksAgainstStatsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballSacksAgainstStatsModel;
}