<?php
class Car
{
    /**
     * @var string
     */

    private $model;
    /**
     * @var int
     */
    private $speed;
    /**
     * @var int
     */
    private $engine;
    /**
     * @var int
     */
    private $maxspeed;
    /**
     * @var bool
     */
    private $enginestatus;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getEngine(): int
    {
        return $this->engine;
    }

    /**
     * @param int $engine
     */
    public function setEngine(int $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return int
     */
    public function getMaxspeed(): int
    {
        return $this->maxspeed;
    }

    /**
     * @param int $maxspeed
     */
    public function setMaxspeed(int $maxspeed)
    {
        $this->maxspeed = $maxspeed;
    }

    /**
     * @return bool
     */
    public function isEnginestatus(): bool
    {
        return $this->enginestatus;
    }

    /**
     * @param bool $enginestatus
     */
    public function setEnginestatus(bool $enginestatus)
    {
        $this->enginestatus = $enginestatus;
    }

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $maxspeed
     */
function __construct($model, $engine, $maxspeed)
{
    $this->model=$model;
    $this->engine=$engine;
    $this->maxspeed=$maxspeed;
}

    public function on()
    {
        $this->setEnginestatus(false);
        return $this->isEnginestatus();
    }
    public function off()
    {
        $this->setEnginestatus(true);
        return $this->isEnginestatus();
    }
    public function speed_up()
    {
        $this->speed+5;
        return $this->getSpeed();
    }
}
$car=new Car();
echo "Модель:"; $car->getModel($model);