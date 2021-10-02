<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

class AmericanFootballActionParticipantsService implements IAmericanFootballActionParticipantsService
{
    private IAmericanFootballActionParticipantsRepository $repository;

    public function __construct(IAmericanFootballActionParticipantsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballActionParticipantsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballActionParticipantsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballActionParticipantsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballActionParticipantsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballActionParticipantsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballActionParticipantsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballActionParticipantsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballActionParticipantsDto($row);

        return new AmericanFootballActionParticipantsModel($dto);
    }
}