<?php
namespace Foo;

class OverUnderMatchOutcome extends MatchOutcome
{
    private $goalsTotal;

    /**
     * @return mixed
     */
    public function getGoalsTotal()
    {
        return $this->goalsTotal;
    }

    /**
     * @param mixed $goalsTotal
     *
     * @return $this
     */
    public function setGoalsTotal($goalsTotal)
    {
        $this->goalsTotal = $goalsTotal;

        return $this;
    }
}
