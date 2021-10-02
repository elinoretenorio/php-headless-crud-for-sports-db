<?php

declare(strict_types=1);

namespace Sports\Tests\TennisEventStates;

use PHPUnit\Framework\TestCase;
use Sports\TennisEventStates\{ TennisEventStatesDto, TennisEventStatesModel };

class TennisEventStatesModelTest extends TestCase
{
    private array $input;
    private TennisEventStatesDto $dto;
    private TennisEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 632,
            "event_id" => 2481,
            "current_state" => 6730,
            "sequence_number" => 3654,
            "tennis_set" => "later",
            "game" => "laugh",
            "server_person_id" => 908,
            "server_score" => "produce",
            "receiver_person_id" => 5216,
            "receiver_score" => "newspaper",
            "service_number" => "despite",
            "context" => "other",
        ];
        $this->dto = new TennisEventStatesDto($this->input);
        $this->model = new TennisEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TennisEventStatesModel(null);

        $this->assertInstanceOf(TennisEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8688;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetEventId(): void
    {
        $this->assertEquals($this->dto->eventId, $this->model->getEventId());
    }

    public function testSetEventId(): void
    {
        $expected = 1614;
        $model = $this->model;
        $model->setEventId($expected);

        $this->assertEquals($expected, $model->getEventId());
    }

    public function testGetCurrentState(): void
    {
        $this->assertEquals($this->dto->currentState, $this->model->getCurrentState());
    }

    public function testSetCurrentState(): void
    {
        $expected = 5598;
        $model = $this->model;
        $model->setCurrentState($expected);

        $this->assertEquals($expected, $model->getCurrentState());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = 6795;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetTennisSet(): void
    {
        $this->assertEquals($this->dto->tennisSet, $this->model->getTennisSet());
    }

    public function testSetTennisSet(): void
    {
        $expected = "hope";
        $model = $this->model;
        $model->setTennisSet($expected);

        $this->assertEquals($expected, $model->getTennisSet());
    }

    public function testGetGame(): void
    {
        $this->assertEquals($this->dto->game, $this->model->getGame());
    }

    public function testSetGame(): void
    {
        $expected = "discuss";
        $model = $this->model;
        $model->setGame($expected);

        $this->assertEquals($expected, $model->getGame());
    }

    public function testGetServerPersonId(): void
    {
        $this->assertEquals($this->dto->serverPersonId, $this->model->getServerPersonId());
    }

    public function testSetServerPersonId(): void
    {
        $expected = 1335;
        $model = $this->model;
        $model->setServerPersonId($expected);

        $this->assertEquals($expected, $model->getServerPersonId());
    }

    public function testGetServerScore(): void
    {
        $this->assertEquals($this->dto->serverScore, $this->model->getServerScore());
    }

    public function testSetServerScore(): void
    {
        $expected = "raise";
        $model = $this->model;
        $model->setServerScore($expected);

        $this->assertEquals($expected, $model->getServerScore());
    }

    public function testGetReceiverPersonId(): void
    {
        $this->assertEquals($this->dto->receiverPersonId, $this->model->getReceiverPersonId());
    }

    public function testSetReceiverPersonId(): void
    {
        $expected = 9002;
        $model = $this->model;
        $model->setReceiverPersonId($expected);

        $this->assertEquals($expected, $model->getReceiverPersonId());
    }

    public function testGetReceiverScore(): void
    {
        $this->assertEquals($this->dto->receiverScore, $this->model->getReceiverScore());
    }

    public function testSetReceiverScore(): void
    {
        $expected = "later";
        $model = $this->model;
        $model->setReceiverScore($expected);

        $this->assertEquals($expected, $model->getReceiverScore());
    }

    public function testGetServiceNumber(): void
    {
        $this->assertEquals($this->dto->serviceNumber, $this->model->getServiceNumber());
    }

    public function testSetServiceNumber(): void
    {
        $expected = "firm";
        $model = $this->model;
        $model->setServiceNumber($expected);

        $this->assertEquals($expected, $model->getServiceNumber());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "may";
        $model = $this->model;
        $model->setContext($expected);

        $this->assertEquals($expected, $model->getContext());
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