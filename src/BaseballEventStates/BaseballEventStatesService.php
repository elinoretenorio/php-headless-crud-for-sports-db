<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

class BaseballEventStatesService implements IBaseballEventStatesService
{
    private IBaseballEventStatesRepository $repository;

    public function __construct(IBaseballEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballEventStatesDto($row);

        return new BaseballEventStatesModel($dto);
    }
}