<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionContactDetails;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionContactDetails\{ BaseballActionContactDetailsDto, BaseballActionContactDetailsModel };

class BaseballActionContactDetailsModelTest extends TestCase
{
    private array $input;
    private BaseballActionContactDetailsDto $dto;
    private BaseballActionContactDetailsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 5913,
            "baseball_action_pitch_id" => 6171,
            "location" => "her",
            "strength" => "than",
            "velocity" => 3640,
            "comment" => "Suggest blood contain whole point statement really.",
            "trajectory_coordinates" => "science",
            "trajectory_formula" => "probably",
        ];
        $this->dto = new BaseballActionContactDetailsDto($this->input);
        $this->model = new BaseballActionContactDetailsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballActionContactDetailsModel(null);

        $this->assertInstanceOf(BaseballActionContactDetailsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8996;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetBaseballActionPitchId(): void
    {
        $this->assertEquals($this->dto->baseballActionPitchId, $this->model->getBaseballActionPitchId());
    }

    public function testSetBaseballActionPitchId(): void
    {
        $expected = 6470;
        $model = $this->model;
        $model->setBaseballActionPitchId($expected);

        $this->assertEquals($expected, $model->getBaseballActionPitchId());
    }

    public function testGetLocation(): void
    {
        $this->assertEquals($this->dto->location, $this->model->getLocation());
    }

    public function testSetLocation(): void
    {
        $expected = "though";
        $model = $this->model;
        $model->setLocation($expected);

        $this->assertEquals($expected, $model->getLocation());
    }

    public function testGetStrength(): void
    {
        $this->assertEquals($this->dto->strength, $this->model->getStrength());
    }

    public function testSetStrength(): void
    {
        $expected = "visit";
        $model = $this->model;
        $model->setStrength($expected);

        $this->assertEquals($expected, $model->getStrength());
    }

    public function testGetVelocity(): void
    {
        $this->assertEquals($this->dto->velocity, $this->model->getVelocity());
    }

    public function testSetVelocity(): void
    {
        $expected = 1549;
        $model = $this->model;
        $model->setVelocity($expected);

        $this->assertEquals($expected, $model->getVelocity());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "Leg difficult never. Build arrive even we concern some.";
        $model = $this->model;
        $model->setComment($expected);

        $this->assertEquals($expected, $model->getComment());
    }

    public function testGetTrajectoryCoordinates(): void
    {
        $this->assertEquals($this->dto->trajectoryCoordinates, $this->model->getTrajectoryCoordinates());
    }

    public function testSetTrajectoryCoordinates(): void
    {
        $expected = "back";
        $model = $this->model;
        $model->setTrajectoryCoordinates($expected);

        $this->assertEquals($expected, $model->getTrajectoryCoordinates());
    }

    public function testGetTrajectoryFormula(): void
    {
        $this->assertEquals($this->dto->trajectoryFormula, $this->model->getTrajectoryFormula());
    }

    public function testSetTrajectoryFormula(): void
    {
        $expected = "media";
        $model = $this->model;
        $model->setTrajectoryFormula($expected);

        $this->assertEquals($expected, $model->getTrajectoryFormula());
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