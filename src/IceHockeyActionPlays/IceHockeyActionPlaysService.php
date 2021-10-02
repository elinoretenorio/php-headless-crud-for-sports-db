<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

class IceHockeyActionPlaysService implements IIceHockeyActionPlaysService
{
    private IIceHockeyActionPlaysRepository $repository;

    public function __construct(IIceHockeyActionPlaysRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyActionPlaysModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyActionPlaysModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyActionPlaysModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyActionPlaysModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyActionPlaysDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyActionPlaysModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyActionPlaysModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyActionPlaysDto($row);

        return new IceHockeyActionPlaysModel($dto);
    }
}