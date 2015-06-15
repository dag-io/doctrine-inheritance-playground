<?php
namespace Foo;

class ThreeWayMatchOutcome extends MatchOutcome
{
    private $winner;

    /**
     * @return Team|null
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param Team|null $winner
     *
     * @return $this
     */
    public function setWinner(Team $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }
}
