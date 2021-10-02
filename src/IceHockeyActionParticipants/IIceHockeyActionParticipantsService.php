<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

interface IIceHockeyActionParticipantsService
{
    public function insert(IceHockeyActionParticipantsModel $model): int;

    public function update(IceHockeyActionParticipantsModel $model): int;

    public function get(int $id): ?IceHockeyActionParticipantsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?IceHockeyActionParticipantsModel;
}