<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

class TennisActionVolleysService implements ITennisActionVolleysService
{
    private ITennisActionVolleysRepository $repository;

    public function __construct(ITennisActionVolleysRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TennisActionVolleysModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TennisActionVolleysModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TennisActionVolleysModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TennisActionVolleysModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TennisActionVolleysDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TennisActionVolleysModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TennisActionVolleysModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TennisActionVolleysDto($row);

        return new TennisActionVolleysModel($dto);
    }
}