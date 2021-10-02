<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

class MotorRacingEventStatesService implements IMotorRacingEventStatesService
{
    private IMotorRacingEventStatesRepository $repository;

    public function __construct(IMotorRacingEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(MotorRacingEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(MotorRacingEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?MotorRacingEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new MotorRacingEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var MotorRacingEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new MotorRacingEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?MotorRacingEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new MotorRacingEventStatesDto($row);

        return new MotorRacingEventStatesModel($dto);
    }
}