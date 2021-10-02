<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

class AmericanFootballPenaltiesStatsService implements IAmericanFootballPenaltiesStatsService
{
    private IAmericanFootballPenaltiesStatsRepository $repository;

    public function __construct(IAmericanFootballPenaltiesStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballPenaltiesStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballPenaltiesStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballPenaltiesStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballPenaltiesStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballPenaltiesStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballPenaltiesStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballPenaltiesStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballPenaltiesStatsDto($row);

        return new AmericanFootballPenaltiesStatsModel($dto);
    }
}