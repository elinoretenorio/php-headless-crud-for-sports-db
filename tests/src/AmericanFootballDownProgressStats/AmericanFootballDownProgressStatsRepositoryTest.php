<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDownProgressStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballDownProgressStats\{ AmericanFootballDownProgressStatsDto, IAmericanFootballDownProgressStatsRepository, AmericanFootballDownProgressStatsRepository };

class AmericanFootballDownProgressStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballDownProgressStatsDto $dto;
    private IAmericanFootballDownProgressStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 5947,
            "first_downs_total" => "power",
            "first_downs_pass" => "professional",
            "first_downs_run" => "free",
            "first_downs_penalty" => "exist",
            "conversions_third_down" => "including",
            "conversions_third_down_attempts" => "particular",
            "conversions_third_down_percentage" => "soldier",
            "conversions_fourth_down" => "two",
            "conversions_fourth_down_attempts" => "condition",
            "conversions_fourth_down_percentage" => "whether",
        ];
        $this->dto = new AmericanFootballDownProgressStatsDto($this->input);
        $this->repository = new AmericanFootballDownProgressStatsRepository($this->db);
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
        $expected = 5782;

        $sql = "INSERT INTO `american_football_down_progress_stats` (`first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->firstDownsTotal,
                $this->dto->firstDownsPass,
                $this->dto->firstDownsRun,
                $this->dto->firstDownsPenalty,
                $this->dto->conversionsThirdDown,
                $this->dto->conversionsThirdDownAttempts,
                $this->dto->conversionsThirdDownPercentage,
                $this->dto->conversionsFourthDown,
                $this->dto->conversionsFourthDownAttempts,
                $this->dto->conversionsFourthDownPercentage
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
        $expected = 5130;

        $sql = "UPDATE `american_football_down_progress_stats` SET `first_downs_total` = ?, `first_downs_pass` = ?, `first_downs_run` = ?, `first_downs_penalty` = ?, `conversions_third_down` = ?, `conversions_third_down_attempts` = ?, `conversions_third_down_percentage` = ?, `conversions_fourth_down` = ?, `conversions_fourth_down_attempts` = ?, `conversions_fourth_down_percentage` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->firstDownsTotal,
                $this->dto->firstDownsPass,
                $this->dto->firstDownsRun,
                $this->dto->firstDownsPenalty,
                $this->dto->conversionsThirdDown,
                $this->dto->conversionsThirdDownAttempts,
                $this->dto->conversionsThirdDownPercentage,
                $this->dto->conversionsFourthDown,
                $this->dto->conversionsFourthDownAttempts,
                $this->dto->conversionsFourthDownPercentage,
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
        $id = 2063;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 2504;

        $sql = "SELECT `id`, `first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`
                FROM `american_football_down_progress_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`
                FROM `american_football_down_progress_stats`";

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
        $id = 1828;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 955;
        $expected = 4591;

        $sql = "DELETE FROM `american_football_down_progress_stats` WHERE `id` = ?";

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