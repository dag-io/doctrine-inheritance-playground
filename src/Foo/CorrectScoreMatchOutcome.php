<?php
namespace Foo;

class CorrectScoreMatchOutcome extends MatchOutcome
{
    /**
     * @var Team
     */
    private $homeTeam;

    /**
     * @var Team
     */
    private $awayTeam;

    private $homeTeamResult;

    private $awayTeamResult;

    /**
     * @return Team
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param Team $homeTeam
     *
     * @return $this
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * @return Team
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param Team $awayTeam
     *
     * @return $this
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHomeTeamResult()
    {
        return $this->homeTeamResult;
    }

    /**
     * @param mixed $homeTeamResult
     *
     * @return $this
     */
    public function setHomeTeamResult($homeTeamResult)
    {
        $this->homeTeamResult = $homeTeamResult;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAwayTeamResult()
    {
        return $this->awayTeamResult;
    }

    /**
     * @param mixed $awayTeamResult
     *
     * @return $this
     */
    public function setAwayTeamResult($awayTeamResult)
    {
        $this->awayTeamResult = $awayTeamResult;

        return $this;
    }
}
