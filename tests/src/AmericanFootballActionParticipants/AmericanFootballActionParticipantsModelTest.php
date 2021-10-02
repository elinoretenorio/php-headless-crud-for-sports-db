<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballActionParticipants;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballActionParticipants\{ AmericanFootballActionParticipantsDto, AmericanFootballActionParticipantsModel };

class AmericanFootballActionParticipantsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballActionParticipantsDto $dto;
    private AmericanFootballActionParticipantsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 4068,
            "american_football_action_play_id" => 6997,
            "person_id" => 2102,
            "participant_role" => "time",
            "score_type" => "we",
            "field_line" => 1543,
            "yardage" => 616,
            "score_credit" => 334,
            "yards_gained" => 7037,
        ];
        $this->dto = new AmericanFootballActionParticipantsDto($this->input);
        $this->model = new AmericanFootballActionParticipantsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballActionParticipantsModel(null);

        $this->assertInstanceOf(AmericanFootballActionParticipantsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 5138;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetAmericanFootballActionPlayId(): void
    {
        $this->assertEquals($this->dto->americanFootballActionPlayId, $this->model->getAmericanFootballActionPlayId());
    }

    public function testSetAmericanFootballActionPlayId(): void
    {
        $expected = 1423;
        $model = $this->model;
        $model->setAmericanFootballActionPlayId($expected);

        $this->assertEquals($expected, $model->getAmericanFootballActionPlayId());
    }

    public function testGetPersonId(): void
    {
        $this->assertEquals($this->dto->personId, $this->model->getPersonId());
    }

    public function testSetPersonId(): void
    {
        $expected = 193;
        $model = $this->model;
        $model->setPersonId($expected);

        $this->assertEquals($expected, $model->getPersonId());
    }

    public function testGetParticipantRole(): void
    {
        $this->assertEquals($this->dto->participantRole, $this->model->getParticipantRole());
    }

    public function testSetParticipantRole(): void
    {
        $expected = "end";
        $model = $this->model;
        $model->setParticipantRole($expected);

        $this->assertEquals($expected, $model->getParticipantRole());
    }

    public function testGetScoreType(): void
    {
        $this->assertEquals($this->dto->scoreType, $this->model->getScoreType());
    }

    public function testSetScoreType(): void
    {
        $expected = "soon";
        $model = $this->model;
        $model->setScoreType($expected);

        $this->assertEquals($expected, $model->getScoreType());
    }

    public function testGetFieldLine(): void
    {
        $this->assertEquals($this->dto->fieldLine, $this->model->getFieldLine());
    }

    public function testSetFieldLine(): void
    {
        $expected = 1895;
        $model = $this->model;
        $model->setFieldLine($expected);

        $this->assertEquals($expected, $model->getFieldLine());
    }

    public function testGetYardage(): void
    {
        $this->assertEquals($this->dto->yardage, $this->model->getYardage());
    }

    public function testSetYardage(): void
    {
        $expected = 8746;
        $model = $this->model;
        $model->setYardage($expected);

        $this->assertEquals($expected, $model->getYardage());
    }

    public function testGetScoreCredit(): void
    {
        $this->assertEquals($this->dto->scoreCredit, $this->model->getScoreCredit());
    }

    public function testSetScoreCredit(): void
    {
        $expected = 4693;
        $model = $this->model;
        $model->setScoreCredit($expected);

        $this->assertEquals($expected, $model->getScoreCredit());
    }

    public function testGetYardsGained(): void
    {
        $this->assertEquals($this->dto->yardsGained, $this->model->getYardsGained());
    }

    public function testSetYardsGained(): void
    {
        $expected = 81;
        $model = $this->model;
        $model->setYardsGained($expected);

        $this->assertEquals($expected, $model->getYardsGained());
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