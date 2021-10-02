<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

class MotorRacingRaceStatsService implements IMotorRacingRaceStatsService
{
    private IMotorRacingRaceStatsRepository $repository;

    public function __construct(IMotorRacingRaceStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(MotorRacingRaceStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(MotorRacingRaceStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?MotorRacingRaceStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new MotorRacingRaceStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var MotorRacingRaceStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new MotorRacingRaceStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?MotorRacingRaceStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new MotorRacingRaceStatsDto($row);

        return new MotorRacingRaceStatsModel($dto);
    }
}