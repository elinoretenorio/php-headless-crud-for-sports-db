<?php

declare(strict_types=1);

namespace Sports\Tests\TennisActionPoints;

use PHPUnit\Framework\TestCase;
use Sports\TennisActionPoints\{ TennisActionPointsDto, TennisActionPointsModel };

class TennisActionPointsModelTest extends TestCase
{
    private array $input;
    private TennisActionPointsDto $dto;
    private TennisActionPointsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1168,
            "sub_period_id" => "loss",
            "sequence_number" => "along",
            "win_type" => "anything",
        ];
        $this->dto = new TennisActionPointsDto($this->input);
        $this->model = new TennisActionPointsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TennisActionPointsModel(null);

        $this->assertInstanceOf(TennisActionPointsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8109;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetSubPeriodId(): void
    {
        $this->assertEquals($this->dto->subPeriodId, $this->model->getSubPeriodId());
    }

    public function testSetSubPeriodId(): void
    {
        $expected = "writer";
        $model = $this->model;
        $model->setSubPeriodId($expected);

        $this->assertEquals($expected, $model->getSubPeriodId());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = "police";
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetWinType(): void
    {
        $this->assertEquals($this->dto->winType, $this->model->getWinType());
    }

    public function testSetWinType(): void
    {
        $expected = "everybody";
        $model = $this->model;
        $model->setWinType($expected);

        $this->assertEquals($expected, $model->getWinType());
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