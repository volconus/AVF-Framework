<?php

class update
{
    public $client;
    public $floodProtection;

    public function __construct()
    {
        $this->floodProtection = 3;
        require(dirname(dirname(__FILE__)) . '../../../external/vendor/autoload.php');
        $this->client = new \WebSocket\Client("wss://swarm-spring.betcoswarm.com");
        $this->login();
    }

    public function login()
    {
        $cmd = json_encode([
            'command' => 'request_session',
            'rid' => 'requestSession',
            'params' => [
                'site_id' => 123,
                'language' => 'tur'
            ]
        ]);

        $this->client->send($cmd);
        $this->client->receive();
    }

    public function request($cmd = [])
    {
        $cmd = json_encode($cmd);
        $cmd = str_replace('"where":[]', '"where":{}', $cmd);
        echo $cmd . PHP_EOL;
        $this->client->send($cmd);
        return json_decode($this->client->receive());
    }

    public function update()
    {
        $this->updateSports();
        $this->updateRegions();
        $this->updateCompetitions();
    }

    public function updateRegions()
    {
        $uModel = new updateModel();
        $oModel = new objectModel();

        # get sports from db
        foreach ($oModel->getSports([]) as $sport) {
            $cmd = [
                'command' => 'get',
                'rid' => 'getRegions',
                'params' => [
                    'source' => 'betting',
                    'what' => ['region' => []],
                    'where' => ['sport' =>
                        ['id' => (int)$sport->remote_id]
                    ],
                    'subscribe' => 'false'
                ]
            ];
            $regions = $this->request($cmd)->data->data->region;
            foreach ($regions as $region) {
                $uModel->insertRegion([
                    'remoteId' => $region->id,
                    'name' => $region->name,
                    'remoteOrder' => $region->order,
                    'remoteSportId' => $sport->remote_id,
                ]);
                print_r($region);
            }
            sleep($this->floodProtection);
        }
    }

    public function updateCompetition($get)
    {
        $uModel = new updateModel();
        $cmd = [
            'command' => 'get',
            'rid' => 'getCompetitions',
            'params' => [
                'source' => 'betting',
                'what' => ['competition' => []],
                'where' => ['region' =>
                    ['id' => (int)$get->argv1]
                ],
                'subscribe' => 'false'
            ]
        ];
        $competitions = $this->request($cmd)->data->data->competition;
        foreach ($competitions as $competition) {
            $uModel->insertCompetition([
                'remoteId' => $competition->id,
                'name' => $competition->name,
                'remoteOrder' => $competition->order,
                'remoteRegionId' => $get->argv1,
            ]);
            print_r($competition);
        }
        sleep($this->floodProtection);
    }

    public function updateCompetitions()
    {
        $uModel = new updateModel();
        $oModel = new objectModel();

        # get regions from db
        foreach ($oModel->getRegions([]) as $region) {
            $cmd = [
                'command' => 'get',
                'rid' => 'getCompetitions',
                'params' => [
                    'source' => 'betting',
                    'what' => ['competition' => []],
                    'where' => ['region' =>
                        ['id' => (int)$region->remote_id]
                    ],
                    'subscribe' => 'false'
                ]
            ];
            $competitions = $this->request($cmd)->data->data->competition;
            foreach ($competitions as $competition) {
                $uModel->insertCompetition([
                    'remoteId' => $competition->id,
                    'name' => $competition->name,
                    'remoteOrder' => $competition->order,
                    'remoteRegionId' => $region->remote_id,
                ]);
                print_r($competition);
            }
            sleep($this->floodProtection);
        }
    }

    public function updateSports()
    {
        $uModel = new updateModel();
        $cmd = [
            'command' => 'get',
            'rid' => 'getSports',
            'params' => [
                'source' => 'betting',
                'what' => ['sport' => []],
                'where' => [],
                'subscribe' => 'false'
            ]
        ];
        $sports = $this->request($cmd)->data->data->sport;
        foreach ($sports as $sport) {
            $uModel->insertSport([
                'remoteId' => $sport->id,
                'name' => $sport->name,
                'alias' => $sport->alias,
                'remoteOrder' => $sport->order,
            ]);
            print_r($sport);
        }
    }

    public function __destruct()
    {
        $this->client->close();
    }
}