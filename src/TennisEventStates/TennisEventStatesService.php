<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

class TennisEventStatesService implements ITennisEventStatesService
{
    private ITennisEventStatesRepository $repository;

    public function __construct(ITennisEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TennisEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TennisEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TennisEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TennisEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TennisEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TennisEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TennisEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TennisEventStatesDto($row);

        return new TennisEventStatesModel($dto);
    }
}