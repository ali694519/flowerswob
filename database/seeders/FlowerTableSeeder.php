<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\flower;
class FlowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        flower::create(
            // [
            //     'name'=>'Lotus',
            //     'price'=>'$12.99',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-10%',
            //     'description'=>'The lotus flower is an aquatic perennial. Sometimes mistaken for the water-lily, the lotus has a distinctively different structure. It also only comes in pink hues or white, whereas the lily comes in many different colors. The roots are implanted in the soil of a river or pond, and the leaves float on the surface.',
            //     'image'=>'images/img-1.jpg'
            // ],
            // [
            //     'name'=>'Zinnnia',
            //     'price'=>'$11.25',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-15%',
            //     'description'=>' Zinnias have stiff, hairy stems and oval or lance-shaped leaves arranged opposite each other and often clasping the stem. The numerous garden varieties grown for their showy flowers are derived from the species Zinnia violacea.',
            //     'image'=>'images/img-2.jpg'
            // ],
            // [
            //     'name'=>'Rose',
            //     'price'=>'$10',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-5%',
            //     'description'=>'Roses are erect, climbing, or trailing shrubs, the stems of which are usually copiously armed with prickles of various shapes and sizes, commonly called thorns. ',

            //     'image'=>'images/img-3.jpg'
            // ],
            // [
            //     'name'=>'Aster',
            //     'price'=>'$9.99',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-20%',
            //     'description'=>'Aster in Greek means “star”. They are in the daisy family and are notable for their starburst arrangement of bright petals, which most often surround a yellow center. The flowers are small but numerous, giving the plants the look of being “nothing but color” when in full bloom.',
            //     'image'=>'images/img-4.jpg'
            // ],
            // [
            //     'name'=>'Tuberose',
            //     'price'=>'$7.99',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-17%',
            //     'description'=>'The tuberose has long bright green leaves clustered at the base and smaller clasping leaves along the stem. The fragrant waxy white flowers are borne in a cluster at the tip of the stem and bloom at night. The roots are fleshy and tuberous.',

            //     'image'=>'images/img-5.jpg'
            // ],
            // [
            //     'name'=>'Lily',
            //     'price'=>'$8.99',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-3%',
            //     'description'=>'Lilies typically feature 6-tepaled flowers in a variety of shapes (trumpet, funnel, cup, bell, bowl or flat), sometimes nodding, sometimes with reflexed petals, atop stiff, unbranched stems (1-8 tall) clothed with linear to elliptic leaves. Flowers are often fragrant and come in a broad range of colors except blue.',

            //     'image'=>'images/img-6.jpg'
            // ],
            // [
            //     'name'=>'Canna',
            //     'price'=>'$12.99',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-18%',
            //     'description'=>'Canna indica is a long-lived (perennial) herbaceous plant, 90-180 cm tall. The upright (erect) stems (1-2 m tall) are sturdy, hairless (glabrous) and green in colour. The alternatively arranged leaves consist of a stem-clasping sheath at the base and very large, spreading, leaf blade (20-60 cm long and 10-30 cm wide).',

            //     'image'=>'images/img-7.jpg'
            // ],
            // [
            //     'name'=>'Daisy',
            //     'price'=>'$11',
            //     'old_price'=>'$15.99',
            //     'rival'=>'-10%',
            //     'description'=>'Each flower has a rosette of small, thin white petals surrounding a bright yellow centre. These are supported by a single stem which grows from a group of dark green rounded leaves. The petals can sometimes be tinged with pink. It is a common wild flower found growing in our garden lawns.',

            //     'image'=>'images/img-8.jpg'
            // ],
        //     [
        //         'name'=>'Poppy',
        //         'price'=>'$10.99',
        //         'old_price'=>'$15.99',
        //         'rival'=>'-5%',
        //         'description'=>'Physical description
        //         Poppies have lobed or dissected leaves and milky sap. The buds are often nodding and are borne on solitary stalks. The flowers have four to six petals with numerous stamens surrounding the ovary. The two sepals usually drop off as the petals unfold.',

        //         'image'=>'images/img-9.jpg'
        // ]
    );

    }
}
