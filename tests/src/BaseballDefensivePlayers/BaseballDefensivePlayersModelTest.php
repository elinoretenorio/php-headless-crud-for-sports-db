<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballDefensivePlayers;

use PHPUnit\Framework\TestCase;
use Sports\BaseballDefensivePlayers\{ BaseballDefensivePlayersDto, BaseballDefensivePlayersModel };

class BaseballDefensivePlayersModelTest extends TestCase
{
    private array $input;
    private BaseballDefensivePlayersDto $dto;
    private BaseballDefensivePlayersModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9686,
            "baseball_defensive_group_id" => 739,
            "player_id" => 3343,
            "position_id" => 3953,
        ];
        $this->dto = new BaseballDefensivePlayersDto($this->input);
        $this->model = new BaseballDefensivePlayersModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballDefensivePlayersModel(null);

        $this->assertInstanceOf(BaseballDefensivePlayersModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 3934;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetBaseballDefensiveGroupId(): void
    {
        $this->assertEquals($this->dto->baseballDefensiveGroupId, $this->model->getBaseballDefensiveGroupId());
    }

    public function testSetBaseballDefensiveGroupId(): void
    {
        $expected = 5437;
        $model = $this->model;
        $model->setBaseballDefensiveGroupId($expected);

        $this->assertEquals($expected, $model->getBaseballDefensiveGroupId());
    }

    public function testGetPlayerId(): void
    {
        $this->assertEquals($this->dto->playerId, $this->model->getPlayerId());
    }

    public function testSetPlayerId(): void
    {
        $expected = 594;
        $model = $this->model;
        $model->setPlayerId($expected);

        $this->assertEquals($expected, $model->getPlayerId());
    }

    public function testGetPositionId(): void
    {
        $this->assertEquals($this->dto->positionId, $this->model->getPositionId());
    }

    public function testSetPositionId(): void
    {
        $expected = 3947;
        $model = $this->model;
        $model->setPositionId($expected);

        $this->assertEquals($expected, $model->getPositionId());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}