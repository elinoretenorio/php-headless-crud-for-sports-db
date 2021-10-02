<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

class AmericanFootballDownProgressStatsService implements IAmericanFootballDownProgressStatsService
{
    private IAmericanFootballDownProgressStatsRepository $repository;

    public function __construct(IAmericanFootballDownProgressStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballDownProgressStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballDownProgressStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballDownProgressStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballDownProgressStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballDownProgressStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballDownProgressStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballDownProgressStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballDownProgressStatsDto($row);

        return new AmericanFootballDownProgressStatsModel($dto);
    }
}