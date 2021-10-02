<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

class BaseballDefensivePlayersService implements IBaseballDefensivePlayersService
{
    private IBaseballDefensivePlayersRepository $repository;

    public function __construct(IBaseballDefensivePlayersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballDefensivePlayersModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballDefensivePlayersModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballDefensivePlayersModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballDefensivePlayersModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballDefensivePlayersDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballDefensivePlayersModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballDefensivePlayersModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballDefensivePlayersDto($row);

        return new BaseballDefensivePlayersModel($dto);
    }
}