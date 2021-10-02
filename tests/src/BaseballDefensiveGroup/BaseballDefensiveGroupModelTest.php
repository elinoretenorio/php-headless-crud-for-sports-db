<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballDefensiveGroup;

use PHPUnit\Framework\TestCase;
use Sports\BaseballDefensiveGroup\{ BaseballDefensiveGroupDto, BaseballDefensiveGroupModel };

class BaseballDefensiveGroupModelTest extends TestCase
{
    private array $input;
    private BaseballDefensiveGroupDto $dto;
    private BaseballDefensiveGroupModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1939,
            "description" => "Account president nation authority piece dinner how. Rise mouth time. Protect fish final leader onto. Who somebody politics.",
        ];
        $this->dto = new BaseballDefensiveGroupDto($this->input);
        $this->model = new BaseballDefensiveGroupModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballDefensiveGroupModel(null);

        $this->assertInstanceOf(BaseballDefensiveGroupModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 3572;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetDescription(): void
    {
        $this->assertEquals($this->dto->description, $this->model->getDescription());
    }

    public function testSetDescription(): void
    {
        $expected = "Same direction full painting throughout. Quite star nation material instead piece structure interesting.";
        $model = $this->model;
        $model->setDescription($expected);

        $this->assertEquals($expected, $model->getDescription());
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