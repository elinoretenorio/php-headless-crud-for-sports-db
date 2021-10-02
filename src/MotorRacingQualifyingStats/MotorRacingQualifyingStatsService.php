<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

class MotorRacingQualifyingStatsService implements IMotorRacingQualifyingStatsService
{
    private IMotorRacingQualifyingStatsRepository $repository;

    public function __construct(IMotorRacingQualifyingStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(MotorRacingQualifyingStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(MotorRacingQualifyingStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?MotorRacingQualifyingStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new MotorRacingQualifyingStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var MotorRacingQualifyingStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new MotorRacingQualifyingStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?MotorRacingQualifyingStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new MotorRacingQualifyingStatsDto($row);

        return new MotorRacingQualifyingStatsModel($dto);
    }
}