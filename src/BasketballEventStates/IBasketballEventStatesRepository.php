<?php

declare(strict_types=1);

namespace Sports\BasketballEventStates;

interface IBasketballEventStatesRepository
{
    public function insert(BasketballEventStatesDto $dto): int;

    public function update(BasketballEventStatesDto $dto): int;

    public function get(int $id): ?BasketballEventStatesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}