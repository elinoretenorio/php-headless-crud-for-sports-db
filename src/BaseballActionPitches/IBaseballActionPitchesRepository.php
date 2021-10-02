<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

interface IBaseballActionPitchesRepository
{
    public function insert(BaseballActionPitchesDto $dto): int;

    public function update(BaseballActionPitchesDto $dto): int;

    public function get(int $id): ?BaseballActionPitchesDto;

    public function getAll(): array;

    public function delete(int $id): int;
}