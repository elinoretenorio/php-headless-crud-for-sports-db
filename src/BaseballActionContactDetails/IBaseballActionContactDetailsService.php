<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

interface IBaseballActionContactDetailsService
{
    public function insert(BaseballActionContactDetailsModel $model): int;

    public function update(BaseballActionContactDetailsModel $model): int;

    public function get(int $id): ?BaseballActionContactDetailsModel;

    public function getAll(): array;

    public function delete(int $id): int;

    public function createModel(array $row): ?BaseballActionContactDetailsModel;
}