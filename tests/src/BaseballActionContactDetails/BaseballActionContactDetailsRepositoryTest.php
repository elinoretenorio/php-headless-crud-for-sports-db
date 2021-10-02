<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionContactDetails;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballActionContactDetails\{ BaseballActionContactDetailsDto, IBaseballActionContactDetailsRepository, BaseballActionContactDetailsRepository };

class BaseballActionContactDetailsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballActionContactDetailsDto $dto;
    private IBaseballActionContactDetailsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 342,
            "baseball_action_pitch_id" => 7893,
            "location" => "surface",
            "strength" => "really",
            "velocity" => 5775,
            "comment" => "Decision two usually hour. Modern all exist we protect kid early fine.",
            "trajectory_coordinates" => "training",
            "trajectory_formula" => "across",
        ];
        $this->dto = new BaseballActionContactDetailsDto($this->input);
        $this->repository = new BaseballActionContactDetailsRepository($this->db);
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
        $expected = 2585;

        $sql = "INSERT INTO `baseball_action_contact_details` (`baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballActionPitchId,
                $this->dto->location,
                $this->dto->strength,
                $this->dto->velocity,
                $this->dto->comment,
                $this->dto->trajectoryCoordinates,
                $this->dto->trajectoryFormula
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
        $expected = 6191;

        $sql = "UPDATE `baseball_action_contact_details` SET `baseball_action_pitch_id` = ?, `location` = ?, `strength` = ?, `velocity` = ?, `comment` = ?, `trajectory_coordinates` = ?, `trajectory_formula` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballActionPitchId,
                $this->dto->location,
                $this->dto->strength,
                $this->dto->velocity,
                $this->dto->comment,
                $this->dto->trajectoryCoordinates,
                $this->dto->trajectoryFormula,
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
        $id = 4031;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 6067;

        $sql = "SELECT `id`, `baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`
                FROM `baseball_action_contact_details` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`
                FROM `baseball_action_contact_details`";

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
        $id = 6952;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 3761;
        $expected = 9220;

        $sql = "DELETE FROM `baseball_action_contact_details` WHERE `id` = ?";

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