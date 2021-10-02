<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingEventStates;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\MotorRacingEventStates\{ MotorRacingEventStatesDto, IMotorRacingEventStatesRepository, MotorRacingEventStatesRepository };

class MotorRacingEventStatesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private MotorRacingEventStatesDto $dto;
    private IMotorRacingEventStatesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6907,
            "event_id" => 2649,
            "current_state" => 1486,
            "sequence_number" => 6113,
            "lap" => "executive",
            "laps_remaining" => "something",
            "time_elapsed" => "serve",
            "flag_state" => "own",
            "context" => "chance",
        ];
        $this->dto = new MotorRacingEventStatesDto($this->input);
        $this->repository = new MotorRacingEventStatesRepository($this->db);
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
        $expected = 1556;

        $sql = "INSERT INTO `motor_racing_event_states` (`event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

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
                $this->dto->lap,
                $this->dto->lapsRemaining,
                $this->dto->timeElapsed,
                $this->dto->flagState,
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
        $expected = 9884;

        $sql = "UPDATE `motor_racing_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `lap` = ?, `laps_remaining` = ?, `time_elapsed` = ?, `flag_state` = ?, `context` = ?
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
                $this->dto->lap,
                $this->dto->lapsRemaining,
                $this->dto->timeElapsed,
                $this->dto->flagState,
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
        $id = 1737;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 3800;

        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`
                FROM `motor_racing_event_states` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`
                FROM `motor_racing_event_states`";

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
        $id = 9035;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4754;
        $expected = 8005;

        $sql = "DELETE FROM `motor_racing_event_states` WHERE `id` = ?";

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