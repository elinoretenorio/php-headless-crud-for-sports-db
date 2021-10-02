<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

interface IAmericanFootballActionParticipantsRepository
{
    public function insert(AmericanFootballActionParticipantsDto $dto): int;

    public function update(AmericanFootballActionParticipantsDto $dto): int;

    public function get(int $id): ?AmericanFootballActionParticipantsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}