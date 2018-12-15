<?php

class objectModel extends model {
    public function getRegions($argv = []) {
        return $this->select('SELECT * FROM sport.region ORDER By name asc', []);
    }

    public function getRegionsBySportId($argv = []) {
        return $this->select('SELECT * FROM sport.region WHERE remote_sport_id = :remote_sport_id ORDER By name asc', $argv);
    }

    public function getSports($argv = []) {
        return $this->select('SELECT * FROM sport.sport ORDER By id asc', []);
    }

    public function getCompetitions($argv = []) {
        return $this->select('SELECT * FROM sport.competition ORDER By name asc', []);
    }

    public function getCompetitionsByRegionId($argv = []) {
        return $this->select('SELECT * FROM sport.competition WHERE remote_region_id = :remote_region_id ORDER By name asc', $argv);
    }
}