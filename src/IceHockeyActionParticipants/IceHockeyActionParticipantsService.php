<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

class IceHockeyActionParticipantsService implements IIceHockeyActionParticipantsService
{
    private IIceHockeyActionParticipantsRepository $repository;

    public function __construct(IIceHockeyActionParticipantsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyActionParticipantsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyActionParticipantsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyActionParticipantsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyActionParticipantsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyActionParticipantsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyActionParticipantsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyActionParticipantsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyActionParticipantsDto($row);

        return new IceHockeyActionParticipantsModel($dto);
    }
}