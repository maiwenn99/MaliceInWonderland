<?php
/**
 * Created by PhpStorm.
 * User: Vincent Ostyn
 * Date: 18/04/19
 * Time: 16:14
 * PHP version 7
 */

namespace App\Model;

use GuzzleHttp;

class ItemManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'item';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function eggs()
    {
        $client = new GuzzleHttp\Client(['base_uri' => 'http://easteregg.wildcodeschool.fr',]);

        $response = $client->request('GET', '/api/eggs');


        $body = $response->getBody();


        $eggs = $body->getContents();
        $eggs = GuzzleHttp\json_decode($eggs, true);
        return $eggs;
    }
}
