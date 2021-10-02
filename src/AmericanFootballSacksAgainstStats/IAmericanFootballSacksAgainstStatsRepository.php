<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

interface IAmericanFootballSacksAgainstStatsRepository
{
    public function insert(AmericanFootballSacksAgainstStatsDto $dto): int;

    public function update(AmericanFootballSacksAgainstStatsDto $dto): int;

    public function get(int $id): ?AmericanFootballSacksAgainstStatsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}