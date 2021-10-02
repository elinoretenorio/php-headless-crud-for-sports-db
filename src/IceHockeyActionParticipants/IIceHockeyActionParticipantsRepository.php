<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

interface IIceHockeyActionParticipantsRepository
{
    public function insert(IceHockeyActionParticipantsDto $dto): int;

    public function update(IceHockeyActionParticipantsDto $dto): int;

    public function get(int $id): ?IceHockeyActionParticipantsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}