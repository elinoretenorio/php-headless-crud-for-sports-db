<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingQualifyingStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\MotorRacingQualifyingStats\{ MotorRacingQualifyingStatsDto, IMotorRacingQualifyingStatsRepository, MotorRacingQualifyingStatsRepository };

class MotorRacingQualifyingStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private MotorRacingQualifyingStatsDto $dto;
    private IMotorRacingQualifyingStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6952,
            "grid" => "run",
            "pole_position" => "your",
            "pole_wins" => "quickly",
            "qualifying_speed" => "morning",
            "qualifying_speed_units" => "story",
            "qualifying_time" => "happen",
            "qualifying_position" => "federal",
        ];
        $this->dto = new MotorRacingQualifyingStatsDto($this->input);
        $this->repository = new MotorRacingQualifyingStatsRepository($this->db);
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
        $expected = 115;

        $sql = "INSERT INTO `motor_racing_qualifying_stats` (`grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->grid,
                $this->dto->polePosition,
                $this->dto->poleWins,
                $this->dto->qualifyingSpeed,
                $this->dto->qualifyingSpeedUnits,
                $this->dto->qualifyingTime,
                $this->dto->qualifyingPosition
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
        $expected = 3025;

        $sql = "UPDATE `motor_racing_qualifying_stats` SET `grid` = ?, `pole_position` = ?, `pole_wins` = ?, `qualifying_speed` = ?, `qualifying_speed_units` = ?, `qualifying_time` = ?, `qualifying_position` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->grid,
                $this->dto->polePosition,
                $this->dto->poleWins,
                $this->dto->qualifyingSpeed,
                $this->dto->qualifyingSpeedUnits,
                $this->dto->qualifyingTime,
                $this->dto->qualifyingPosition,
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
        $id = 4971;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 1415;

        $sql = "SELECT `id`, `grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`
                FROM `motor_racing_qualifying_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`
                FROM `motor_racing_qualifying_stats`";

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
        $id = 5959;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 8228;
        $expected = 486;

        $sql = "DELETE FROM `motor_racing_qualifying_stats` WHERE `id` = ?";

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