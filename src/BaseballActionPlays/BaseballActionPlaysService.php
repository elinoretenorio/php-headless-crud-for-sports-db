<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

class BaseballActionPlaysService implements IBaseballActionPlaysService
{
    private IBaseballActionPlaysRepository $repository;

    public function __construct(IBaseballActionPlaysRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballActionPlaysModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballActionPlaysModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballActionPlaysModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballActionPlaysModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballActionPlaysDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballActionPlaysModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballActionPlaysModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballActionPlaysDto($row);

        return new BaseballActionPlaysModel($dto);
    }
}