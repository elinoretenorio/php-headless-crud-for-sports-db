<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveGroup;

class BaseballDefensiveGroupService implements IBaseballDefensiveGroupService
{
    private IBaseballDefensiveGroupRepository $repository;

    public function __construct(IBaseballDefensiveGroupRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballDefensiveGroupModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballDefensiveGroupModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballDefensiveGroupModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballDefensiveGroupModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballDefensiveGroupDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballDefensiveGroupModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballDefensiveGroupModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballDefensiveGroupDto($row);

        return new BaseballDefensiveGroupModel($dto);
    }
}