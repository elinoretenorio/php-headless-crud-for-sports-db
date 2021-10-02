<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

interface ITennisActionVolleysRepository
{
    public function insert(TennisActionVolleysDto $dto): int;

    public function update(TennisActionVolleysDto $dto): int;

    public function get(int $id): ?TennisActionVolleysDto;

    public function getAll(): array;

    public function delete(int $id): int;
}