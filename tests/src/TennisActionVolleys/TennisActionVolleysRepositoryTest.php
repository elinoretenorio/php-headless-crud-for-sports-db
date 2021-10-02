<?php

declare(strict_types=1);

namespace Sports\Tests\TennisActionVolleys;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\TennisActionVolleys\{ TennisActionVolleysDto, ITennisActionVolleysRepository, TennisActionVolleysRepository };

class TennisActionVolleysRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private TennisActionVolleysDto $dto;
    private ITennisActionVolleysRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7855,
            "sequence_number" => "get",
            "tennis_action_points_id" => 886,
            "landing_location" => "price",
            "swing_type" => "red",
            "result" => "themselves",
            "spin_type" => "money",
            "trajectory_details" => "industry",
        ];
        $this->dto = new TennisActionVolleysDto($this->input);
        $this->repository = new TennisActionVolleysRepository($this->db);
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
        $expected = 6862;

        $sql = "INSERT INTO `tennis_action_volleys` (`sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->sequenceNumber,
                $this->dto->tennisActionPointsId,
                $this->dto->landingLocation,
                $this->dto->swingType,
                $this->dto->result,
                $this->dto->spinType,
                $this->dto->trajectoryDetails
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
        $expected = 2818;

        $sql = "UPDATE `tennis_action_volleys` SET `sequence_number` = ?, `tennis_action_points_id` = ?, `landing_location` = ?, `swing_type` = ?, `result` = ?, `spin_type` = ?, `trajectory_details` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->sequenceNumber,
                $this->dto->tennisActionPointsId,
                $this->dto->landingLocation,
                $this->dto->swingType,
                $this->dto->result,
                $this->dto->spinType,
                $this->dto->trajectoryDetails,
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
        $id = 9603;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5100;

        $sql = "SELECT `id`, `sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`
                FROM `tennis_action_volleys` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`
                FROM `tennis_action_volleys`";

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
        $id = 7665;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 5468;
        $expected = 8045;

        $sql = "DELETE FROM `tennis_action_volleys` WHERE `id` = ?";

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