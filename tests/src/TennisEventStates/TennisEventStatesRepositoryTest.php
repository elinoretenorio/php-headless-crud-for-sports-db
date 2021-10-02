<?php

declare(strict_types=1);

namespace Sports\Tests\TennisEventStates;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\TennisEventStates\{ TennisEventStatesDto, ITennisEventStatesRepository, TennisEventStatesRepository };

class TennisEventStatesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private TennisEventStatesDto $dto;
    private ITennisEventStatesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 4903,
            "event_id" => 4393,
            "current_state" => 749,
            "sequence_number" => 8693,
            "tennis_set" => "quality",
            "game" => "class",
            "server_person_id" => 2228,
            "server_score" => "somebody",
            "receiver_person_id" => 359,
            "receiver_score" => "base",
            "service_number" => "decade",
            "context" => "short",
        ];
        $this->dto = new TennisEventStatesDto($this->input);
        $this->repository = new TennisEventStatesRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 1629;

        $sql = "INSERT INTO `tennis_event_states` (`event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->eventId,
                $this->dto->currentState,
                $this->dto->sequenceNumber,
                $this->dto->tennisSet,
                $this->dto->game,
                $this->dto->serverPersonId,
                $this->dto->serverScore,
                $this->dto->receiverPersonId,
                $this->dto->receiverScore,
                $this->dto->serviceNumber,
                $this->dto->context
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 1707;

        $sql = "UPDATE `tennis_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `tennis_set` = ?, `game` = ?, `server_person_id` = ?, `server_score` = ?, `receiver_person_id` = ?, `receiver_score` = ?, `service_number` = ?, `context` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->eventId,
                $this->dto->currentState,
                $this->dto->sequenceNumber,
                $this->dto->tennisSet,
                $this->dto->game,
                $this->dto->serverPersonId,
                $this->dto->serverScore,
                $this->dto->receiverPersonId,
                $this->dto->receiverScore,
                $this->dto->serviceNumber,
                $this->dto->context,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 2588;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 3180;

        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`
                FROM `tennis_event_states` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`
                FROM `tennis_event_states`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 6245;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 3750;
        $expected = 4567;

        $sql = "DELETE FROM `tennis_event_states` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}