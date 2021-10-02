<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

class AmericanFootballSpecialTeamsStatsService implements IAmericanFootballSpecialTeamsStatsService
{
    private IAmericanFootballSpecialTeamsStatsRepository $repository;

    public function __construct(IAmericanFootballSpecialTeamsStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballSpecialTeamsStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballSpecialTeamsStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballSpecialTeamsStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballSpecialTeamsStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballSpecialTeamsStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballSpecialTeamsStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballSpecialTeamsStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballSpecialTeamsStatsDto($row);

        return new AmericanFootballSpecialTeamsStatsModel($dto);
    }
}