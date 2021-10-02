<?php

declare(strict_types=1);

namespace Sports\Tests\TennisActionVolleys;

use PHPUnit\Framework\TestCase;
use Sports\TennisActionVolleys\{ TennisActionVolleysDto, TennisActionVolleysModel };

class TennisActionVolleysModelTest extends TestCase
{
    private array $input;
    private TennisActionVolleysDto $dto;
    private TennisActionVolleysModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8037,
            "sequence_number" => "again",
            "tennis_action_points_id" => 5167,
            "landing_location" => "statement",
            "swing_type" => "current",
            "result" => "attack",
            "spin_type" => "recognize",
            "trajectory_details" => "explain",
        ];
        $this->dto = new TennisActionVolleysDto($this->input);
        $this->model = new TennisActionVolleysModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TennisActionVolleysModel(null);

        $this->assertInstanceOf(TennisActionVolleysModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 4084;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = "area";
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetTennisActionPointsId(): void
    {
        $this->assertEquals($this->dto->tennisActionPointsId, $this->model->getTennisActionPointsId());
    }

    public function testSetTennisActionPointsId(): void
    {
        $expected = 8920;
        $model = $this->model;
        $model->setTennisActionPointsId($expected);

        $this->assertEquals($expected, $model->getTennisActionPointsId());
    }

    public function testGetLandingLocation(): void
    {
        $this->assertEquals($this->dto->landingLocation, $this->model->getLandingLocation());
    }

    public function testSetLandingLocation(): void
    {
        $expected = "affect";
        $model = $this->model;
        $model->setLandingLocation($expected);

        $this->assertEquals($expected, $model->getLandingLocation());
    }

    public function testGetSwingType(): void
    {
        $this->assertEquals($this->dto->swingType, $this->model->getSwingType());
    }

    public function testSetSwingType(): void
    {
        $expected = "item";
        $model = $this->model;
        $model->setSwingType($expected);

        $this->assertEquals($expected, $model->getSwingType());
    }

    public function testGetResult(): void
    {
        $this->assertEquals($this->dto->result, $this->model->getResult());
    }

    public function testSetResult(): void
    {
        $expected = "arrive";
        $model = $this->model;
        $model->setResult($expected);

        $this->assertEquals($expected, $model->getResult());
    }

    public function testGetSpinType(): void
    {
        $this->assertEquals($this->dto->spinType, $this->model->getSpinType());
    }

    public function testSetSpinType(): void
    {
        $expected = "eye";
        $model = $this->model;
        $model->setSpinType($expected);

        $this->assertEquals($expected, $model->getSpinType());
    }

    public function testGetTrajectoryDetails(): void
    {
        $this->assertEquals($this->dto->trajectoryDetails, $this->model->getTrajectoryDetails());
    }

    public function testSetTrajectoryDetails(): void
    {
        $expected = "relationship";
        $model = $this->model;
        $model->setTrajectoryDetails($expected);

        $this->assertEquals($expected, $model->getTrajectoryDetails());
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