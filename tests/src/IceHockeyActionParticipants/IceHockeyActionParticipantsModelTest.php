<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyActionParticipants;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyActionParticipants\{ IceHockeyActionParticipantsDto, IceHockeyActionParticipantsModel };

class IceHockeyActionParticipantsModelTest extends TestCase
{
    private array $input;
    private IceHockeyActionParticipantsDto $dto;
    private IceHockeyActionParticipantsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6549,
            "ice_hockey_action_play_id" => 4132,
            "person_id" => 1022,
            "participant_role" => "popular",
            "point_credit" => 1404,
        ];
        $this->dto = new IceHockeyActionParticipantsDto($this->input);
        $this->model = new IceHockeyActionParticipantsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyActionParticipantsModel(null);

        $this->assertInstanceOf(IceHockeyActionParticipantsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 24;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetIceHockeyActionPlayId(): void
    {
        $this->assertEquals($this->dto->iceHockeyActionPlayId, $this->model->getIceHockeyActionPlayId());
    }

    public function testSetIceHockeyActionPlayId(): void
    {
        $expected = 666;
        $model = $this->model;
        $model->setIceHockeyActionPlayId($expected);

        $this->assertEquals($expected, $model->getIceHockeyActionPlayId());
    }

    public function testGetPersonId(): void
    {
        $this->assertEquals($this->dto->personId, $this->model->getPersonId());
    }

    public function testSetPersonId(): void
    {
        $expected = 1183;
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
        $expected = "mouth";
        $model = $this->model;
        $model->setParticipantRole($expected);

        $this->assertEquals($expected, $model->getParticipantRole());
    }

    public function testGetPointCredit(): void
    {
        $this->assertEquals($this->dto->pointCredit, $this->model->getPointCredit());
    }

    public function testSetPointCredit(): void
    {
        $expected = 1310;
        $model = $this->model;
        $model->setPointCredit($expected);

        $this->assertEquals($expected, $model->getPointCredit());
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