<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Order::count() > 0) {
            echo "Orders have already been created!";
        } else {
            $orders = [
                'lucas',
                'release',
                'rinster',
                'machete',
                'magnotta',
                'lee',
            ];

            foreach ($orders as $order) {
                switch ($order) {
                    case 'lucas':
                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 1;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 5;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lucas';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 6;
                        $newOrder->save();
                    break;
                    case 'release':
                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 1;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 5;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'release';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 6;
                        $newOrder->save();
                    break;
                    case 'rinster':
                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 1;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 5;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'rinster';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 6;
                        $newOrder->save();
                    break;
                    case 'machete':
                        $newOrder = new Order;
                        $newOrder->order = 'machete';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'machete';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'machete';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'machete';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'machete';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 5;
                        $newOrder->save();

                    break;
                    case 'magnotta':
                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 1;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 5;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'magnotta';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 6;
                        $newOrder->save();
                    break;
                    case 'lee':
                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 4;
                        $newOrder->position = 1;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 5;
                        $newOrder->position = 2;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 6;
                        $newOrder->position = 3;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 1;
                        $newOrder->position = 4;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 2;
                        $newOrder->position = 5;
                        $newOrder->save();

                        $newOrder = new Order;
                        $newOrder->order = 'lee';
                        $newOrder->episode_id = 3;
                        $newOrder->position = 6;
                        $newOrder->save();
                    break;

                    default:
                        break;
                }

            }
        }
    }
}
