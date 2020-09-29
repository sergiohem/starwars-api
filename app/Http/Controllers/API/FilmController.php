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

    public function prettyPrint($json, $html = false)
    {
        $tabcount = 0;
		$result = '';
		$inquote = false;
		$ignorenext = false;

		if ($html) {
		    $tab = "&nbsp;&nbsp;&nbsp;";
		    $newline = "<br/>";
		} else {
		    $tab = "\t";
		    $newline = "\n";
		}

		for($i = 0; $i < strlen($json); $i++) {
		    $char = $json[$i];

		    if ($ignorenext) {
		        $result .= $char;
		        $ignorenext = false;
		    } else {
		        switch($char) {
		            case '{':
		                $tabcount++;
		                $result .= $char . $newline . str_repeat($tab, $tabcount);
		                break;
		            case '}':
		                $tabcount--;
		                $result = trim($result) . $newline . str_repeat($tab, $tabcount) . $char;
		                break;
		            case ',':
		                $result .= $char . $newline . str_repeat($tab, $tabcount);
		                break;
		            case '"':
		                $inquote = !$inquote;
		                $result .= $char;
		                break;
		            case '\\':
		                if ($inquote) $ignorenext = true;
		                $result .= $char;
		                break;
		            default:
		                $result .= $char;
		        }
		    }
		}

		return $result;
    }
}
