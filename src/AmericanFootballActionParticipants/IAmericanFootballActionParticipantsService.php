<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

interface IAmericanFootballActionParticipantsService
{
    public function insert(AmericanFootballActionParticipantsModel $model): int;

    public function update(AmericanFootballActionParticipantsModel $model): int;

    public function get(int $id): ?AmericanFootballActionParticipantsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?AmericanFootballActionParticipantsModel;
}