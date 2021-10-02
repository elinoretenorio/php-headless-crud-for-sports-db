<?php

declare(strict_types=1);

namespace Sports\IceHockeyEventStates;

class IceHockeyEventStatesService implements IIceHockeyEventStatesService
{
    private IIceHockeyEventStatesRepository $repository;

    public function __construct(IIceHockeyEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyEventStatesDto($row);

        return new IceHockeyEventStatesModel($dto);
    }
}