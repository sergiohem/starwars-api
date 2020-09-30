<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\ApiSwapiService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FilmController extends Controller
{
    public function __construct() {
        $this->apiSwapi = new ApiSwapiService;
    }

    public function films() {
        $response = $this->apiSwapi->get();
		$result = [];

        if ($response->successful()) {

			$films = $response->json()['results'];

            if (isset($_GET['order'])) {
                $orderedEpisodes = Order::where('order', $_GET['order'])->orderBy('position')->pluck('episode_id');

                foreach ($orderedEpisodes as $episode) {
                    foreach ($films as $film) {
                        if ($film['episode_id'] == $episode) {
                            array_push($result, $film);
                            break;
                        }
                    }
                }
            } else {
                foreach ($films as $film) {
                    array_push($result, $film);
                }
            }

        } else {
            return 'Error getting Swapi API movies!';
        }

        return json_encode($result);
    }
}
