<?php

class updateModel extends model {
    public function insertSport($argv) {
        return $this->update(
            "INSERT INTO sport.sport (remote_id, name, alias, remote_order) VALUES (:remote_id, :name, :alias, :remote_order)",
            [
                'remote_id' => $argv['remoteId'],
                'name' => $argv['name'],
                'alias' => $argv['alias'],
                'remote_order' => $argv['remoteOrder'],
            ]
        );
    }

    public function insertCompetition($argv) {
        return $this->update(
            "INSERT INTO sport.competition (remote_id, name, remote_order, remote_region_id) VALUES (:remote_id, :name, :remote_order, :remote_region_id)",
            [
                'remote_id' => $argv['remoteId'],
                'name' => $argv['name'],
                'remote_order' => $argv['remoteOrder'],
                'remote_region_id' => $argv['remoteRegionId'],

            ]
        );
    }

    public function insertRegion($argv) {
        return $this->update(
            "INSERT INTO sport.region (remote_id, name, remote_order, remote_sport_id) VALUES (:remote_id, :name, :remote_order, :remote_sport_id)",
            [
                'remote_id' => $argv['remoteId'],
                'name' => $argv['name'],
                'remote_order' => $argv['remoteOrder'],
                'remote_sport_id' => $argv['remoteSportId'],
            ]
        );
    }
}