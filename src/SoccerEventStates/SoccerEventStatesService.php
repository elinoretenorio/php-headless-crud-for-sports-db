<?php

declare(strict_types=1);

namespace Sports\SoccerEventStates;

class SoccerEventStatesService implements ISoccerEventStatesService
{
    private ISoccerEventStatesRepository $repository;

    public function __construct(ISoccerEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(SoccerEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(SoccerEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?SoccerEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new SoccerEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var SoccerEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new SoccerEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?SoccerEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new SoccerEventStatesDto($row);

        return new SoccerEventStatesModel($dto);
    }
}