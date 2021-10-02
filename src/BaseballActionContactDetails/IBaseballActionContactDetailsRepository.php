<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

interface IBaseballActionContactDetailsRepository
{
    public function insert(BaseballActionContactDetailsDto $dto): int;

    public function update(BaseballActionContactDetailsDto $dto): int;

    public function get(int $id): ?BaseballActionContactDetailsDto;

    public function getAll(): array;

    public function delete(int $id): int;
}