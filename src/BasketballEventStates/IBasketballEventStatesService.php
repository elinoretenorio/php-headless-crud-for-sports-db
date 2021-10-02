<?php

declare(strict_types=1);

namespace Sports\BasketballEventStates;

interface IBasketballEventStatesService
{
    public function insert(BasketballEventStatesModel $model): int;

    public function update(BasketballEventStatesModel $model): int;

    public function get(int $id): ?BasketballEventStatesModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BasketballEventStatesModel;
}