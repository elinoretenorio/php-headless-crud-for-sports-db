<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

class AmericanFootballActionPlaysService implements IAmericanFootballActionPlaysService
{
    private IAmericanFootballActionPlaysRepository $repository;

    public function __construct(IAmericanFootballActionPlaysRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballActionPlaysModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballActionPlaysModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballActionPlaysModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballActionPlaysModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballActionPlaysDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballActionPlaysModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballActionPlaysModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballActionPlaysDto($row);

        return new AmericanFootballActionPlaysModel($dto);
    }
}