<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

class AmericanFootballFumblesStatsService implements IAmericanFootballFumblesStatsService
{
    private IAmericanFootballFumblesStatsRepository $repository;

    public function __construct(IAmericanFootballFumblesStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballFumblesStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballFumblesStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballFumblesStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballFumblesStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballFumblesStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballFumblesStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballFumblesStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballFumblesStatsDto($row);

        return new AmericanFootballFumblesStatsModel($dto);
    }
}