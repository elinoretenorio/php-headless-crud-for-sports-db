<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

class AmericanFootballPassingStatsService implements IAmericanFootballPassingStatsService
{
    private IAmericanFootballPassingStatsRepository $repository;

    public function __construct(IAmericanFootballPassingStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballPassingStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballPassingStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballPassingStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballPassingStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballPassingStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballPassingStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballPassingStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballPassingStatsDto($row);

        return new AmericanFootballPassingStatsModel($dto);
    }
}