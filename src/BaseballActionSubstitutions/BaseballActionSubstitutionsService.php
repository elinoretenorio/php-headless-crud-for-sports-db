<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

class BaseballActionSubstitutionsService implements IBaseballActionSubstitutionsService
{
    private IBaseballActionSubstitutionsRepository $repository;

    public function __construct(IBaseballActionSubstitutionsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballActionSubstitutionsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballActionSubstitutionsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballActionSubstitutionsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballActionSubstitutionsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballActionSubstitutionsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballActionSubstitutionsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballActionSubstitutionsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballActionSubstitutionsDto($row);

        return new BaseballActionSubstitutionsModel($dto);
    }
}