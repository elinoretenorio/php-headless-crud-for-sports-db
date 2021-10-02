<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPitches;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionPitches\{ BaseballActionPitchesDto, BaseballActionPitchesModel };

class BaseballActionPitchesModelTest extends TestCase
{
    private array $input;
    private BaseballActionPitchesDto $dto;
    private BaseballActionPitchesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7308,
            "baseball_action_play_id" => 7606,
            "sequence_number" => 130,
            "baseball_defensive_group_id" => 4187,
            "umpire_call" => "ball",
            "pitch_location" => "keep",
            "pitch_type" => "security",
            "pitch_velocity" => 802,
            "comment" => "Eight her history determine fear whole. Any hold series agreement smile quickly.",
            "trajectory_coordinates" => "who",
            "trajectory_formula" => "only",
            "ball_type" => "similar",
            "strike_type" => "personal",
        ];
        $this->dto = new BaseballActionPitchesDto($this->input);
        $this->model = new BaseballActionPitchesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballActionPitchesModel(null);

        $this->assertInstanceOf(BaseballActionPitchesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7060;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetBaseballActionPlayId(): void
    {
        $this->assertEquals($this->dto->baseballActionPlayId, $this->model->getBaseballActionPlayId());
    }

    public function testSetBaseballActionPlayId(): void
    {
        $expected = 5053;
        $model = $this->model;
        $model->setBaseballActionPlayId($expected);

        $this->assertEquals($expected, $model->getBaseballActionPlayId());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = 6372;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetBaseballDefensiveGroupId(): void
    {
        $this->assertEquals($this->dto->baseballDefensiveGroupId, $this->model->getBaseballDefensiveGroupId());
    }

    public function testSetBaseballDefensiveGroupId(): void
    {
        $expected = 6114;
        $model = $this->model;
        $model->setBaseballDefensiveGroupId($expected);

        $this->assertEquals($expected, $model->getBaseballDefensiveGroupId());
    }

    public function testGetUmpireCall(): void
    {
        $this->assertEquals($this->dto->umpireCall, $this->model->getUmpireCall());
    }

    public function testSetUmpireCall(): void
    {
        $expected = "box";
        $model = $this->model;
        $model->setUmpireCall($expected);

        $this->assertEquals($expected, $model->getUmpireCall());
    }

    public function testGetPitchLocation(): void
    {
        $this->assertEquals($this->dto->pitchLocation, $this->model->getPitchLocation());
    }

    public function testSetPitchLocation(): void
    {
        $expected = "wait";
        $model = $this->model;
        $model->setPitchLocation($expected);

        $this->assertEquals($expected, $model->getPitchLocation());
    }

    public function testGetPitchType(): void
    {
        $this->assertEquals($this->dto->pitchType, $this->model->getPitchType());
    }

    public function testSetPitchType(): void
    {
        $expected = "stand";
        $model = $this->model;
        $model->setPitchType($expected);

        $this->assertEquals($expected, $model->getPitchType());
    }

    public function testGetPitchVelocity(): void
    {
        $this->assertEquals($this->dto->pitchVelocity, $this->model->getPitchVelocity());
    }

    public function testSetPitchVelocity(): void
    {
        $expected = 2683;
        $model = $this->model;
        $model->setPitchVelocity($expected);

        $this->assertEquals($expected, $model->getPitchVelocity());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "Threat main work will beat production. Several ago safe section. Perhaps assume walk whom fly food.";
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
        $expected = "floor";
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
        $expected = "policy";
        $model = $this->model;
        $model->setTrajectoryFormula($expected);

        $this->assertEquals($expected, $model->getTrajectoryFormula());
    }

    public function testGetBallType(): void
    {
        $this->assertEquals($this->dto->ballType, $this->model->getBallType());
    }

    public function testSetBallType(): void
    {
        $expected = "prepare";
        $model = $this->model;
        $model->setBallType($expected);

        $this->assertEquals($expected, $model->getBallType());
    }

    public function testGetStrikeType(): void
    {
        $this->assertEquals($this->dto->strikeType, $this->model->getStrikeType());
    }

    public function testSetStrikeType(): void
    {
        $expected = "condition";
        $model = $this->model;
        $model->setStrikeType($expected);

        $this->assertEquals($expected, $model->getStrikeType());
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