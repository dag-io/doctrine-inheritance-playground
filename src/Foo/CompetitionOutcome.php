<?php
namespace Foo;

class CompetitionOutcome extends Outcome
{
    protected $competition;

    /**
     * @return mixed
     */
    public function getCompetition()
    {
        return $this->competition;
    }

    /**
     * @param mixed $competition
     *
     * @return $this
     */
    public function setCompetition($competition)
    {
        $this->competition = $competition;

        return $this;
    }
}
