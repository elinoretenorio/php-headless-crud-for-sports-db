<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

class TennisActionPointsService implements ITennisActionPointsService
{
    private ITennisActionPointsRepository $repository;

    public function __construct(ITennisActionPointsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TennisActionPointsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TennisActionPointsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TennisActionPointsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TennisActionPointsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TennisActionPointsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TennisActionPointsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TennisActionPointsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TennisActionPointsDto($row);

        return new TennisActionPointsModel($dto);
    }
}