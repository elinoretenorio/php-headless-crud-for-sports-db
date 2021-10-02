<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

class AmericanFootballScoringStatsService implements IAmericanFootballScoringStatsService
{
    private IAmericanFootballScoringStatsRepository $repository;

    public function __construct(IAmericanFootballScoringStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballScoringStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballScoringStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballScoringStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballScoringStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballScoringStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballScoringStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballScoringStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballScoringStatsDto($row);

        return new AmericanFootballScoringStatsModel($dto);
    }
}