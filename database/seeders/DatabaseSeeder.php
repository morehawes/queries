<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Shop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Shop::create([
            'request' => 'https://overpass-api.de/api/interpreter?data=%5Bout%3Ajson%5D%5Bbbox%3A49.661903%2C-125.038061%2C49.714598%2C-124.936094%5D%3B%0A%28%0Anwr%5B%22shop%22%3D%22convenience%22%5D%3B%0Anwr%5B%22shop%22%3D%22supermarket%22%5D%3B%0Anwr%5B%22shop%22%3D%22clothes%22%5D%3B%0Anwr%5B%22shop%22%3D%22hairdresser%22%5D%3B%0Anwr%5B%22shop%22%3D%22car_repair%22%5D%3B%0Anwr%5B%22shop%22%3D%22bakery%22%5D%3B%0Anwr%5B%22shop%22%3D%22car%22%5D%3B%0Anwr%5B%22shop%22%3D%22beauty%22%5D%3B%0Anwr%5B%22shop%22%3D%22mobile_phone%22%5D%3B%0Anwr%5B%22shop%22%3D%22butcher%22%5D%3B%0Anwr%5B%22shop%22%3D%22furniture%22%5D%3B%0Anwr%5B%22shop%22%3D%22car_parts%22%5D%3B%0Anwr%5B%22shop%22%3D%22alcohol%22%5D%3B%0Anwr%5B%22shop%22%3D%22florist%22%5D%3B%0Anwr%5B%22shop%22%3D%22electronics%22%5D%3B%0Anwr%5B%22shop%22%3D%22shoes%22%5D%3B%0Anwr%5B%22shop%22%3D%22variety_store%22%5D%3B%0Anwr%5B%22shop%22%3D%22optician%22%5D%3B%0Anwr%5B%22shop%22%3D%22jewelry%22%5D%3B%0Anwr%5B%22shop%22%3D%22gift%22%5D%3B%0Anwr%5B%22shop%22%3D%22greengrocer%22%5D%3B%0Anwr%5B%22shop%22%3D%22bicycle%22%5D%3B%0Anwr%5B%22shop%22%3D%22department_store%22%5D%3B%0Anwr%5B%22shop%22%3D%22chemist%22%5D%3B%0Anwr%5B%22shop%22%3D%22laundry%22%5D%3B%0Anwr%5B%22shop%22%3D%22travel_agency%22%5D%3B%0Anwr%5B%22shop%22%3D%22sports%22%5D%3B%0Anwr%5B%22shop%22%3D%22pet%22%5D%3B%0Anwr%5B%22shop%22%3D%22stationery%22%5D%3B%0Anwr%5B%22shop%22%3D%22confectionery%22%5D%3B%0Anwr%5B%22shop%22%3D%22tyres%22%5D%3B%0Anwr%5B%22shop%22%3D%22computer%22%5D%3B%0Anwr%5B%22shop%22%3D%22newsagent%22%5D%3B%0Anwr%5B%22shop%22%3D%22motorcycle%22%5D%3B%0Anwr%5B%22shop%22%3D%22beverages%22%5D%3B%0Anwr%5B%22shop%22%3D%22copyshop%22%5D%3B%0Anwr%5B%22shop%22%3D%22tobacco%22%5D%3B%0Anwr%5B%22shop%22%3D%22garden_centre%22%5D%3B%0Anwr%5B%22shop%22%3D%22trade%22%5D%3B%0Anwr%5B%22shop%22%3D%22massage%22%5D%3B%0Anwr%5B%22shop%22%3D%22toys%22%5D%3B%0Anwr%5B%22shop%22%3D%22deli%22%5D%3B%0Anwr%5B%22shop%22%3D%22interior_decoration%22%5D%3B%0Anwr%5B%22shop%22%3D%22ticket%22%5D%3B%0Anwr%5B%22shop%22%3D%22seafood%22%5D%3B%0Anwr%5B%22shop%22%3D%22houseware%22%5D%3B%0Anwr%5B%22shop%22%3D%22photo%22%5D%3B%0Anwr%5B%22shop%22%3D%22paint%22%5D%3B%0Anwr%5B%22shop%22%3D%22bookmaker%22%5D%3B%0Anwr%5B%22shop%22%3D%22charity%22%5D%3B%0Anwr%5B%22shop%22%3D%22outdoor%22%5D%3B%0Anwr%5B%22shop%22%3D%22art%22%5D%3B%0Anwr%5B%22shop%22%3D%22second_hand%22%5D%3B%0Anwr%5B%22shop%22%3D%22medical_supply%22%5D%3B%0Anwr%5B%22shop%22%3D%22bed%22%5D%3B%0Anwr%5B%22shop%22%3D%22fabric%22%5D%3B%0Anwr%5B%22shop%22%3D%22coffee%22%5D%3B%0Anwr%5B%22shop%22%3D%22perfumery%22%5D%3B%0Anwr%5B%22shop%22%3D%22tea%22%5D%3B%0Anwr%5B%22shop%22%3D%22musical_instrument%22%5D%3B%0Anwr%5B%22shop%22%3D%22bag%22%5D%3B%0Anwr%5B%22shop%22%3D%22music%22%5D%3B%0Anwr%5B%22shop%22%3D%22dairy%22%5D%3B%0Anwr%5B%22shop%22%3D%22carpet%22%5D%3B%0Anwr%5B%22shop%22%3D%22video_games%22%5D%3B%0Anwr%5B%22shop%22%3D%22hifi%22%5D%3B%0Anwr%5B%22shop%22%3D%22fishing%22%5D%3B%0Anwr%5B%22shop%22%3D%22video%22%5D%3B%0Anwr%5B%22shop%22%3D%22ice_cream%22%5D%3B%0Anwr%5B%22shop%22%3D%22fuel%22%5D%3B%0Anwr%5B%22shop%22%3D%22marketplace%22%5D%3B%0Anwr%5B%22shop%22%3D%22golf%22%5D%3B%0Anwr%5B%22shop%22%3D%22office%22%5D%3B%0Anwr%5B%22shop%22%3D%22fast_food%22%5D%3B%0Anwr%5B%22shop%22%3D%22stone%22%5D%3B%0Anwr%5B%22shop%22%3D%22restaurant%22%5D%3B%0Anwr%5B%22shop%22%3D%22cafe%22%5D%3B%0Anwr%5B%22shop%22%3D%22bbq%22%5D%3B%0Anwr%5B%22shop%22%3D%22fitness%22%5D%3B%0Anwr%5B%22shop%22%3D%22pharmacy%22%5D%3B%0Anwr%5B%22shop%22%3D%22taxi%22%5D%3B%0Anwr%5B%22shop%22%3D%22bar%22%5D%3B%0Anwr%5B%22shop%22%3D%22recycling%22%5D%3B%0Anwr%5B%22shop%22%3D%22telephone%22%5D%3B%0Anwr%5B%22shop%22%3D%22camping%22%5D%3B%0A%29%3B%0Aout%20center%20meta%3B',
            'response' => '
              {
                "type": "FeatureCollection",
                "generator": "overpass-ide",
                "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL.",
                "timestamp": "2023-06-29T19:19:06Z",
                "features": [
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/119944854",
                      "addr:city": "Courtenay",
                      "addr:housenumber": "3199",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Walmart",
                      "brand:wikidata": "Q483551",
                      "brand:wikipedia": "en:Walmart",
                      "building": "retail",
                      "name": "Walmart Supercentre",
                      "shop": "supermarket",
                      "website": "https://www.walmart.ca/",
                      "@timestamp": "2020-03-05T09:57:45Z",
                      "@version": 11,
                      "@changeset": 81816419,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9814736,
                        49.6670066
                      ]
                    },
                    "id": "way/119944854"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/119944859",
                      "addr:housenumber": "3185",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Bosley\'s",
                      "phone": "+1-250-338-2890",
                      "shop": "pet",
                      "@timestamp": "2018-06-20T15:13:43Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9790327,
                        49.6678724
                      ]
                    },
                    "id": "way/119944859"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/119944860",
                      "brand": "Staples",
                      "brand:wikidata": "Q17149420",
                      "brand:wikipedia": "en:Staples Canada",
                      "building": "yes",
                      "name": "Staples",
                      "shop": "stationery",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9804869,
                        49.6663545
                      ]
                    },
                    "id": "way/119944860"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/119945223",
                      "addr:housenumber": "757",
                      "addr:street": "Ryan Road",
                      "brand": "Real Canadian Superstore",
                      "brand:wikidata": "Q7300856",
                      "brand:wikipedia": "en:Real Canadian Superstore",
                      "building": "yes",
                      "name": "Real Canadian Superstore",
                      "phone": "+1-250-334-6900",
                      "shop": "supermarket",
                      "@timestamp": "2019-11-11T00:38:14Z",
                      "@version": 5,
                      "@changeset": 76882825,
                      "@user": "Timothy Smith",
                      "@uid": 115918,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9862271,
                        49.697113
                      ]
                    },
                    "id": "way/119945223"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/119945364",
                      "addr:housenumber": "660",
                      "addr:street": "England Avenue",
                      "building": "yes",
                      "name": "The Old Farm Market",
                      "phone": "+1 250 871-7748",
                      "shop": "supermarket",
                      "website": "https://theoldfarmmarket.ca/the-old-farm-market-courtenay-location/",
                      "@timestamp": "2022-03-28T22:18:01Z",
                      "@version": 5,
                      "@changeset": 119042396,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9985598,
                        49.6896601
                      ]
                    },
                    "id": "way/119945364"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/121155932",
                      "addr:housenumber": "278",
                      "addr:street": "Old Island Highway",
                      "building": "yes",
                      "name": "Comox Valley Dodge Chrysler Jeep",
                      "phone": "+1-250-338-5451",
                      "shop": "car",
                      "@timestamp": "2023-03-17T02:13:24Z",
                      "@version": 5,
                      "@changeset": 133771147,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9885403,
                        49.6991365
                      ]
                    },
                    "id": "way/121155932"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/121158697",
                      "addr:housenumber": "1723",
                      "addr:postcode": "V9N 2K7",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Petro-Canada",
                      "brand:wikidata": "Q1208279",
                      "brand:wikipedia": "en:Petro-Canada",
                      "building": "retail",
                      "name": "Petro-Canada",
                      "phone": "+1-250-338-5500",
                      "shop": "convenience",
                      "source": "Bing",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9902558,
                        49.6834501
                      ]
                    },
                    "id": "way/121158697"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/121158701",
                      "addr:housenumber": "1551",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Thrifty Foods",
                      "phone": "+1-250-338-1383",
                      "shop": "supermarket",
                      "@timestamp": "2018-06-20T15:13:45Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9930215,
                        49.6849656
                      ]
                    },
                    "id": "way/121158701"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/156900159",
                      "addr:housenumber": "2275",
                      "addr:street": "Guthrie Road",
                      "building": "yes",
                      "name": "Quality Foods",
                      "phone": "+1-250-890-1005",
                      "shop": "supermarket",
                      "@timestamp": "2018-06-20T15:13:50Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9464624,
                        49.6884613
                      ]
                    },
                    "id": "way/156900159"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/173227205",
                      "addr:housenumber": "2295",
                      "addr:street": "Cliffe Avenue",
                      "brand": "7-Eleven",
                      "brand:wikidata": "Q259340",
                      "brand:wikipedia": "en:7-Eleven",
                      "building": "yes",
                      "name": "7-Eleven",
                      "opening_hours": "24/7",
                      "shop": "convenience",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 4,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9846209,
                        49.6784384
                      ]
                    },
                    "id": "way/173227205"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/203309305",
                      "addr:housenumber": "2285",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Sherwin-Williams",
                      "brand:wikidata": "Q48881",
                      "brand:wikipedia": "en:Sherwin-Williams",
                      "building": "yes",
                      "name": "Sherwin-Williams",
                      "phone": "+1-250-338-0123",
                      "shop": "paint",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9847085,
                        49.6785958
                      ]
                    },
                    "id": "way/203309305"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/208755670",
                      "addr:housenumber": "211",
                      "addr:street": "Simms Street",
                      "building": "yes",
                      "name": "Bop City Records",
                      "phone": "+1-250-338-6621",
                      "shop": "music",
                      "@timestamp": "2018-06-20T15:14:00Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9973049,
                        49.6910415
                      ]
                    },
                    "id": "way/208755670"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/223779126",
                      "addr:city": "Courtenay",
                      "addr:housenumber": "2350",
                      "addr:postcode": "V9N 2L6",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Husky",
                      "brand:wikidata": "Q702049",
                      "brand:wikipedia": "en:Husky Energy",
                      "name": "On The Go",
                      "phone": "+1-250-334-2811",
                      "shop": "convenience",
                      "@timestamp": "2023-04-29T22:12:43Z",
                      "@version": 7,
                      "@changeset": 135519518,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9829099,
                        49.6777907
                      ]
                    },
                    "id": "way/223779126"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/223779589",
                      "addr:housenumber": "2400",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Woofy\'s Discount Pet Foods",
                      "phone": "+1-250-338-0455",
                      "shop": "pet",
                      "website": "https://woofys.ca/",
                      "@timestamp": "2018-08-20T21:56:59Z",
                      "@version": 7,
                      "@changeset": 61837369,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9828039,
                        49.677547
                      ]
                    },
                    "id": "way/223779589"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/230488763",
                      "addr:housenumber": "267",
                      "addr:street": "6th Street",
                      "building": "yes",
                      "name": "Ski Tak Hut",
                      "phone": "+1-250-334-2537",
                      "shop": "sports",
                      "sport": "skiing",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9977202,
                        49.6905816
                      ]
                    },
                    "id": "way/230488763"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/231657334",
                      "addr:housenumber": "319",
                      "addr:street": "5th Street",
                      "building": "yes",
                      "name": "Home & Garden Gate",
                      "opening_hours": "Mo-Sa 09:30-17:30; Su 11:00-16:00",
                      "phone": "+1-250-338-8404",
                      "shop": "gift",
                      "@timestamp": "2019-11-06T23:48:11Z",
                      "@version": 7,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9990947,
                        49.6909455
                      ]
                    },
                    "id": "way/231657334"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/236028162",
                      "addr:housenumber": "441",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Wildflower Mercantile",
                      "phone": "+1-250-871-3728",
                      "shop": "clothes",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9977984,
                        49.6917732
                      ]
                    },
                    "id": "way/236028162"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/238877873",
                      "addr:housenumber": "1070",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "medical_supply": "mobility",
                      "name": "Motion",
                      "phone": "+1 250 941-2273",
                      "shop": "medical_supply",
                      "website": "https://motioncares.ca/location/courtenay/",
                      "@timestamp": "2022-04-22T00:35:54Z",
                      "@version": 8,
                      "@changeset": 120024306,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9946855,
                        49.6881899
                      ]
                    },
                    "id": "way/238877873"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/242672489",
                      "brand": "Winners",
                      "brand:wikidata": "Q845257",
                      "brand:wikipedia": "en:Winners",
                      "building": "yes",
                      "name": "Winners",
                      "shop": "clothes",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 2,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9801776,
                        49.6659882
                      ]
                    },
                    "id": "way/242672489"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/245018618",
                      "addr:housenumber": "2275",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Midas",
                      "brand:wikidata": "Q3312613",
                      "brand:wikipedia": "en:Midas (automotive service)",
                      "building": "yes",
                      "name": "Midas Auto Centre",
                      "phone": "+1-250-338-7211",
                      "shop": "car_repair",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9847004,
                        49.678966
                      ]
                    },
                    "id": "way/245018618"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/245018621",
                      "addr:housenumber": "2215",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Kal Tire",
                      "brand:wikidata": "Q6349904",
                      "building": "yes",
                      "name": "Kal Tire",
                      "phone": "+1-250-338-5411",
                      "shop": "tyres",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 6,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9850446,
                        49.6790372
                      ]
                    },
                    "id": "way/245018621"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246097533",
                      "addr:housenumber": "256",
                      "addr:street": "6th Street",
                      "building": "yes",
                      "name": "Happy\'s Source For Sports",
                      "phone": "+1-250-334-4143",
                      "shop": "sports",
                      "@timestamp": "2018-06-20T15:14:07Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9973954,
                        49.6902292
                      ]
                    },
                    "id": "way/246097533"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246097539",
                      "addr:housenumber": "349A",
                      "addr:street": "5th Street",
                      "building": "yes",
                      "name": "G&H Furniture",
                      "phone": "+1-250-334-4225",
                      "shop": "furniture",
                      "@timestamp": "2018-06-20T15:14:07Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9993974,
                        49.6908416
                      ]
                    },
                    "id": "way/246097539"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246097544",
                      "addr:housenumber": "315",
                      "addr:street": "8th Street",
                      "building": "yes",
                      "name": "City Centre Spirits",
                      "phone": "+1-250-331-0111",
                      "shop": "alcohol",
                      "@timestamp": "2018-06-20T15:14:07Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9976143,
                        49.6893483
                      ]
                    },
                    "id": "way/246097544"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246097545",
                      "addr:housenumber": "442D",
                      "addr:street": "Duncan Avenue",
                      "building": "yes",
                      "name": "Blush Salon and Spa",
                      "opening_hours": "Mo-Fr 09:00-16:30",
                      "phone": "+1-250-334-9854",
                      "shop": "hairdresser",
                      "@timestamp": "2020-07-06T07:40:17Z",
                      "@version": 8,
                      "@changeset": 87584384,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9988605,
                        49.6914254
                      ]
                    },
                    "id": "way/246097545"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246097548",
                      "addr:housenumber": "442B",
                      "addr:street": "Duncan Avenue",
                      "building": "yes",
                      "name": "Claude Bigler & Friends",
                      "phone": "+1-778-992-0029",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:14:08Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9989703,
                        49.6915567
                      ]
                    },
                    "id": "way/246097548"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246253849",
                      "addr:housenumber": "2175",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Fabricland",
                      "brand:wikidata": "Q110894964",
                      "building": "yes",
                      "name": "Fabricland",
                      "shop": "fabric",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 2,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9855572,
                        49.6792063
                      ]
                    },
                    "id": "way/246253849"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246253855",
                      "addr:housenumber": "2420",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Tireland",
                      "phone": "+1-250-334-3842",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:09Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9825746,
                        49.6771879
                      ]
                    },
                    "id": "way/246253855"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246553182",
                      "addr:housenumber": "1170",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Trail Bicycles",
                      "opening_hours": "Tu-Sa 10:00-17:30",
                      "phone": "+1-250-334-2456",
                      "shop": "bicycle",
                      "website": "https://www.trailbicycles.ca/",
                      "@timestamp": "2022-05-26T23:43:25Z",
                      "@version": 7,
                      "@changeset": 121549601,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.993794,
                        49.6877033
                      ]
                    },
                    "id": "way/246553182"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246569780",
                      "addr:housenumber": "960",
                      "addr:street": "England Avenue",
                      "branch": "Musical Instruments",
                      "brand": "Long & McQuade",
                      "brand:wikidata": "Q6672180",
                      "building": "yes",
                      "name": "Long & McQuade",
                      "phone": "+1-250-334-4885",
                      "shop": "musical_instrument",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 6,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9974281,
                        49.688001
                      ]
                    },
                    "id": "way/246569780"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246570522",
                      "addr:housenumber": "370",
                      "addr:street": "Puntledge Road",
                      "building": "yes",
                      "name": "Kingsway Tire & Auto Centre",
                      "phone": "+1-250-338-6505",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:12Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9899749,
                        49.6954477
                      ]
                    },
                    "id": "way/246570522"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246570524",
                      "addr:housenumber": "330",
                      "addr:street": "Old Island Highway",
                      "building": "yes",
                      "name": "Care Automotive Service Ltd.",
                      "phone": "+1-250-703-0303",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:12Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9918495,
                        49.6957357
                      ]
                    },
                    "id": "way/246570524"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246570526",
                      "addr:housenumber": "401",
                      "addr:street": "Puntledge Road",
                      "building": "yes",
                      "name": "Fountain Tire",
                      "phone": "+1-250-897-1093",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:12Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9891605,
                        49.6951245
                      ]
                    },
                    "id": "way/246570526"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246570528",
                      "addr:housenumber": "350",
                      "addr:street": "Old Island Highway",
                      "building": "yes",
                      "name": "Value Village",
                      "phone": "+1-250-334-3085",
                      "shop": "charity",
                      "@timestamp": "2018-06-20T15:14:12Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9912328,
                        49.6952371
                      ]
                    },
                    "id": "way/246570528"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246779622",
                      "addr:housenumber": "2085",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Island Technologies",
                      "opening_hours": "Mo-Fr 10:00-18:00",
                      "phone": "+1-250-334-3825",
                      "shop": "computer",
                      "website": "https://istechbc.com/",
                      "@timestamp": "2020-07-06T07:45:17Z",
                      "@version": 3,
                      "@changeset": 87584709,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9853389,
                        49.6807332
                      ]
                    },
                    "id": "way/246779622"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246779625",
                      "addr:housenumber": "2145",
                      "addr:street": "Cliffe Avenue",
                      "building": "yes",
                      "name": "Brian McLean Chevrolet Buick GMC",
                      "phone": "+1-250-334-2425",
                      "shop": "car",
                      "@timestamp": "2018-06-20T15:14:13Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9853233,
                        49.679781
                      ]
                    },
                    "id": "way/246779625"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246781079",
                      "addr:housenumber": "401",
                      "addr:street": "Ryan Road",
                      "building": "yes",
                      "name": "Sunwest Auto Centre",
                      "phone": "+1-250-338-1221",
                      "shop": "car",
                      "@timestamp": "2018-06-20T15:14:13Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.990814,
                        49.6964349
                      ]
                    },
                    "id": "way/246781079"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/246781089",
                      "addr:housenumber": "600",
                      "addr:street": "Ryan Road",
                      "building": "yes",
                      "name": "Town Pantry",
                      "phone": "+1-250-338-1722",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:13Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9903341,
                        49.6978529
                      ]
                    },
                    "id": "way/246781089"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247351139",
                      "addr:housenumber": "1025",
                      "addr:street": "Comox Road",
                      "building": "yes",
                      "name": "Island Honda",
                      "phone": "+1-250-338-7761",
                      "shop": "car",
                      "@timestamp": "2018-06-20T15:14:16Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9915863,
                        49.6900215
                      ]
                    },
                    "id": "way/247351139"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247386475",
                      "brand": "Jiffy Lube",
                      "brand:wikidata": "Q6192247",
                      "brand:wikipedia": "en:Jiffy Lube",
                      "building": "yes",
                      "name": "Jiffy Lube",
                      "phone": "+1-250-334-9969",
                      "shop": "car_repair",
                      "@timestamp": "2019-11-11T00:38:14Z",
                      "@version": 6,
                      "@changeset": 76882825,
                      "@user": "Timothy Smith",
                      "@uid": 115918,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9890607,
                        49.696876
                      ]
                    },
                    "id": "way/247386475"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247386476",
                      "addr:housenumber": "480",
                      "addr:street": "Puntledge Road",
                      "brand": "Bumper to Bumper",
                      "building": "yes",
                      "name": "Bumper to Bumper - Auto Parts",
                      "phone": "+1-250-338-7261",
                      "shop": "car_repair",
                      "@timestamp": "2023-01-01T19:24:21Z",
                      "@version": 7,
                      "@changeset": 130760839,
                      "@user": "Greego",
                      "@uid": 18143029,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9899276,
                        49.6963813
                      ]
                    },
                    "id": "way/247386476"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247577636",
                      "addr:housenumber": "498",
                      "addr:street": "Puntledge Road",
                      "building": "yes",
                      "name": "Island Radiator & Battery",
                      "phone": "+1-250-334-4932",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:18Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9901232,
                        49.6966192
                      ]
                    },
                    "id": "way/247577636"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247577638",
                      "building": "yes",
                      "name": "Courtenay Kia",
                      "shop": "car",
                      "@timestamp": "2013-12-09T02:27:55Z",
                      "@version": 2,
                      "@changeset": 19351379,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.991317,
                        49.6906475
                      ]
                    },
                    "id": "way/247577638"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247983339",
                      "addr:housenumber": "157",
                      "addr:street": "North Island Highway",
                      "building": "yes",
                      "name": "Shell Convenience",
                      "phone": "+1-250-897-1564",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:18Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9916501,
                        49.70056
                      ]
                    },
                    "id": "way/247983339"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/247983340",
                      "addr:housenumber": "451",
                      "addr:street": "Ryan Road",
                      "building": "yes",
                      "name": "Reid\'s Truck & Auto Repairs",
                      "phone": "+1-250-334-3844",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:18Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9903152,
                        49.6968367
                      ]
                    },
                    "id": "way/247983340"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/248497435",
                      "addr:housenumber": "630",
                      "addr:street": "29th Street",
                      "brand": "The Brick",
                      "brand:wikidata": "Q7720000",
                      "brand:wikipedia": "en:The Brick",
                      "building": "yes",
                      "name": "The Brick",
                      "phone": "+1-250-338-9444",
                      "shop": "furniture",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 6,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.98251,
                        49.6707556
                      ]
                    },
                    "id": "way/248497435"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/248558532",
                      "addr:housenumber": "2937",
                      "addr:street": "Kilpatrick Avenue",
                      "brand": "La-Z-Boy",
                      "brand:wikidata": "Q6391583",
                      "brand:wikipedia": "en:La-Z-Boy",
                      "building": "yes",
                      "name": "La-Z-Boy",
                      "phone": "+1-250-871-6074",
                      "shop": "furniture",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9819603,
                        49.6703118
                      ]
                    },
                    "id": "way/248558532"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/248558535",
                      "addr:housenumber": "700",
                      "addr:street": "29th Street",
                      "building": "yes",
                      "name": "Parker\'s Appliances & More",
                      "phone": "+1-250-334-3171",
                      "shop": "furniture",
                      "@timestamp": "2018-06-20T15:14:19Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9827541,
                        49.6704743
                      ]
                    },
                    "id": "way/248558535"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/248558541",
                      "addr:housenumber": "450",
                      "addr:street": "29th Street",
                      "building": "garage",
                      "name": "Great Canadian Oil Change",
                      "phone": "+1-250-871-8700",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:19Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9807048,
                        49.6718074
                      ]
                    },
                    "id": "way/248558541"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249144576",
                      "addr:housenumber": "2995",
                      "addr:street": "Moray Avenue",
                      "building": "yes",
                      "name": "OK Tire",
                      "phone": "+1-250-338-5695",
                      "shop": "car_repair",
                      "website": "https://oktire.com/",
                      "@timestamp": "2023-05-14T11:28:41Z",
                      "@version": 5,
                      "@changeset": 136081282,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9833924,
                        49.668208
                      ]
                    },
                    "id": "way/249144576"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249498502",
                      "addr:housenumber": "787",
                      "addr:street": "Cumberland Road",
                      "building": "yes",
                      "name": "Reliable Auto Body Ltd.",
                      "phone": "+1-250-334-3312",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:22Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0024307,
                        49.6848657
                      ]
                    },
                    "id": "way/249498502"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249498505",
                      "addr:housenumber": "780",
                      "addr:street": "Cumberland Road",
                      "building": "yes",
                      "name": "Courtenay Auto Supply",
                      "phone": "+1-250-338-7277",
                      "shop": "car_parts",
                      "@timestamp": "2018-06-20T15:14:22Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0016424,
                        49.6844572
                      ]
                    },
                    "id": "way/249498505"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249653205",
                      "addr:housenumber": "511",
                      "addr:street": "McPhee Avenue",
                      "building": "yes",
                      "name": "Seeco Automotive",
                      "phone": "+1-250-334-3012",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:23Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0066742,
                        49.6877333
                      ]
                    },
                    "id": "way/249653205"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249653208",
                      "addr:housenumber": "865",
                      "addr:street": "8th Street",
                      "building": "yes",
                      "name": "Coulter\'s Automotive Repairs",
                      "phone": "+1-250-338-5321",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:23Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0045328,
                        49.6856844
                      ]
                    },
                    "id": "way/249653208"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249657472",
                      "addr:housenumber": "865",
                      "addr:street": "McPhee Avenue",
                      "building": "yes",
                      "name": "E&B Market",
                      "phone": "+1-250-334-4125",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:24Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9980053,
                        49.680036
                      ]
                    },
                    "id": "way/249657472"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249842221",
                      "addr:housenumber": "2805",
                      "addr:street": "Kilpatrick Avenue",
                      "building": "yes",
                      "name": "TC Valley Collision",
                      "phone": "+1-250-334-3417",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:25Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843327,
                        49.672073
                      ]
                    },
                    "id": "way/249842221"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249842223",
                      "addr:housenumber": "2701",
                      "addr:street": "Moray Avenue",
                      "building": "yes",
                      "name": "Courtenay Collision",
                      "phone": "+1-250-897-1322",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:25Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9878945,
                        49.6719691
                      ]
                    },
                    "id": "way/249842223"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249842225",
                      "addr:housenumber": "749",
                      "addr:street": "27th Street",
                      "building": "yes",
                      "name": "Willy\'s Collision",
                      "phone": "+1-250-338-5134",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:25Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9865156,
                        49.6730278
                      ]
                    },
                    "id": "way/249842225"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249842226",
                      "addr:housenumber": "2640",
                      "addr:street": "Moray Place",
                      "building": "yes",
                      "name": "Wade\'s Auto Works",
                      "phone": "+1-250-338-2512",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:25Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9869541,
                        49.6733462
                      ]
                    },
                    "id": "way/249842226"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249853865",
                      "addr:housenumber": "731",
                      "addr:street": "30th Street",
                      "building": "yes",
                      "name": "Valley Kitchens Ltd.",
                      "phone": "+1-250-331-9009",
                      "shop": "interior_decoration",
                      "@timestamp": "2018-06-20T15:14:26Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9821631,
                        49.6692599
                      ]
                    },
                    "id": "way/249853865"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249853867",
                      "addr:housenumber": "2967",
                      "addr:street": "Kilpatrick Avenue",
                      "building": "yes",
                      "name": "Merit Home Furniture",
                      "phone": "+1-250-871-1177",
                      "shop": "furniture",
                      "@timestamp": "2018-06-20T15:14:26Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.981739,
                        49.6696921
                      ]
                    },
                    "id": "way/249853867"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249853870",
                      "addr:housenumber": "2915",
                      "addr:street": "Moray Avenue",
                      "building": "yes",
                      "name": "Valley West Autohaus",
                      "phone": "+1-250-334-9888",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:27Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9845974,
                        49.6693365
                      ]
                    },
                    "id": "way/249853870"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249853871",
                      "addr:housenumber": "2931",
                      "addr:street": "Moray Avenue",
                      "building": "yes",
                      "name": "Wayward Distillation House",
                      "phone": "+1-250-871-0424",
                      "shop": "alcohol",
                      "@timestamp": "2018-06-20T15:14:27Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843551,
                        49.6691351
                      ]
                    },
                    "id": "way/249853871"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/249853872",
                      "addr:housenumber": "2981",
                      "addr:street": "Moray Avenue",
                      "building": "yes",
                      "fax": "+1-250-331-0823",
                      "name": "Convoy Supply Construction Materials",
                      "phone": "+1-250-331-0816",
                      "shop": "trade",
                      "trade": "building_materials",
                      "website": "https://www.convoy-supply.com/",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 3,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9835506,
                        49.6684971
                      ]
                    },
                    "id": "way/249853872"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250063082",
                      "addr:housenumber": "908",
                      "addr:street": "5th Street",
                      "building": "yes",
                      "name": "Appletree Market",
                      "phone": "+1-250-331-9257",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:28Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0077111,
                        49.6871891
                      ]
                    },
                    "id": "way/250063082"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250699649",
                      "addr:housenumber": "1155",
                      "addr:street": "Willemar Avenue",
                      "building": "yes",
                      "name": "Willemar Grocery",
                      "phone": "+1-250-334-2913",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:28Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0083232,
                        49.6800465
                      ]
                    },
                    "id": "way/250699649"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250699949",
                      "addr:housenumber": "1755",
                      "addr:street": "13th Street",
                      "alt_name": "ReStore",
                      "brand": "Habitat for Humanity ReStore",
                      "brand:wikidata": "Q108414596",
                      "building": "yes",
                      "name": "Habitat for Humanity ReStore",
                      "phone": "+1-250-334-3784",
                      "second_hand": "yes",
                      "shop": "charity",
                      "short_name": "Habitat ReStore",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 3,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.010399,
                        49.6780249
                      ]
                    },
                    "id": "way/250699949"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250699950",
                      "addr:housenumber": "1810",
                      "addr:street": "Lake Trail Road",
                      "building": "yes",
                      "name": "Supreme Convenience",
                      "phone": "+1-250-334-4347",
                      "shop": "convenience",
                      "@timestamp": "2018-02-09T21:45:55Z",
                      "@version": 2,
                      "@changeset": 56228602,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0115881,
                        49.6795172
                      ]
                    },
                    "id": "way/250699950"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250714176",
                      "addr:housenumber": "2300",
                      "addr:street": "Cousins Avenue",
                      "building": "yes",
                      "name": "Canada Scooters & Medical Supply",
                      "phone": "+1 250 338-8873",
                      "shop": "medical_supply",
                      "website": "https://www.canadascooters.com/",
                      "@timestamp": "2021-02-22T23:51:10Z",
                      "@version": 2,
                      "@changeset": 99778480,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9994781,
                        49.6703116
                      ]
                    },
                    "id": "way/250714176"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250733836",
                      "addr:housenumber": "2391",
                      "addr:street": "Cousins Avenue",
                      "building": "yes",
                      "craft": "welder",
                      "name": "BD Auto & Diesel",
                      "phone": "+1 250 897-0003",
                      "shop": "car_repair",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9991992,
                        49.6695498
                      ]
                    },
                    "id": "way/250733836"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250733841",
                      "addr:housenumber": "2317",
                      "addr:street": "Cousins Avenue",
                      "building": "yes",
                      "name": "Georgia Straight Collision",
                      "phone": "+1-250-338-9636",
                      "shop": "car_repair",
                      "website": "https://gscollision.ca/",
                      "@timestamp": "2021-01-18T09:01:12Z",
                      "@version": 4,
                      "@changeset": 97683338,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9999483,
                        49.669848
                      ]
                    },
                    "id": "way/250733841"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250733844",
                      "addr:housenumber": "2467",
                      "addr:street": "Cousins Avenue",
                      "building": "yes",
                      "name": "Andy\'s Auto Centre",
                      "phone": "+1-250-334-4402",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:29Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9968746,
                        49.6692963
                      ]
                    },
                    "id": "way/250733844"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/250887107",
                      "addr:housenumber": "130",
                      "addr:street": "Centennial Drive",
                      "building": "yes",
                      "name": "Beaver Convenience",
                      "phone": "+1-250-334-8540",
                      "shop": "convenience",
                      "@timestamp": "2018-10-26T20:31:30Z",
                      "@version": 3,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9828332,
                        49.7017126
                      ]
                    },
                    "id": "way/250887107"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/251600741",
                      "addr:housenumber": "475",
                      "addr:street": "Silverdale Crescent",
                      "brand": "Toyota",
                      "brand:wikidata": "Q53268",
                      "building": "yes",
                      "name": "Brian Rice Courtenay Toyota",
                      "phone": "+1-250-338-6761",
                      "shop": "car",
                      "@timestamp": "2023-04-19T22:27:40Z",
                      "@version": 6,
                      "@changeset": 135124394,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9606048,
                        49.7137364
                      ]
                    },
                    "id": "way/251600741"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/252243717",
                      "addr:housenumber": "475",
                      "addr:street": "Silverdale Crescent",
                      "brand": "Mazda",
                      "brand:wikidata": "Q35996",
                      "building": "yes",
                      "name": "Courtenay Mazda",
                      "phone": "+1-250-338-5777",
                      "shop": "car",
                      "@timestamp": "2023-04-19T22:27:40Z",
                      "@version": 5,
                      "@changeset": 135124394,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9594385,
                        49.7144647
                      ]
                    },
                    "id": "way/252243717"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/252408535",
                      "addr:housenumber": "160",
                      "addr:street": "Headquarters Road",
                      "building": "yes",
                      "name": "Glenn\'s Import & Domestic Auto Service",
                      "phone": "+1-250-338-5841",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:14:30Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9916994,
                        49.7009354
                      ]
                    },
                    "id": "way/252408535"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/252408537",
                      "addr:housenumber": "140",
                      "addr:street": "Headquarters Road",
                      "building": "yes",
                      "name": "Good\'s Groceries",
                      "phone": "+1 250 871-2408",
                      "shop": "convenience",
                      "@timestamp": "2022-03-21T03:35:15Z",
                      "@version": 6,
                      "@changeset": 118716600,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9921794,
                        49.7010967
                      ]
                    },
                    "id": "way/252408537"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/252408540",
                      "addr:housenumber": "150",
                      "addr:street": "Headquarters Road",
                      "building": "yes",
                      "name": "Stardust Aesthetics & Body Care",
                      "phone": "+1-250-897-1763",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:14:31Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9920667,
                        49.7009349
                      ]
                    },
                    "id": "way/252408540"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/252866846",
                      "addr:housenumber": "2052",
                      "addr:street": "Comox Avenue",
                      "building": "yes",
                      "name": "Comox Shell",
                      "phone": "+1-250-339-0255",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:14:32Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9375671,
                        49.6761925
                      ]
                    },
                    "id": "way/252866846"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/328164000",
                      "addr:housenumber": "699",
                      "addr:street": "Aspen Road",
                      "building": "commercial",
                      "name": "Peninsula Co-Op",
                      "phone": "+1-250-339-1955",
                      "shop": "convenience",
                      "@timestamp": "2018-06-20T15:15:02Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9435405,
                        49.6881671
                      ]
                    },
                    "id": "way/328164000"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/503315197",
                      "addr:housenumber": "820",
                      "addr:street": "Shamrock Place",
                      "building": "retail",
                      "name": "Salish Sea Foods",
                      "opening_hours": "Mo-Fr 09:00-17:00; Sa 09:00-16:00",
                      "phone": "+1-250-339-6412",
                      "shop": "seafood",
                      "@timestamp": "2022-04-11T02:08:14Z",
                      "@version": 4,
                      "@changeset": 119555492,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9363868,
                        49.6887859
                      ]
                    },
                    "id": "way/503315197"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/503445787",
                      "addr:housenumber": "3025",
                      "addr:street": "Comox Road",
                      "building": "yes",
                      "name": "Portuguese Joe\'s Fish Market",
                      "phone": "+1-250-339-2119",
                      "shop": "seafood",
                      "@timestamp": "2018-06-20T15:15:56Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9644667,
                        49.6787681
                      ]
                    },
                    "id": "way/503445787"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/506164854",
                      "brand": "Mr. Lube",
                      "brand:wikidata": "Q17104067",
                      "brand:wikipedia": "en:Mr. Lube",
                      "building": "garage",
                      "layer": "1",
                      "name": "Mr. Lube",
                      "phone": "+1-250-871-8720",
                      "shop": "car_repair",
                      "@timestamp": "2023-04-19T22:27:40Z",
                      "@version": 4,
                      "@changeset": 135124394,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.962157,
                        49.711225
                      ]
                    },
                    "id": "way/506164854"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/515095009",
                      "addr:housenumber": "971",
                      "addr:street": "Cumberland Road",
                      "building": "yes",
                      "name": "Courtenay Community Thrift Store",
                      "phone": "+1-250-334-2478",
                      "shop": "charity",
                      "@timestamp": "2018-06-20T15:16:03Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0033922,
                        49.6827138
                      ]
                    },
                    "id": "way/515095009"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/548636325",
                      "building": "yes",
                      "name": "Cottage Thrift Shop",
                      "shop": "second_hand",
                      "@timestamp": "2017-12-23T00:36:09Z",
                      "@version": 1,
                      "@changeset": 54853914,
                      "@user": "DENelson83",
                      "@uid": 14512,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9402142,
                        49.6732738
                      ]
                    },
                    "id": "way/548636325"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/631156609",
                      "addr:housenumber": "4767",
                      "addr:street": "Headquarters Road",
                      "building": "yes",
                      "name": "Bear\'s Treasure Cave",
                      "phone": "+1-250-871-4039",
                      "shop": "variety_store",
                      "@timestamp": "2018-10-26T20:32:04Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9999268,
                        49.7054914
                      ]
                    },
                    "id": "way/631156609"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "way/1059403806",
                      "building": "yes",
                      "shop": "convenience",
                      "@timestamp": "2022-05-11T22:38:30Z",
                      "@version": 1,
                      "@changeset": 120860770,
                      "@user": "StarWagon",
                      "@uid": 14517845,
                      "@geometry": "center"
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9629843,
                        49.6789972
                      ]
                    },
                    "id": "way/1059403806"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1346069603",
                      "name": "Canadian Tire Auto Centre",
                      "phone": "+1-250-338-6553",
                      "shop": "car_repair",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9835625,
                        49.672751
                      ]
                    },
                    "id": "node/1346069603"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1355381115",
                      "addr:housenumber": "261",
                      "addr:street": "5th Street",
                      "name": "Graham\'s Jewellers",
                      "phone": "+1-250-334-4523",
                      "shop": "jewelry",
                      "@timestamp": "2018-06-20T15:09:46Z",
                      "@version": 7,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9981521,
                        49.6912472
                      ]
                    },
                    "id": "node/1355381115"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1355384072",
                      "addr:housenumber": "226",
                      "addr:street": "5th Street",
                      "name": "Kradles Prenatal to Preteen",
                      "opening_hours": "Mo-Sa 10:00-17:30",
                      "phone": "+1-250-703-9516",
                      "shop": "clothes",
                      "@timestamp": "2019-11-01T22:12:00Z",
                      "@version": 12,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9976512,
                        49.6911979
                      ]
                    },
                    "id": "node/1355384072"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1355397688",
                      "addr:housenumber": "250",
                      "addr:street": "5th Street",
                      "name": "Searle\'s Shoes Ltd",
                      "phone": "+1-250-334-3178",
                      "shop": "shoes",
                      "@timestamp": "2018-06-20T15:09:46Z",
                      "@version": 7,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9980147,
                        49.6910716
                      ]
                    },
                    "id": "node/1355397688"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1355434538",
                      "addr:housenumber": "332",
                      "addr:street": "5th Street",
                      "name": "Whale\'s Tale Toys",
                      "opening_hours": "Mo-Sa 09:30-17:30",
                      "phone": "+1-250-338-1233",
                      "shop": "toys",
                      "@timestamp": "2019-11-01T22:11:51Z",
                      "@version": 7,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9990567,
                        49.6907107
                      ]
                    },
                    "id": "node/1355434538"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1356979286",
                      "addr:unit": "D1",
                      "brand": "Best Buy",
                      "brand:wikidata": "Q533415",
                      "brand:wikipedia": "en:Best Buy",
                      "name": "Best Buy",
                      "phone": "+1-250-334-9791",
                      "shop": "electronics",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 7,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9776734,
                        49.6675309
                      ]
                    },
                    "id": "node/1356979286"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1468507686",
                      "name": "The Mex Beer & Wine",
                      "shop": "alcohol",
                      "@timestamp": "2011-10-15T19:16:25Z",
                      "@version": 1,
                      "@changeset": 9566284,
                      "@user": "Rycecube",
                      "@uid": 538265
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9848878,
                        49.698608
                      ]
                    },
                    "id": "node/1468507686"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1468507711",
                      "addr:unit": "9",
                      "brand": "7-Eleven",
                      "brand:wikidata": "Q259340",
                      "brand:wikipedia": "en:7-Eleven",
                      "name": "7-Eleven",
                      "opening_hours": "24/7",
                      "phone": "+1-250-334-3351",
                      "shop": "convenience",
                      "@timestamp": "2019-12-14T06:09:00Z",
                      "@version": 10,
                      "@changeset": 78400046,
                      "@user": "Macks25",
                      "@uid": 10545803
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9912808,
                        49.6973102
                      ]
                    },
                    "id": "node/1468507711"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/1468510643",
                      "name": "Joe Apparel",
                      "shop": "clothes",
                      "@timestamp": "2011-10-15T19:20:46Z",
                      "@version": 1,
                      "@changeset": 9566284,
                      "@user": "Rycecube",
                      "@uid": 538265
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9866527,
                        49.6968592
                      ]
                    },
                    "id": "node/1468510643"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2133159188",
                      "addr:housenumber": "168A",
                      "addr:street": "5th Street",
                      "name": "Courtenay Barbers",
                      "phone": "+1-250-334-3343",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:09:52Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9966934,
                        49.6915004
                      ]
                    },
                    "id": "node/2133159188"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2133174914",
                      "addr:unit": "1",
                      "name": "Lordco Auto Parts",
                      "phone": "+1-250-338-6266",
                      "shop": "car_parts",
                      "@timestamp": "2018-06-20T15:09:52Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9844708,
                        49.6773518
                      ]
                    },
                    "id": "node/2133174914"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2137018207",
                      "addr:housenumber": "1095A",
                      "addr:street": "Cliffe Avenue",
                      "brand": "BC Liquor Store",
                      "brand:wikidata": "Q43079557",
                      "brand:wikipedia": "en:BC Liquor Stores",
                      "name": "BC Liquor Store",
                      "phone": "+1-250-334-1333",
                      "shop": "alcohol",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.995363,
                        49.68786
                      ]
                    },
                    "id": "node/2137018207"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2389888099",
                      "addr:housenumber": "525",
                      "addr:street": "Duncan Avenue",
                      "name": "La Mia Bella Salon & Boutique",
                      "phone": "+1-250-871-2242",
                      "shop": "hairdresser",
                      "website": "https://www.schedulicity.com/scheduling/lmbhnj",
                      "@timestamp": "2018-06-20T15:09:55Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.998566,
                        49.6906541
                      ]
                    },
                    "id": "node/2389888099"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2389923654",
                      "addr:unit": "1002",
                      "name": "Quality Foods",
                      "phone": "+1-250-331-9328",
                      "shop": "supermarket",
                      "@timestamp": "2018-06-20T15:09:55Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843536,
                        49.6742397
                      ]
                    },
                    "id": "node/2389923654"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2501306558",
                      "name": "Walmart Tire & Lube Express",
                      "shop": "car_repair",
                      "@timestamp": "2013-10-19T03:16:49Z",
                      "@version": 1,
                      "@changeset": 18428433,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9821535,
                        49.6674651
                      ]
                    },
                    "id": "node/2501306558"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2522813576",
                      "addr:unit": "1",
                      "brand": "Dollarama",
                      "brand:wikidata": "Q3033947",
                      "name": "Dollarama",
                      "opening_hours": "Mo-Fr 08:00-21:00; Sa 08:00-20:00; Su 08:00-19:00",
                      "phone": "+1 250 331-3691",
                      "shop": "variety_store",
                      "website": "https://www.dollarama.com/en-CA/locations/bc/courtenay-3195-cliffe-ave",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 6,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.978339,
                        49.6685692
                      ]
                    },
                    "id": "node/2522813576"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2522820584",
                      "addr:housenumber": "2130",
                      "addr:street": "Cliffe Avenue",
                      "fax": "+1-250-334-7732",
                      "name": "Budget Brake & Muffler",
                      "phone": "+1-250-334-7724",
                      "shop": "car_repair",
                      "website": "https://budgetbrake.com/location/courtenay/",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 3,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843158,
                        49.6801459
                      ]
                    },
                    "id": "node/2522820584"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2522820596",
                      "addr:housenumber": "2130B",
                      "addr:street": "Cliffe Avenue",
                      "name": "Speedy Glass",
                      "shop": "car_repair",
                      "@timestamp": "2013-11-07T04:58:37Z",
                      "@version": 1,
                      "@changeset": 18759039,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9837791,
                        49.6802571
                      ]
                    },
                    "id": "node/2522820596"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534124635",
                      "addr:housenumber": "274B",
                      "addr:street": "5th Street",
                      "name": "Onethirtythree",
                      "opening_hours": "Mo-Sa 10:00-18:00; Su 11:00-17:00",
                      "phone": "+1-250-897-1907",
                      "shop": "sports",
                      "@timestamp": "2019-11-01T22:11:55Z",
                      "@version": 8,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9983152,
                        49.6909672
                      ]
                    },
                    "id": "node/2534124635"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534124638",
                      "addr:housenumber": "292",
                      "addr:street": "5th Street",
                      "name": "Courtenay 5th Street Florist",
                      "opening_hours": "Mo-Fr 09:00-17:00; Sa 10:00-16:00",
                      "phone": "+1-250-338-6736",
                      "shop": "florist",
                      "@timestamp": "2019-11-01T22:11:53Z",
                      "@version": 7,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9984875,
                        49.6909073
                      ]
                    },
                    "id": "node/2534124638"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534124650",
                      "addr:housenumber": "274A",
                      "addr:street": "5th Street",
                      "name": "Robert A Couture",
                      "opening_hours": "Mo-Sa 10:30-16:30",
                      "phone": "+1-250-338-7333",
                      "shop": "clothes",
                      "website": "https://www.robertacouture.ca/",
                      "@timestamp": "2022-03-08T00:20:54Z",
                      "@version": 5,
                      "@changeset": 118216957,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99826,
                        49.6909864
                      ]
                    },
                    "id": "node/2534124650"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534124653",
                      "addr:housenumber": "268A",
                      "addr:street": "5th Street",
                      "name": "States of Summer",
                      "opening_hours": "Mo-Sa 10:00-17:30; Su 12:00-16:00",
                      "phone": "+1-250-897-0671",
                      "shop": "clothes",
                      "website": "https://www.statesofsummer.com/",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 7,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.998102,
                        49.691041
                      ]
                    },
                    "id": "node/2534124653"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148010",
                      "addr:housenumber": "214",
                      "addr:street": "5th Street",
                      "name": "Artifact",
                      "phone": "+1-250-331-0588",
                      "shop": "clothes",
                      "website": "https://www.artifactshop.ca/",
                      "@timestamp": "2019-03-19T01:36:43Z",
                      "@version": 9,
                      "@changeset": 68277863,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9975296,
                        49.6912402
                      ]
                    },
                    "id": "node/2534148010"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148013",
                      "addr:housenumber": "249",
                      "addr:street": "5th Street",
                      "brand": "Benjamin Moore",
                      "brand:wikidata": "Q4889038",
                      "name": "House of Color",
                      "opening_hours": "Mo-Fr 08:00-17:30; Sa 09:00-17:00",
                      "phone": "+1-250-334-4132",
                      "shop": "paint",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 8,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.997999,
                        49.6912977
                      ]
                    },
                    "id": "node/2534148013"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148021",
                      "addr:housenumber": "219",
                      "addr:street": "5th Street",
                      "name": "Jim\'s Clothes Closet",
                      "opening_hours": "Mo-Th, Sa 09:30-17:30; Fr 09:30-18:00",
                      "phone": "+1-250-338-2624",
                      "shop": "clothes",
                      "@timestamp": "2019-11-06T23:48:16Z",
                      "@version": 4,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9976775,
                        49.6914086
                      ]
                    },
                    "id": "node/2534148021"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148026",
                      "addr:housenumber": "243",
                      "addr:street": "5th Street",
                      "copyshop": "clothes",
                      "name": "West Coast Elements",
                      "opening_hours": "Tu-Fr 10:00-17:00; Sa 10:00-15:00",
                      "phone": "+1 250 871-6711",
                      "shop": "copyshop",
                      "website": "https://www.westcoastelements.ca/",
                      "@timestamp": "2020-11-22T03:31:54Z",
                      "@version": 7,
                      "@changeset": 94567720,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9979242,
                        49.691322
                      ]
                    },
                    "id": "node/2534148026"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148028",
                      "addr:housenumber": "273",
                      "addr:street": "5th Street",
                      "name": "Foundation Salon Academy",
                      "phone": "+1 250 338-0129",
                      "shop": "hairdresser",
                      "website": "https://foundationsalonacademy.com/",
                      "@timestamp": "2021-02-23T05:21:25Z",
                      "@version": 9,
                      "@changeset": 99789797,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9982944,
                        49.6911952
                      ]
                    },
                    "id": "node/2534148028"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148031",
                      "addr:housenumber": "285",
                      "addr:street": "5th Street",
                      "name": "Panda Jewellers",
                      "phone": "+1 250 334-1887",
                      "shop": "jewelry",
                      "@timestamp": "2021-02-01T03:58:00Z",
                      "@version": 9,
                      "@changeset": 98475927,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9984017,
                        49.6911502
                      ]
                    },
                    "id": "node/2534148031"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148034",
                      "addr:housenumber": "267",
                      "addr:street": "5th Street",
                      "name": "The Tea Centre",
                      "phone": "+1-250-338-6832",
                      "shop": "tea",
                      "@timestamp": "2018-06-20T15:09:58Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9982166,
                        49.6912179
                      ]
                    },
                    "id": "node/2534148034"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148042",
                      "addr:housenumber": "291",
                      "addr:street": "5th Street",
                      "name": "Design Therapy",
                      "opening_hours": "Mo-Sa 09:00-17:30; Su 10:00-16:00",
                      "phone": "+1-250-338-0211",
                      "shop": "furniture",
                      "@timestamp": "2019-11-06T23:48:12Z",
                      "@version": 7,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9985412,
                        49.691097
                      ]
                    },
                    "id": "node/2534148042"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534148045",
                      "addr:housenumber": "218",
                      "addr:street": "5th Street",
                      "name": "Cause & Effect Wellness",
                      "opening_hours": "Mo-Sa 10:00-17:00",
                      "phone": "+1-250-871-0255",
                      "shop": "gift",
                      "@timestamp": "2020-06-30T14:49:03Z",
                      "@version": 9,
                      "@changeset": 87354448,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9975719,
                        49.6912255
                      ]
                    },
                    "id": "node/2534148045"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534529862",
                      "addr:unit": "C",
                      "name": "Ooh La La Boutique Salon",
                      "shop": "beauty",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0000038,
                        49.6899099
                      ]
                    },
                    "id": "node/2534529862"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534529883",
                      "addr:housenumber": "408",
                      "addr:street": "5th Street",
                      "clothes": "women",
                      "name": "Mercedes Lane Too",
                      "phone": "+1 250 871-8622",
                      "shop": "clothes",
                      "website": "https://www.mercedeslanetoo.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 9,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0001404,
                        49.6902853
                      ]
                    },
                    "id": "node/2534529883"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2534529894",
                      "addr:housenumber": "552",
                      "addr:street": "England Avenue",
                      "name": "Vital Massage Therapy - Keila Neufeld RMT",
                      "phone": "+1-250-702-1146",
                      "shop": "massage",
                      "website": "http://www.vitalmassagetherapy.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9995817,
                        49.6901117
                      ]
                    },
                    "id": "node/2534529894"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2535738356",
                      "addr:unit": "B",
                      "name": "United Floors",
                      "phone": "+1-250-338-5511",
                      "shop": "interior_decoration",
                      "@timestamp": "2018-06-20T15:09:59Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9964195,
                        49.6879447
                      ]
                    },
                    "id": "node/2535738356"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542609745",
                      "addr:housenumber": "319",
                      "addr:street": "4th Street",
                      "name": "The Butcher\'s Block",
                      "opening_hours": "Mo-Sa 08:30-17:30",
                      "phone": "+1-250-338-1412",
                      "shop": "butcher",
                      "@timestamp": "2021-01-31T11:20:56Z",
                      "@version": 5,
                      "@changeset": 98443833,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9997066,
                        49.6916084
                      ]
                    },
                    "id": "node/2542609745"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542609750",
                      "addr:housenumber": "331",
                      "addr:street": "4th Street",
                      "name": "Extreme Ends Salon & Spa",
                      "phone": "+1-250-338-8552",
                      "shop": "hairdresser",
                      "@timestamp": "2021-01-31T11:20:56Z",
                      "@version": 4,
                      "@changeset": 98443833,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9998401,
                        49.6915819
                      ]
                    },
                    "id": "node/2542609750"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542611394",
                      "addr:housenumber": "347",
                      "addr:street": "4th Street",
                      "name": "Runge\'s Imports & Delicatessen",
                      "opening_hours": "Mo-Sa 09:00-17:00",
                      "shop": "butcher",
                      "@timestamp": "2021-01-31T11:20:56Z",
                      "@version": 3,
                      "@changeset": 98443833,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0000977,
                        49.6914847
                      ]
                    },
                    "id": "node/2542611394"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542630775",
                      "addr:housenumber": "244",
                      "addr:street": "5th Street",
                      "name": "La Cache",
                      "opening_hours": "Mo-Sa 09:30-17:30; Su 12:00-16:00",
                      "phone": "+1-250-871-0229",
                      "shop": "interior_decoration",
                      "@timestamp": "2019-11-01T22:11:58Z",
                      "@version": 8,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9978672,
                        49.6911228
                      ]
                    },
                    "id": "node/2542630775"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542812536",
                      "addr:housenumber": "143",
                      "addr:street": "5th Street",
                      "name": "Herb and Smoke",
                      "shop": "tobacco",
                      "@timestamp": "2020-12-16T00:38:27Z",
                      "@version": 3,
                      "@changeset": 95905849,
                      "@user": "QuigleyJones",
                      "@uid": 297740
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99657,
                        49.6917903
                      ]
                    },
                    "id": "node/2542812536"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542812559",
                      "addr:housenumber": "120A",
                      "addr:street": "5th Street",
                      "description": "Since 1998, we have been the Comox Valley\'s one-stop shop for bike sales, service, and accessories.",
                      "name": "Mountain City Cycle",
                      "opening_hours": "Tu-Sa 09:00-17:00",
                      "phone": "+1-250-334-0084",
                      "service:bicycle:pump": "yes",
                      "shop": "bicycle",
                      "website": "https://www.mountaincitycycles.com/",
                      "@timestamp": "2022-06-14T14:18:37Z",
                      "@version": 8,
                      "@changeset": 122374838,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9960016,
                        49.6916809
                      ]
                    },
                    "id": "node/2542812559"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2542812597",
                      "addr:housenumber": "120B",
                      "addr:street": "5th Street",
                      "name": "Blue Toque Sport Swap",
                      "opening_hours": "Mo-Su 09:30-17:30",
                      "phone": "+1-250-871-0302",
                      "shop": "sports",
                      "@timestamp": "2022-05-31T22:06:33Z",
                      "@version": 5,
                      "@changeset": 121786600,
                      "@user": "StarWagon",
                      "@uid": 14517845
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9961703,
                        49.6916202
                      ]
                    },
                    "id": "node/2542812597"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2547909817",
                      "addr:housenumber": "338",
                      "addr:street": "5th Street",
                      "name": "Rally Co.",
                      "phone": "+1-250-871-4200",
                      "shop": "clothes",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 7,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.999133,
                        49.6906898
                      ]
                    },
                    "id": "node/2547909817"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2547909842",
                      "addr:housenumber": "368B",
                      "addr:street": "5th Street",
                      "name": "Hot Chocolates",
                      "opening_hours": "Mo-Sa 08:00-17:30",
                      "phone": "+1-250-338-8211",
                      "shop": "confectionery",
                      "@timestamp": "2019-11-01T22:11:49Z",
                      "@version": 6,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9995688,
                        49.690539
                      ]
                    },
                    "id": "node/2547909842"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2547909851",
                      "addr:housenumber": "368A",
                      "addr:street": "5th Street",
                      "name": "Cakebread Artisan Bakery",
                      "phone": "+1-250-338-8211",
                      "shop": "bakery",
                      "@timestamp": "2018-06-20T15:10:01Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9995017,
                        49.6905616
                      ]
                    },
                    "id": "node/2547909851"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2547909857",
                      "addr:housenumber": "356",
                      "addr:street": "5th Street",
                      "name": "Uranus Greeting Cards & Gifts",
                      "phone": "+1-250-334-4074",
                      "shop": "gift",
                      "@timestamp": "2018-06-20T15:10:02Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9993555,
                        49.6906153
                      ]
                    },
                    "id": "node/2547909857"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2548226880",
                      "addr:housenumber": "357B",
                      "addr:street": "5th Street",
                      "name": "FD & Interiors",
                      "opening_hours": "Tu-Sa 10:00-17:00",
                      "phone": "+1-877-388-8022",
                      "shop": "furniture",
                      "@timestamp": "2019-11-06T23:48:09Z",
                      "@version": 5,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9994914,
                        49.6907602
                      ]
                    },
                    "id": "node/2548226880"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2548226881",
                      "addr:housenumber": "349B",
                      "addr:street": "5th Street",
                      "name": "Newlook Eyewear",
                      "phone": "+1-250-334-2043",
                      "shop": "optician",
                      "@timestamp": "2019-12-26T07:05:45Z",
                      "@version": 8,
                      "@changeset": 78868340,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.999261,
                        49.6908453
                      ]
                    },
                    "id": "node/2548226881"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2548226884",
                      "addr:housenumber": "357A",
                      "addr:street": "5th Street",
                      "name": "Soul Star Boutique",
                      "phone": "+1-250-338-5095",
                      "shop": "gift",
                      "@timestamp": "2018-06-20T15:10:02Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9995453,
                        49.6907413
                      ]
                    },
                    "id": "node/2548226884"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550068140",
                      "addr:unit": "8",
                      "brand": "Flight Centre",
                      "brand:wikidata": "Q5459202",
                      "brand:wikipedia": "en:Flight Centre",
                      "name": "Flight Centre",
                      "phone": "+1-866-629-3208",
                      "shop": "travel_agency",
                      "@timestamp": "2019-11-11T00:38:14Z",
                      "@version": 4,
                      "@changeset": 76882825,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9864019,
                        49.6980273
                      ]
                    },
                    "id": "node/2550068140"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550068141",
                      "addr:unit": "11",
                      "name": "More For Your Dollar Store",
                      "phone": "+1-250-897-0197",
                      "shop": "variety_store",
                      "@timestamp": "2018-06-20T15:10:02Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9862213,
                        49.697893
                      ]
                    },
                    "id": "node/2550068141"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550068143",
                      "addr:unit": "10",
                      "name": "Shoe Warehouse",
                      "phone": "+1-250-703-0077",
                      "shop": "shoes",
                      "@timestamp": "2018-06-20T15:10:02Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9863403,
                        49.6979756
                      ]
                    },
                    "id": "node/2550068143"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550068144",
                      "addr:unit": "9",
                      "branch": "Mobility",
                      "brand": "Telus",
                      "brand:wikidata": "Q165858",
                      "name": "Telus",
                      "phone": "+1-250-897-1188",
                      "shop": "mobile_phone",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 5,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.986371,
                        49.6980027
                      ]
                    },
                    "id": "node/2550068144"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550068145",
                      "addr:unit": "12",
                      "name": "Woofy\'s Discount Pet Foods",
                      "phone": "+1-250-338-0424",
                      "shop": "pet",
                      "website": "https://woofys.ca/",
                      "@timestamp": "2018-08-20T21:56:59Z",
                      "@version": 5,
                      "@changeset": 61837369,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9861641,
                        49.697843
                      ]
                    },
                    "id": "node/2550068145"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550180544",
                      "addr:unit": "5",
                      "name": "MyTechGuys",
                      "phone": "+1-250-338-4411",
                      "shop": "computer",
                      "@timestamp": "2018-06-20T15:10:03Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843058,
                        49.6769971
                      ]
                    },
                    "id": "node/2550180544"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550180546",
                      "addr:unit": "11",
                      "brand": "Expedia Cruises",
                      "brand:wikidata": "Q5189985",
                      "brand:wikipedia": "en:Expedia Cruises",
                      "name": "Expedia Cruises",
                      "phone": "+1-250-334-3323",
                      "shop": "travel_agency",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 9,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.984176,
                        49.6767316
                      ]
                    },
                    "id": "node/2550180546"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550180547",
                      "addr:unit": "2",
                      "name": "Modern Hair Design",
                      "phone": "+1-250-897-1415",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:03Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9843825,
                        49.677154
                      ]
                    },
                    "id": "node/2550180547"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550180553",
                      "addr:unit": "6",
                      "name": "Comox Valley Laundry & Dry Cleaning Depot",
                      "phone": "+1-250-334-0875",
                      "shop": "laundry",
                      "@timestamp": "2019-03-21T03:42:52Z",
                      "@version": 7,
                      "@changeset": 68359938,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9842546,
                        49.6768924
                      ]
                    },
                    "id": "node/2550180553"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550198605",
                      "addr:housenumber": "432",
                      "addr:street": "Puntledge Road",
                      "name": "Modern",
                      "phone": "+1-250-334-2599",
                      "shop": "interior_decoration",
                      "@timestamp": "2018-06-20T15:10:03Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9895306,
                        49.695774
                      ]
                    },
                    "id": "node/2550198605"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215582",
                      "addr:housenumber": "438",
                      "addr:street": "5th Street",
                      "name": "Shar-On\'s Plus Size Fashion Group",
                      "phone": "+1-250-334-0840",
                      "shop": "clothes",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 6,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0005263,
                        49.6901609
                      ]
                    },
                    "id": "node/2550215582"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215584",
                      "addr:housenumber": "449B",
                      "addr:street": "5th Street",
                      "name": "The Everything Wet Store",
                      "opening_hours": "Mo-Sa 10:00-17:00; Su 11:00-15:00",
                      "phone": "+1-250-897-3646",
                      "shop": "clothes",
                      "@timestamp": "2019-11-06T23:48:07Z",
                      "@version": 8,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0009045,
                        49.6903031
                      ]
                    },
                    "id": "node/2550215584"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215587",
                      "addr:housenumber": "449A",
                      "addr:street": "5th Street",
                      "name": "Square One Travel Services",
                      "opening_hours": "Mo-Fr 09:00-17:00; Sa 10:00-16:00",
                      "phone": "+1-250-334-0355",
                      "shop": "travel_agency",
                      "@timestamp": "2019-11-06T23:48:07Z",
                      "@version": 7,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0008294,
                        49.6903309
                      ]
                    },
                    "id": "node/2550215587"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215588",
                      "addr:housenumber": "436",
                      "addr:street": "5th Street",
                      "name": "Extreme Runners",
                      "phone": "+1-250-703-9544",
                      "shop": "clothes",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 6,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0004676,
                        49.6901801
                      ]
                    },
                    "id": "node/2550215588"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215589",
                      "addr:housenumber": "478A",
                      "addr:street": "5th Street",
                      "name": "VV Boutique - Ultra Premium Consignment",
                      "opening_hours": "Tu-Sa 10:00-18:00",
                      "phone": "+1 250 338-3932",
                      "shop": "clothes",
                      "website": "https://vvboutique.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 8,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.000928,
                        49.6900238
                      ]
                    },
                    "id": "node/2550215589"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215590",
                      "addr:housenumber": "491",
                      "addr:street": "5th Street",
                      "name": "Foxy Box Wax Bar",
                      "opening_hours": "Mo-Fr 08:00-21:00; Sa 08:00-20:00; Su 10:00-04:00",
                      "phone": "+1-250-871-8282",
                      "shop": "beauty",
                      "website": "https://www.foxybox.ca/",
                      "@timestamp": "2019-11-06T23:48:03Z",
                      "@version": 9,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0014439,
                        49.6901262
                      ]
                    },
                    "id": "node/2550215590"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215592",
                      "addr:housenumber": "430D",
                      "addr:street": "5th Street",
                      "name": "Cherry Wine Fashions",
                      "opening_hours": "Mo-Sa 09:30-17:30; Su 11:00-16:00",
                      "phone": "+1-250-338-0626",
                      "shop": "clothes",
                      "@timestamp": "2019-11-01T22:11:46Z",
                      "@version": 7,
                      "@changeset": 76515657,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0003037,
                        49.6902372
                      ]
                    },
                    "id": "node/2550215592"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215594",
                      "addr:housenumber": "456",
                      "addr:street": "5th Street",
                      "name": "Too Good To Be Threw 2",
                      "shop": "clothes",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 5,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0007224,
                        49.6901003
                      ]
                    },
                    "id": "node/2550215594"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215596",
                      "addr:housenumber": "431",
                      "addr:street": "5th Street",
                      "name": "Secret Drawers",
                      "opening_hours": "Mo-Sa 10:00-17:00",
                      "phone": "+1-250-897-7488",
                      "shop": "clothes",
                      "@timestamp": "2019-11-06T23:48:08Z",
                      "@version": 8,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0006631,
                        49.6903916
                      ]
                    },
                    "id": "node/2550215596"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2550215598",
                      "addr:housenumber": "485",
                      "addr:street": "5th Street",
                      "name": "Roots The Salon",
                      "opening_hours": "Mo 09:00-17:00; Tu, Fr 09:00-18:00; We 09:00-20:00; Th 09:00-19:00; Sa 09:00-16:00",
                      "phone": "+1-250-703-0181",
                      "shop": "hairdresser",
                      "@timestamp": "2019-11-06T23:48:04Z",
                      "@version": 7,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0013632,
                        49.6901505
                      ]
                    },
                    "id": "node/2550215598"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2551995605",
                      "addr:unit": "F",
                      "name": "Cloves Catering",
                      "phone": "+1-250-334-9444",
                      "shop": "deli",
                      "website": "https://www.cloves.ca/",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 9,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9998264,
                        49.6899153
                      ]
                    },
                    "id": "node/2551995605"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2551995623",
                      "addr:housenumber": "351",
                      "addr:street": "6th Street",
                      "name": "6th Street Barbers",
                      "phone": "+1-250-338-1668",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:06Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9987964,
                        49.6900455
                      ]
                    },
                    "id": "node/2551995623"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2556553545",
                      "addr:housenumber": "301",
                      "addr:street": "Puntledge Road",
                      "name": "ABC Printing and Signs",
                      "phone": "+1-250-338-6364",
                      "shop": "copyshop",
                      "@timestamp": "2018-06-20T15:10:06Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9902776,
                        49.6944894
                      ]
                    },
                    "id": "node/2556553545"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2558087418",
                      "addr:unit": "101",
                      "name": "Johns\' Bedroom Barn & Foam Warehouse",
                      "phone": "+1-250-897-1666",
                      "shop": "furniture",
                      "@timestamp": "2019-06-12T03:44:12Z",
                      "@version": 5,
                      "@changeset": 71163753,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9963208,
                        49.68882
                      ]
                    },
                    "id": "node/2558087418"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2558087449",
                      "addr:unit": "B",
                      "name": "Easyhome",
                      "phone": "+1-250-334-2636",
                      "shop": "furniture",
                      "website": "https://www.easyhome.ca/",
                      "@timestamp": "2019-01-20T01:17:25Z",
                      "@version": 5,
                      "@changeset": 66466701,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9966134,
                        49.688631
                      ]
                    },
                    "id": "node/2558087449"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2558172036",
                      "addr:housenumber": "512",
                      "addr:street": "5th Street",
                      "name": "Salon Pure Hair & Esthetics",
                      "phone": "+1-250-871-5515",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:07Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0018141,
                        49.6896496
                      ]
                    },
                    "id": "node/2558172036"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2558172037",
                      "addr:city": "Courtenay",
                      "addr:housenumber": "420",
                      "addr:postcode": "V9N 7N2",
                      "addr:province": "BC",
                      "addr:street": "Fitzgerald Avenue",
                      "name": "Local Refillery Grocer",
                      "opening_hours": "Mo-Sa 09:00-17:00; Su 11:00-16:00",
                      "phone": "+1-250-661-3201",
                      "planned:shop": "grocer",
                      "shop": "variety_store",
                      "website": "https://www.localrefillery.com",
                      "@timestamp": "2023-01-03T23:50:37Z",
                      "@version": 10,
                      "@changeset": 130846427,
                      "@user": "StarWagon",
                      "@uid": 14517845
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0018,
                        49.6905085
                      ]
                    },
                    "id": "node/2558172037"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2558172042",
                      "addr:housenumber": "556",
                      "addr:street": "5th Street",
                      "name": "Vassili\'s Bread Shop",
                      "phone": "+1-250-871-0880",
                      "shop": "bakery",
                      "@timestamp": "2018-06-20T15:10:07Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0026761,
                        49.6894255
                      ]
                    },
                    "id": "node/2558172042"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2559420699",
                      "addr:housenumber": "753",
                      "addr:street": "Fitzgerald Avenue",
                      "name": "Designer Woodworks Inc.",
                      "phone": "+1 250 871-2569",
                      "shop": "art",
                      "website": "https://designerwoodworksinc.com/",
                      "@timestamp": "2021-02-01T06:52:19Z",
                      "@version": 7,
                      "@changeset": 98486574,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0006969,
                        49.688625
                      ]
                    },
                    "id": "node/2559420699"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2559420700",
                      "addr:unit": "B",
                      "name": "Mane Lines Hair Fashion",
                      "phone": "+1-250-334-4542",
                      "shop": "hairdresser",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 5,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9991527,
                        49.6883086
                      ]
                    },
                    "id": "node/2559420700"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2563996071",
                      "addr:unit": "E",
                      "name": "Richard\'s and Robert\'s Hair Design",
                      "phone": "+1-250-338-0019",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:10Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9847859,
                        49.6728846
                      ]
                    },
                    "id": "node/2563996071"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2564089474",
                      "addr:unit": "1",
                      "name": "Splashes Bath & Kitchen",
                      "phone": "+1-250-334-3353",
                      "shop": "interior_decoration",
                      "@timestamp": "2018-06-20T15:10:10Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9831246,
                        49.6715272
                      ]
                    },
                    "id": "node/2564089474"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2569301474",
                      "addr:unit": "1",
                      "brand": "Reitmans",
                      "brand:wikidata": "Q7310506",
                      "brand:wikipedia": "en:Reitmans",
                      "name": "Reitmans",
                      "phone": "+1-250-334-1824",
                      "shop": "clothes",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 5,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9795126,
                        49.6682326
                      ]
                    },
                    "id": "node/2569301474"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2569301490",
                      "addr:unit": "2",
                      "name": "Bulk Barn",
                      "phone": "+1-250-897-0086",
                      "shop": "convenience",
                      "@timestamp": "2018-10-26T20:30:10Z",
                      "@version": 4,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9793406,
                        49.668307
                      ]
                    },
                    "id": "node/2569301490"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2569301498",
                      "addr:unit": "3",
                      "brand": "Penningtons",
                      "brand:wikidata": "Q16956527",
                      "brand:wikipedia": "en:Penningtons",
                      "clothes": "women",
                      "name": "Penningtons",
                      "phone": "+1-250-334-8283",
                      "shop": "clothes",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.979154,
                        49.6683875
                      ]
                    },
                    "id": "node/2569301498"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2569301511",
                      "addr:unit": "4",
                      "branch": "For Hair",
                      "brand": "Great Clips",
                      "brand:wikidata": "Q5598967",
                      "brand:wikipedia": "en:Great Clips",
                      "name": "Great Clips",
                      "phone": "+1-250-338-9800",
                      "shop": "hairdresser",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.979002,
                        49.6684533
                      ]
                    },
                    "id": "node/2569301511"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2577786097",
                      "addr:unit": "100",
                      "name": "Thrifty Foods",
                      "phone": "+1-250-331-5101",
                      "shop": "supermarket",
                      "@timestamp": "2019-09-21T07:36:06Z",
                      "@version": 8,
                      "@changeset": 74742210,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.962798,
                        49.7102346
                      ]
                    },
                    "id": "node/2577786097"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2577955837",
                      "addr:unit": "A",
                      "name": "True Dimension Hair Designs",
                      "phone": "+1-250-334-1906",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:11Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9869518,
                        49.6819991
                      ]
                    },
                    "id": "node/2577955837"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2577955841",
                      "addr:unit": "101",
                      "name": "Studio 101 Eclipse Hair Design",
                      "phone": "+1-250-897-3141",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:11Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.986211,
                        49.6813541
                      ]
                    },
                    "id": "node/2577955841"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2577955844",
                      "addr:unit": "3",
                      "name": "Monk Office Supply",
                      "phone": "+1-250-334-2322",
                      "shop": "stationery",
                      "website": "https://www.monk.ca/location/3-2760-cliffe-avenue-courtenay-v9n-2l8/",
                      "@timestamp": "2018-06-20T15:10:11Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9813891,
                        49.6749781
                      ]
                    },
                    "id": "node/2577955844"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2577955852",
                      "addr:unit": "104",
                      "name": "Weaver\'s Leather",
                      "phone": "+1-250-897-0239",
                      "shop": "clothes",
                      "@timestamp": "2019-07-09T00:06:07Z",
                      "@version": 5,
                      "@changeset": 72032806,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9835946,
                        49.6783903
                      ]
                    },
                    "id": "node/2577955852"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2578785384",
                      "addr:unit": "7",
                      "name": "Family and Friends Thrift Store",
                      "phone": "+1-250-871-7765",
                      "shop": "second_hand",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 5,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9895261,
                        49.6950147
                      ]
                    },
                    "id": "node/2578785384"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295296",
                      "addr:unit": "1",
                      "branch": "Work Wearhouse",
                      "brand": "Mark\'s",
                      "brand:wikidata": "Q6766373",
                      "brand:wikipedia": "en:Mark\'s",
                      "name": "Mark\'s",
                      "phone": "+1-250-338-1361",
                      "shop": "clothes",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.978669,
                        49.6668031
                      ]
                    },
                    "id": "node/2580295296"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295299",
                      "addr:unit": "4",
                      "name": "Keystone College",
                      "phone": "+1-250-871-8300",
                      "shop": "hairdresser",
                      "website": "https://keystonecollege.ca/",
                      "@timestamp": "2019-04-23T16:46:35Z",
                      "@version": 5,
                      "@changeset": 69496588,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9815392,
                        49.6752686
                      ]
                    },
                    "id": "node/2580295299"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295300",
                      "addr:unit": "107",
                      "name": "Island Traders",
                      "phone": "+1-250-338-2942",
                      "shop": "second_hand",
                      "@timestamp": "2019-06-12T03:44:12Z",
                      "@version": 5,
                      "@changeset": 71163753,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9978402,
                        49.6883722
                      ]
                    },
                    "id": "node/2580295300"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295302",
                      "addr:unit": "1",
                      "alt_name": "Ashley Furniture",
                      "brand": "Ashley HomeStore",
                      "brand:wikidata": "Q4805437",
                      "brand:wikipedia": "en:Ashley HomeStore",
                      "name": "Ashley HomeStore",
                      "phone": "+1-250-334-0007",
                      "shop": "furniture",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 7,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9798957,
                        49.6704478
                      ]
                    },
                    "id": "node/2580295302"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295306",
                      "addr:unit": "2",
                      "name": "End of the Roll",
                      "phone": "+1-250-334-9394",
                      "shop": "carpet",
                      "@timestamp": "2018-06-20T15:10:13Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9794245,
                        49.6699355
                      ]
                    },
                    "id": "node/2580295306"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295311",
                      "addr:unit": "C3",
                      "brand": "Sleep Country",
                      "brand:wikidata": "Q7539684",
                      "brand:wikipedia": "en:Sleep Country Canada",
                      "name": "Sleep Country",
                      "phone": "+1-250-898-8260",
                      "shop": "bed",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 5,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9790184,
                        49.6666487
                      ]
                    },
                    "id": "node/2580295311"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295313",
                      "addr:unit": "3",
                      "name": "Gone Fishin\'",
                      "phone": "+1-250-334-2007",
                      "shop": "sports",
                      "sport": "fishing",
                      "@timestamp": "2018-06-20T15:10:13Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.981568,
                        49.6753178
                      ]
                    },
                    "id": "node/2580295313"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295314",
                      "addr:unit": "2",
                      "beauty": "tanning",
                      "name": "On The DarkSide Tanning",
                      "phone": "+1-250-703-0207",
                      "shop": "beauty",
                      "@timestamp": "2021-03-13T04:55:54Z",
                      "@version": 5,
                      "@changeset": 100941253,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.981598,
                        49.6753702
                      ]
                    },
                    "id": "node/2580295314"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295315",
                      "addr:unit": "1A",
                      "name": "Edward & Parnell Barber Shoppe",
                      "phone": "+1-250-897-3252",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:13Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.981663,
                        49.6754802
                      ]
                    },
                    "id": "node/2580295315"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2580295318",
                      "addr:unit": "1",
                      "name": "Cloverdale Paint",
                      "phone": "+1-250-334-4113",
                      "shop": "paint",
                      "@timestamp": "2018-06-20T15:10:13Z",
                      "@version": 6,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9795293,
                        49.6701007
                      ]
                    },
                    "id": "node/2580295318"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2584733049",
                      "addr:housenumber": "4785",
                      "addr:street": "Headquarters Road",
                      "name": "Quality Antique Furniture",
                      "phone": "+1-250-338-6053",
                      "shop": "furniture",
                      "website": "http://www.qualityantiquefurniture.ca",
                      "@timestamp": "2020-06-30T14:49:03Z",
                      "@version": 3,
                      "@changeset": 87354448,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0012188,
                        49.705567
                      ]
                    },
                    "id": "node/2584733049"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2588887371",
                      "opening_hours": "Mo-Su 06:00-21:00",
                      "shop": "laundry",
                      "@timestamp": "2019-07-19T01:48:09Z",
                      "@version": 3,
                      "@changeset": 72410849,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9376883,
                        49.6762634
                      ]
                    },
                    "id": "node/2588887371"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2590027370",
                      "addr:unit": "B",
                      "name": "Urban Hair & Esthetics Studio",
                      "phone": "+1-250-339-2219",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:10:14Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9382853,
                        49.6761265
                      ]
                    },
                    "id": "node/2590027370"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2593427477",
                      "addr:unit": "402",
                      "brand": "First Choice Haircutters",
                      "brand:wikidata": "Q5452622",
                      "brand:wikipedia": "en:First Choice Haircutters",
                      "name": "First Choice Haircutters",
                      "phone": "+1-250-338-2220",
                      "shop": "hairdresser",
                      "@timestamp": "2019-09-17T18:04:41Z",
                      "@version": 6,
                      "@changeset": 74594014,
                      "@user": "Rps333",
                      "@uid": 596047
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9633621,
                        49.7091935
                      ]
                    },
                    "id": "node/2593427477"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2593427485",
                      "addr:unit": "200",
                      "name": "Cascadia Liquor Store",
                      "phone": "+1-250-871-8171",
                      "shop": "alcohol",
                      "@timestamp": "2018-06-20T15:10:15Z",
                      "@version": 5,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9628921,
                        49.7098183
                      ]
                    },
                    "id": "node/2593427485"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2628030543",
                      "addr:unit": "8",
                      "name": "Your Dollar Store With More",
                      "phone": "+1-250-334-2188",
                      "shop": "variety_store",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 6,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9928051,
                        49.6840469
                      ]
                    },
                    "id": "node/2628030543"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2628030551",
                      "addr:unit": "10",
                      "name": "Uniglobe Alliance Travel",
                      "phone": "+1-250-334-3442",
                      "shop": "travel_agency",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9927011,
                        49.6839672
                      ]
                    },
                    "id": "node/2628030551"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2628030558",
                      "name": "Thrifty Foods Liquor",
                      "phone": "+1-250-871-0820",
                      "shop": "alcohol",
                      "unit": "1",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 7,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9931046,
                        49.6842763
                      ]
                    },
                    "id": "node/2628030558"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2628030580",
                      "addr:unit": "7",
                      "name": "Iris Optometrists",
                      "phone": "+1-250-334-3541",
                      "shop": "optician",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 5,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9928701,
                        49.6840967
                      ]
                    },
                    "id": "node/2628030580"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2630256268",
                      "addr:unit": "E",
                      "name": "Valhalla Pure Outfitters",
                      "phone": "+1-250-871-3963",
                      "shop": "outdoor",
                      "@timestamp": "2018-06-20T15:10:17Z",
                      "@version": 4,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9811177,
                        49.6725758
                      ]
                    },
                    "id": "node/2630256268"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/2630256273",
                      "addr:unit": "A",
                      "name": "Sabzi Mandi Supermarket",
                      "opening_hours": "Mo-Sa 10:00-19:00; Su 10:00-18:00",
                      "phone": "+1 250 871-2410",
                      "shop": "supermarket",
                      "website": "http://sabzimandicanada.com/",
                      "@timestamp": "2022-05-14T09:39:24Z",
                      "@version": 6,
                      "@changeset": 120971183,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9812858,
                        49.6728559
                      ]
                    },
                    "id": "node/2630256273"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4456029216",
                      "addr:unit": "6",
                      "name": "Summit Therapeutic & Sports Massage",
                      "phone": "+1-250-897-3431",
                      "shop": "massage",
                      "website": "http://www.summitrmt.com",
                      "@timestamp": "2018-09-04T04:46:53Z",
                      "@version": 5,
                      "@changeset": 62265179,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9863018,
                        49.6831706
                      ]
                    },
                    "id": "node/4456029216"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4592191192",
                      "addr:housenumber": "2016",
                      "addr:street": "Comox Ave",
                      "addr:unit": "B",
                      "description": "coffee and sandwich shop",
                      "name": "Milano Boutique Coffee Roasters",
                      "phone": "+1-250-218-2270",
                      "shop": "coffee",
                      "website": "https://www.milanocoffee.ca/",
                      "@timestamp": "2022-05-12T12:31:55Z",
                      "@version": 6,
                      "@changeset": 120887205,
                      "@user": "StarWagon",
                      "@uid": 14517845
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.936138,
                        49.6760805
                      ]
                    },
                    "id": "node/4592191192"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4611409221",
                      "addr:unit": "A",
                      "brand": "Dulux Paints",
                      "brand:wikidata": "Q50921",
                      "brand:wikipedia": "en:Dulux",
                      "name": "Dulux Paints",
                      "phone": "+1-250-331-0522",
                      "shop": "paint",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 3,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.983998,
                        49.6759886
                      ]
                    },
                    "id": "node/4611409221"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4624439448",
                      "addr:unit": "5",
                      "name": "Top Notch Soccer",
                      "phone": "+1-250-871-0620",
                      "shop": "sports",
                      "sport": "soccer",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.990396,
                        49.6999454
                      ]
                    },
                    "id": "node/4624439448"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4624439451",
                      "addr:unit": "8",
                      "name": "The Head Shed",
                      "phone": "+1-250-338-5541",
                      "shop": "hairdresser",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9901466,
                        49.6997623
                      ]
                    },
                    "id": "node/4624439451"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4624439453",
                      "addr:unit": "10",
                      "name": "Island Mediquip",
                      "phone": "+1-250-871-0366",
                      "shop": "medical_supply",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9900153,
                        49.6996508
                      ]
                    },
                    "id": "node/4624439453"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4879613627",
                      "addr:housenumber": "123",
                      "addr:street": "5th Street",
                      "name": "Silhouette Theatre & Dance Shop",
                      "phone": "+1-250-334-9219",
                      "shop": "clothes",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 5,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9962445,
                        49.6918964
                      ]
                    },
                    "id": "node/4879613627"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4879613629",
                      "addr:housenumber": "333",
                      "addr:street": "5th Street",
                      "name": "Ski & Surf Shop",
                      "opening_hours": "Mo-Sa 10:00-17:30",
                      "phone": "+1-250-338-8844",
                      "shop": "clothes",
                      "@timestamp": "2019-11-06T23:48:10Z",
                      "@version": 5,
                      "@changeset": 76726331,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9991676,
                        49.6908766
                      ]
                    },
                    "id": "node/4879613629"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4936314295",
                      "addr:housenumber": "821",
                      "addr:street": "Shamrock Place",
                      "addr:unit": "7",
                      "name": "Signature West - Carpet One",
                      "phone": "+1-250-339-6522",
                      "shop": "carpet",
                      "@timestamp": "2018-06-20T15:12:41Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.93734,
                        49.6885278
                      ]
                    },
                    "id": "node/4936314295"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4937546043",
                      "addr:unit": "7",
                      "name": "Pharmasave",
                      "phone": "+1-250-339-4563",
                      "shop": "chemist",
                      "@timestamp": "2018-09-07T21:28:48Z",
                      "@version": 3,
                      "@changeset": 62388915,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9447256,
                        49.6881101
                      ]
                    },
                    "id": "node/4937546043"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4937546044",
                      "addr:unit": "2",
                      "name": "Bosley\'s",
                      "phone": "+1-250-339-3043",
                      "shop": "pet",
                      "@timestamp": "2018-09-07T21:28:48Z",
                      "@version": 3,
                      "@changeset": 62388915,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9451715,
                        49.6883024
                      ]
                    },
                    "id": "node/4937546044"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4937873412",
                      "addr:unit": "2",
                      "name": "Andrew Sheret Limited",
                      "phone": "+1-250-334-3353",
                      "shop": "trade",
                      "@timestamp": "2018-06-20T15:12:42Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9835426,
                        49.6711101
                      ]
                    },
                    "id": "node/4937873412"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4957841959",
                      "addr:unit": "D",
                      "name": "Courtenay Automotive Repair Centre",
                      "phone": "+1-250-338-0131",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:12:44Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9823734,
                        49.6767918
                      ]
                    },
                    "id": "node/4957841959"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4957841960",
                      "name": "Courtenay Grind",
                      "phone": "+1-250-702-3449",
                      "shop": "coffee",
                      "@timestamp": "2018-06-20T15:12:44Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9827085,
                        49.6795605
                      ]
                    },
                    "id": "node/4957841960"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4959412729",
                      "brand": "Dollarama",
                      "brand:wikidata": "Q3033947",
                      "brand:wikipedia": "en:Dollarama",
                      "name": "Dollarama",
                      "phone": "+1-250-703-2104",
                      "shop": "variety_store",
                      "@timestamp": "2019-09-17T18:04:41Z",
                      "@version": 3,
                      "@changeset": 74594014,
                      "@user": "Rps333",
                      "@uid": 596047
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9627554,
                        49.710949
                      ]
                    },
                    "id": "node/4959412729"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4960894632",
                      "addr:unit": "1",
                      "name": "Colonial Countertops",
                      "phone": "+1-250-334-2126",
                      "shop": "interior_decoration",
                      "@timestamp": "2018-06-20T15:12:45Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9811232,
                        49.6693086
                      ]
                    },
                    "id": "node/4960894632"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4962430176",
                      "addr:unit": "204",
                      "name": "Level 10 Eurospa",
                      "phone": "+1-250-334-0209",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:12:45Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9958102,
                        49.6881921
                      ]
                    },
                    "id": "node/4962430176"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4963147294",
                      "addr:unit": "2",
                      "name": "Pure Audio Centre",
                      "phone": "+1-250-871-7873",
                      "shop": "hifi",
                      "@timestamp": "2018-12-29T22:45:52Z",
                      "@version": 4,
                      "@changeset": 65877158,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9808892,
                        49.6687049
                      ]
                    },
                    "id": "node/4963147294"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457124",
                      "addr:unit": "1420",
                      "name": "Peoples",
                      "phone": "+1-250-338-6404",
                      "shop": "jewelry",
                      "@timestamp": "2018-10-02T05:51:58Z",
                      "@version": 3,
                      "@changeset": 63113474,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9837998,
                        49.673708
                      ]
                    },
                    "id": "node/4976457124"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457127",
                      "addr:unit": "1200",
                      "name": "Specsavers",
                      "phone": "+1 250 410-3057",
                      "shop": "optician",
                      "@timestamp": "2023-04-22T17:39:55Z",
                      "@version": 4,
                      "@changeset": 135237602,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9837946,
                        49.6732827
                      ]
                    },
                    "id": "node/4976457127"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457128",
                      "addr:unit": "1600",
                      "brand": "Dollarama",
                      "brand:wikidata": "Q3033947",
                      "brand:wikipedia": "en:Dollarama",
                      "name": "Dollarama",
                      "phone": "+1-250-331-9534",
                      "shop": "variety_store",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 4,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9841475,
                        49.6740542
                      ]
                    },
                    "id": "node/4976457128"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457352",
                      "addr:unit": "1310",
                      "brand": "Bell",
                      "brand:wikidata": "Q2894594",
                      "brand:wikipedia": "en:Bell Mobility",
                      "name": "Bell",
                      "phone": "+1-250-871-8280",
                      "shop": "mobile_phone",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 4,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9840572,
                        49.6735767
                      ]
                    },
                    "id": "node/4976457352"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457353",
                      "addr:unit": "1520",
                      "brand": "Northern Reflections",
                      "brand:wikidata": "Q65947797",
                      "name": "Northern Reflections",
                      "phone": "+1-250-334-9950",
                      "shop": "clothes",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.98331,
                        49.6733167
                      ]
                    },
                    "id": "node/4976457353"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/4976457355",
                      "addr:unit": "1180",
                      "brand": "Bootlegger",
                      "brand:wikidata": "Q65947984",
                      "clothes": "women",
                      "name": "Bootlegger",
                      "phone": "+1-250-334-2911",
                      "shop": "clothes",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.983693,
                        49.673188
                      ]
                    },
                    "id": "node/4976457355"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5003920887",
                      "addr:unit": "3",
                      "name": "World Community Coffee",
                      "phone": "+1-250-897-0525",
                      "shop": "coffee",
                      "@timestamp": "2019-06-28T20:28:51Z",
                      "@version": 3,
                      "@changeset": 71721257,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9971632,
                        49.6706336
                      ]
                    },
                    "id": "node/5003920887"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5003920888",
                      "addr:unit": "B",
                      "name": "Motif Music Studios",
                      "phone": "+1-250-792-3065",
                      "shop": "musical_instrument",
                      "studio": "music",
                      "website": "https://www.motifmusicstudios.com/",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.997945,
                        49.671181
                      ]
                    },
                    "id": "node/5003920888"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5003920889",
                      "addr:unit": "B",
                      "name": "Speedy Printing Centres",
                      "phone": "+1-250-338-4252",
                      "shop": "copyshop",
                      "@timestamp": "2018-06-20T15:12:51Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.997825,
                        49.6697923
                      ]
                    },
                    "id": "node/5003920889"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5003921021",
                      "addr:unit": "F",
                      "name": "Tin Town Barber Shop",
                      "phone": "+1-250-871-5288",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:12:51Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9981383,
                        49.6701429
                      ]
                    },
                    "id": "node/5003921021"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5005990360",
                      "addr:unit": "G",
                      "name": "Mosaic Vision Care",
                      "phone": "+1-250-334-4512",
                      "shop": "optician",
                      "@timestamp": "2018-06-20T15:12:51Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0021181,
                        49.6898769
                      ]
                    },
                    "id": "node/5005990360"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5005992765",
                      "addr:unit": "D",
                      "name": "Braidwood Massage Therapy",
                      "phone": "+1-250-338-8556",
                      "shop": "massage",
                      "@timestamp": "2018-06-20T15:12:51Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0022866,
                        49.6898314
                      ]
                    },
                    "id": "node/5005992765"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5008680565",
                      "addr:unit": "11",
                      "branch": "Thrift Store",
                      "brand": "The Salvation Army",
                      "brand:wikidata": "Q188307",
                      "name": "The Salvation Army",
                      "phone": "+1-250-338-8151",
                      "shop": "charity",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9806047,
                        49.67019
                      ]
                    },
                    "id": "node/5008680565"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5025338088",
                      "addr:unit": "1320",
                      "name": "Cali Nails",
                      "phone": "+1-250-334-4252",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:12:52Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9841344,
                        49.6736428
                      ]
                    },
                    "id": "node/5025338088"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5025338558",
                      "addr:unit": "1280",
                      "name": "Eclipse",
                      "phone": "+1-250-871-8447",
                      "shop": "clothes",
                      "@timestamp": "2018-06-20T15:12:53Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9839925,
                        49.673514
                      ]
                    },
                    "id": "node/5025338558"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5031234280",
                      "addr:unit": "1002A",
                      "name": "Liquor Plus",
                      "phone": "+1-250-871-3935",
                      "shop": "alcohol",
                      "@timestamp": "2022-07-10T15:13:00Z",
                      "@version": 3,
                      "@changeset": 123436288,
                      "@user": "Anton Lavrov",
                      "@uid": 623324
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9847335,
                        49.6746459
                      ]
                    },
                    "id": "node/5031234280"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5031234281",
                      "addr:unit": "1580",
                      "brand": "Bentley",
                      "brand:wikidata": "Q65947700",
                      "name": "Bentley",
                      "phone": "+1-250-334-4252",
                      "shop": "bag",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.984014,
                        49.6739412
                      ]
                    },
                    "id": "node/5031234281"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5044179597",
                      "addr:unit": "102",
                      "name": "AnMarcos Furniture & Mattresses",
                      "phone": "+1-250-871-1798",
                      "shop": "furniture",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9974736,
                        49.6882517
                      ]
                    },
                    "id": "node/5044179597"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5052759836",
                      "addr:unit": "A",
                      "name": "Sure Copy",
                      "phone": "+1-250-334-2836",
                      "shop": "copyshop",
                      "@timestamp": "2018-06-20T15:12:56Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9937442,
                        49.6869821
                      ]
                    },
                    "id": "node/5052759836"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5065329123",
                      "addr:unit": "C",
                      "name": "The Hair Chix",
                      "phone": "+1-250-871-1997",
                      "shop": "hairdresser",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0025737,
                        49.6894599
                      ]
                    },
                    "id": "node/5065329123"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5065329129",
                      "addr:unit": "1",
                      "name": "Ono Work & Safety",
                      "phone": "+1-250-703-0633",
                      "shop": "clothes",
                      "@timestamp": "2018-06-20T15:12:57Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9804764,
                        49.6712884
                      ]
                    },
                    "id": "node/5065329129"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5065329130",
                      "addr:unit": "B",
                      "name": "Aqua Salon",
                      "phone": "+1-250-338-7342",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:12:57Z",
                      "@version": 3,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9813046,
                        49.6715387
                      ]
                    },
                    "id": "node/5065329130"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5065336842",
                      "addr:unit": "2",
                      "name": "Industrial Plastics & Paints",
                      "phone": "+1-250-334-2886",
                      "shop": "paint",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9802299,
                        49.6708477
                      ]
                    },
                    "id": "node/5065336842"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5070467629",
                      "addr:unit": "12",
                      "name": "Cuts \'n\' Curls",
                      "phone": "+1-250-334-0500",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:12:58Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9802266,
                        49.669704
                      ]
                    },
                    "id": "node/5070467629"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5085123777",
                      "addr:unit": "B",
                      "name": "Performance Products",
                      "phone": "+1-250-338-6441",
                      "shop": "car_parts",
                      "@timestamp": "2019-04-24T01:35:17Z",
                      "@version": 3,
                      "@changeset": 69508531,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9775355,
                        49.6690649
                      ]
                    },
                    "id": "node/5085123777"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5218898221",
                      "addr:unit": "1480",
                      "brand": "Ardene",
                      "brand:wikidata": "Q2860764",
                      "brand:wikipedia": "en:Ardene",
                      "name": "Ardene",
                      "phone": "+1-877-606-4233",
                      "shop": "clothes",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 4,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9835602,
                        49.6735166
                      ]
                    },
                    "id": "node/5218898221"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5237743184",
                      "addr:unit": "102",
                      "clothes": "men",
                      "name": "Walker 24 Menswear",
                      "opening_hours": "Sa 10:00-16:00",
                      "phone": "+1 250 871-2415",
                      "shop": "clothes",
                      "website": "https://www.walker24menswear.com/",
                      "@timestamp": "2020-11-16T09:04:28Z",
                      "@version": 3,
                      "@changeset": 94190396,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.966689,
                        49.7117565
                      ]
                    },
                    "id": "node/5237743184"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5248222760",
                      "addr:unit": "A",
                      "name": "Along the Way Spa",
                      "phone": "+1-250-331-9448",
                      "shop": "massage",
                      "@timestamp": "2019-10-07T16:24:26Z",
                      "@version": 7,
                      "@changeset": 75385288,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9998705,
                        49.689963
                      ]
                    },
                    "id": "node/5248222760"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5251251080",
                      "addr:unit": "6",
                      "name": "Podlings",
                      "phone": "+1-250-334-3483",
                      "shop": "clothes",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 3,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0015736,
                        49.6905902
                      ]
                    },
                    "id": "node/5251251080"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5251251853",
                      "addr:unit": "8",
                      "name": "Cinnamon Salon",
                      "phone": "+1-250-703-0077",
                      "shop": "hairdresser",
                      "@timestamp": "2019-06-12T03:28:45Z",
                      "@version": 3,
                      "@changeset": 71163515,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0019328,
                        49.6906256
                      ]
                    },
                    "id": "node/5251251853"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5292438327",
                      "addr:unit": "405",
                      "name": "Warehouse One",
                      "phone": "+1-250-703-2270",
                      "shop": "clothes",
                      "@timestamp": "2018-06-20T15:13:12Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9634965,
                        49.7093007
                      ]
                    },
                    "id": "node/5292438327"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5292438328",
                      "addr:unit": "401",
                      "brand": "Rocky Mountain Chocolate Factory",
                      "brand:wikidata": "Q7355878",
                      "brand:wikipedia": "en:Rocky Mountain Chocolate Factory",
                      "name": "Rocky Mountain Chocolate Factory",
                      "phone": "+1-250-871-3933",
                      "shop": "confectionery",
                      "@timestamp": "2019-09-17T18:04:41Z",
                      "@version": 4,
                      "@changeset": 74594014,
                      "@user": "Rps333",
                      "@uid": 596047
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9632916,
                        49.7091372
                      ]
                    },
                    "id": "node/5292438328"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5300108102",
                      "addr:unit": "D",
                      "name": "This \'n\' That",
                      "phone": "+1-250-871-8682",
                      "shop": "second_hand",
                      "@timestamp": "2018-06-20T15:13:12Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9935674,
                        49.6862758
                      ]
                    },
                    "id": "node/5300108102"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5302552843",
                      "addr:unit": "3",
                      "brand": "Sport Chek",
                      "brand:wikidata": "Q3494037",
                      "brand:wikipedia": "en:Sport Chek",
                      "name": "Sport Chek",
                      "phone": "+1-250-334-4676",
                      "shop": "sports",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 3,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9783337,
                        49.6672459
                      ]
                    },
                    "id": "node/5302552843"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5322770748",
                      "addr:unit": "109",
                      "name": "Endless Skin Rejuvenation",
                      "phone": "+1-250-897-2600",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:13:13Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9384362,
                        49.688065
                      ]
                    },
                    "id": "node/5322770748"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5322770929",
                      "addr:unit": "106",
                      "name": "Chisel Hair Studio",
                      "phone": "+1-250-941-0888",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:13:13Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9381472,
                        49.6880647
                      ]
                    },
                    "id": "node/5322770929"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5322770930",
                      "addr:unit": "112",
                      "name": "Gear Out Here",
                      "phone": "+1-250-941-1129",
                      "shop": "outdoor",
                      "@timestamp": "2018-06-20T15:13:13Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.938412,
                        49.6881866
                      ]
                    },
                    "id": "node/5322770930"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5468069297",
                      "addr:unit": "B",
                      "name": "Zen Moment Kombucha",
                      "phone": "+1-250-465-2120",
                      "shop": "tea",
                      "website": "https://www.zenmomentkombucha.ca/",
                      "@timestamp": "2019-03-22T02:44:38Z",
                      "@version": 3,
                      "@changeset": 68394653,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.999136,
                        49.6818069
                      ]
                    },
                    "id": "node/5468069297"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5468069701",
                      "addr:unit": "D",
                      "name": "Body Well",
                      "phone": "+1-250-650-9272",
                      "shop": "massage",
                      "website": "https://www.getbodywell.com/",
                      "@timestamp": "2018-06-20T15:13:19Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9991022,
                        49.6817757
                      ]
                    },
                    "id": "node/5468069701"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5489977262",
                      "addr:housenumber": "1351-2",
                      "addr:street": "McPhee Ave",
                      "addr:unit": "2",
                      "name": "DN Auto Corp.",
                      "opening_hours": "Mo-Fr 08:00-17:30",
                      "phone": "+1-250-871-5882",
                      "shop": "car_repair",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0010653,
                        49.6826916
                      ]
                    },
                    "id": "node/5489977262"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5568252797",
                      "name": "Care Auto",
                      "phone": "+1-250-703-0303",
                      "shop": "car_repair",
                      "@timestamp": "2018-06-20T15:13:21Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9819921,
                        49.6778326
                      ]
                    },
                    "id": "node/5568252797"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5596839722",
                      "addr:unit": "6",
                      "name": "Custom Hair Lounge",
                      "phone": "+1-250-871-8009",
                      "shop": "hairdresser",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 3,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9929306,
                        49.684143
                      ]
                    },
                    "id": "node/5596839722"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5603422608",
                      "addr:unit": "5A",
                      "name": "Play N Trade Video Games",
                      "phone": "+1-250-871-7529",
                      "shop": "video_games",
                      "@timestamp": "2018-06-20T15:13:26Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9842802,
                        49.6769448
                      ]
                    },
                    "id": "node/5603422608"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5606083152",
                      "addr:unit": "111",
                      "name": "Island CPAP",
                      "phone": "+1-250-897-5296",
                      "shop": "medical_supply",
                      "@timestamp": "2018-06-20T15:13:26Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9905099,
                        49.6922918
                      ]
                    },
                    "id": "node/5606083152"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690444",
                      "addr:unit": "C",
                      "name": "Nootka Marine Adventures",
                      "phone": "+1-877-337-5464",
                      "shop": "travel_agency",
                      "@timestamp": "2018-06-20T15:13:26Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.996769,
                        49.6914373
                      ]
                    },
                    "id": "node/5612690444"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690445",
                      "addr:housenumber": "216",
                      "addr:street": "5th Street",
                      "name": "Luna Aromatherapy Massage",
                      "shop": "massage",
                      "@timestamp": "2018-05-11T23:53:20Z",
                      "@version": 1,
                      "@changeset": 58892390,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9974203,
                        49.6911794
                      ]
                    },
                    "id": "node/5612690445"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690446",
                      "addr:housenumber": "222",
                      "addr:street": "5th Street",
                      "name": "Spa Roché",
                      "phone": "+1-250-871-5558",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:13:26Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9974646,
                        49.6911646
                      ]
                    },
                    "id": "node/5612690446"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690453",
                      "addr:housenumber": "314",
                      "addr:street": "5th Street",
                      "name": "Finders Keep Hers",
                      "opening_hours": "Mo-Sa 10:00-18:00; Su 11:00-17:00",
                      "phone": "+1-250-871-5337",
                      "shop": "clothes",
                      "website": "https://finderskeephers.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 6,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.998796,
                        49.6908089
                      ]
                    },
                    "id": "node/5612690453"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690454",
                      "addr:housenumber": "342",
                      "addr:street": "5th Street",
                      "name": "The Curious Cat - Unique Gifts On 5th",
                      "phone": "+1-250-897-0107",
                      "shop": "gift",
                      "website": "http://www.thecuriouscat.ca/",
                      "@timestamp": "2018-06-20T15:13:27Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9992093,
                        49.6906632
                      ]
                    },
                    "id": "node/5612690454"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690457",
                      "addr:unit": "201",
                      "name": "Packables Travel Solutions",
                      "phone": "+1-250-703-2141",
                      "shop": "clothes",
                      "website": "http://www.packables.org/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99895,
                        49.6909634
                      ]
                    },
                    "id": "node/5612690457"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690459",
                      "addr:unit": "202",
                      "name": "Ivory & Grey By Home & Garden Gate",
                      "shop": "clothes",
                      "@timestamp": "2018-05-11T23:53:21Z",
                      "@version": 1,
                      "@changeset": 58892390,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9988781,
                        49.6909885
                      ]
                    },
                    "id": "node/5612690459"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5612690461",
                      "addr:unit": "101",
                      "name": "A Gemstone Hair Studio",
                      "phone": "+1-250-218-1126",
                      "shop": "hairdresser",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9990108,
                        49.6911583
                      ]
                    },
                    "id": "node/5612690461"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338559",
                      "addr:unit": "1",
                      "name": "Black Thumb",
                      "phone": "+1-250-218-5242",
                      "shop": "interior_decoration",
                      "website": "https://blackthumbdecor.com/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0002725,
                        49.6914233
                      ]
                    },
                    "id": "node/5614338559"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338560",
                      "addr:unit": "101",
                      "name": "Arbutus Therapeutic Collective",
                      "phone": "+1 250 702-7078",
                      "shop": "massage",
                      "website": "https://www.arbutustherapeuticcollective.com/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 6,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0006471,
                        49.6914099
                      ]
                    },
                    "id": "node/5614338560"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338562",
                      "addr:unit": "B",
                      "name": "Island Tranquility Therapeutic Massage",
                      "phone": "+1-250-897-2906",
                      "shop": "massage",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0010339,
                        49.6912725
                      ]
                    },
                    "id": "node/5614338562"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338566",
                      "addr:unit": "D",
                      "name": "Lucida Beauty Studio",
                      "phone": "+1-250-703-3392",
                      "shop": "beauty",
                      "website": "https://lucidabeautystudio.com/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0011132,
                        49.6912988
                      ]
                    },
                    "id": "node/5614338566"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338582",
                      "addr:unit": "103",
                      "name": "Boardwalk Hair",
                      "phone": "+1-250-897-4502",
                      "shop": "hairdresser",
                      "@timestamp": "2018-06-20T15:13:29Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99769,
                        49.69171
                      ]
                    },
                    "id": "node/5614338582"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338583",
                      "addr:unit": "102",
                      "name": "Charisma\'s Body Essentials",
                      "phone": "+1-250-871-3888",
                      "shop": "massage",
                      "@timestamp": "2018-06-20T15:13:29Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99761,
                        49.69168
                      ]
                    },
                    "id": "node/5614338583"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5614338584",
                      "addr:housenumber": "475",
                      "addr:street": "Cliffe Avenue",
                      "name": "Sacred Earth Metaphysical",
                      "phone": "+1-250-871-8222",
                      "shop": "gift",
                      "website": "http://www.sacredearthmetaphysical.com/",
                      "@timestamp": "2018-06-20T15:13:29Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99758,
                        49.69164
                      ]
                    },
                    "id": "node/5614338584"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5615904360",
                      "addr:housenumber": "2801",
                      "addr:street": "Cliffe Avenue",
                      "brand": "Canadian Tire",
                      "brand:wikidata": "Q1032400",
                      "brand:wikipedia": "en:Canadian Tire",
                      "name": "Canadian Tire",
                      "phone": "+1-250-338-0101",
                      "shop": "department_store",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 4,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9827392,
                        49.6730113
                      ]
                    },
                    "id": "node/5615904360"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5618505450",
                      "addr:unit": "A",
                      "name": "K&V Nails",
                      "phone": "+1-250-871-0046",
                      "shop": "beauty",
                      "@timestamp": "2018-06-20T15:13:31Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9984328,
                        49.6901765
                      ]
                    },
                    "id": "node/5618505450"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5618505452",
                      "addr:unit": "C2",
                      "name": "Functional Massage Therapy",
                      "phone": "+1-250-338-4515",
                      "shop": "massage",
                      "@timestamp": "2018-06-20T15:13:31Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.99863,
                        49.6901079
                      ]
                    },
                    "id": "node/5618505452"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5618889293",
                      "addr:housenumber": "224",
                      "addr:street": "6th Street",
                      "addr:unit": "4",
                      "name": "Hairpins Boutique Salon",
                      "phone": "+1-250-338-7467",
                      "shop": "hairdresser",
                      "website": "https://www.hairpins.ca/",
                      "@timestamp": "2018-06-20T15:13:32Z",
                      "@version": 2,
                      "@changeset": 60014379,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9971253,
                        49.6904003
                      ]
                    },
                    "id": "node/5618889293"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5694405731",
                      "addr:unit": "220",
                      "name": "The Industry Salon",
                      "phone": "+1-250-334-8266",
                      "shop": "hairdresser",
                      "website": "http://www.theindustrysalon.com/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.988656,
                        49.6961916
                      ]
                    },
                    "id": "node/5694405731"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5747852322",
                      "addr:unit": "A",
                      "name": "Tastefully Local",
                      "phone": "+1-250-702-1937",
                      "shop": "deli",
                      "@timestamp": "2018-10-26T20:30:59Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9642534,
                        49.678785
                      ]
                    },
                    "id": "node/5747852322"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5762613168",
                      "addr:housenumber": "3326",
                      "addr:street": "Lake Trail Road",
                      "name": "Rosie\'s Hairstyling",
                      "phone": "+1-250-897-1910",
                      "shop": "hairdresser",
                      "@timestamp": "2018-10-26T20:30:59Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0274233,
                        49.6706183
                      ]
                    },
                    "id": "node/5762613168"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5762614132",
                      "addr:housenumber": "299",
                      "addr:street": "Powerhouse Road",
                      "name": "Mike\'s Garage",
                      "phone": "+1-250-650-9988",
                      "shop": "car_repair",
                      "website": "https://mikesgarage.ca/",
                      "@timestamp": "2022-05-26T23:36:40Z",
                      "@version": 3,
                      "@changeset": 121549423,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -125.0285505,
                        49.6780592
                      ]
                    },
                    "id": "node/5762614132"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5821287890",
                      "addr:unit": "A",
                      "name": "Salon Pure",
                      "phone": "+1-250-871-5515",
                      "shop": "hairdresser",
                      "@timestamp": "2018-10-26T20:31:02Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9386913,
                        49.6759534
                      ]
                    },
                    "id": "node/5821287890"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5880156926",
                      "addr:unit": "4",
                      "name": "Courtenay Pet Centre",
                      "phone": "+1-250-331-9000",
                      "shop": "pet",
                      "@timestamp": "2018-10-26T20:31:06Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9813504,
                        49.6749116
                      ]
                    },
                    "id": "node/5880156926"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5947817186",
                      "addr:unit": "7",
                      "name": "ACS Computer Solutions",
                      "phone": "+1-250-334-2000",
                      "shop": "computer",
                      "website": "https://www.acscomputersolutions.com/",
                      "@timestamp": "2018-10-26T20:31:08Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9858882,
                        49.673765
                      ]
                    },
                    "id": "node/5947817186"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5947892548",
                      "addr:unit": "6",
                      "name": "Woodform Interiors",
                      "phone": "+1-250-334-9339",
                      "shop": "interior_decoration",
                      "website": "http://woodforminteriors.com/",
                      "@timestamp": "2018-10-26T20:31:08Z",
                      "@version": 2,
                      "@changeset": 63913893,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9858359,
                        49.6737173
                      ]
                    },
                    "id": "node/5947892548"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/5965659183",
                      "addr:unit": "A",
                      "name": "LTC Automotive",
                      "phone": "+1-250-703-2215",
                      "shop": "car_repair",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9887921,
                        49.6731183
                      ]
                    },
                    "id": "node/5965659183"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6119906249",
                      "fixme": "Need phone number",
                      "name": "Old School Vintage Gifts",
                      "shop": "gift",
                      "unit": "109B",
                      "@timestamp": "2019-07-09T00:06:07Z",
                      "@version": 2,
                      "@changeset": 72032806,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.983235,
                        49.6782508
                      ]
                    },
                    "id": "node/6119906249"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6119906310",
                      "addr:unit": "1100A",
                      "brand": "Rogers",
                      "brand:wikidata": "Q3439663",
                      "brand:wikipedia": "en:Rogers Wireless",
                      "fax": "+1 250 703-2015",
                      "name": "Rogers",
                      "opening_hours": "10:00-18:00",
                      "phone": "+1 250 703-2008",
                      "shop": "mobile_phone",
                      "website": "https://www.rogers.com/stores/courtenay/driftwood-mall",
                      "@timestamp": "2021-02-06T05:38:32Z",
                      "@version": 3,
                      "@changeset": 98800894,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9834026,
                        49.6729294
                      ]
                    },
                    "id": "node/6119906310"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6171761045",
                      "addr:unit": "7",
                      "name": "Bumper Doctor",
                      "phone": "+1-250-465-2478",
                      "shop": "car_repair",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 2,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9811936,
                        49.6687997
                      ]
                    },
                    "id": "node/6171761045"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6171761046",
                      "addr:unit": "6",
                      "name": "Asco Automotive Sales",
                      "phone": "+1-250-334-8867",
                      "shop": "car_parts",
                      "website": "https://www.automotivesalesco.com/",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 2,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9811439,
                        49.6687572
                      ]
                    },
                    "id": "node/6171761046"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6171761048",
                      "addr:unit": "3",
                      "name": "Murphy Beds By Inspired Spaces",
                      "phone": "+1-250-871-6261",
                      "shop": "bed",
                      "website": "https://www.inspiredspacesandmore.com/",
                      "@timestamp": "2022-05-26T23:35:00Z",
                      "@version": 3,
                      "@changeset": 121549378,
                      "@user": "b-jazz-bot",
                      "@uid": 9451067
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9809486,
                        49.6686758
                      ]
                    },
                    "id": "node/6171761048"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6222163385",
                      "addr:unit": "A",
                      "name": "SmartEyes!",
                      "phone": "+1-250-871-8770",
                      "shop": "optician",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 2,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9964896,
                        49.688672
                      ]
                    },
                    "id": "node/6222163385"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6240761025",
                      "addr:unit": "15",
                      "brand": "Telus",
                      "brand:wikidata": "Q165858",
                      "brand:wikipedia": "en:Telus",
                      "name": "Telus",
                      "phone": "+1-250-334-4664",
                      "shop": "mobile_phone",
                      "@timestamp": "2022-01-06T05:11:05Z",
                      "@version": 2,
                      "@changeset": 115820930,
                      "@user": "lizzyd710",
                      "@uid": 11896050
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9924446,
                        49.6837708
                      ]
                    },
                    "id": "node/6240761025"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6415418939",
                      "addr:unit": "A",
                      "name": "L&K Automotive Service",
                      "phone": "+1-250-871-8840",
                      "shop": "car_repair",
                      "@timestamp": "2019-07-17T21:24:14Z",
                      "@version": 2,
                      "@changeset": 72365674,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9815272,
                        49.6686363
                      ]
                    },
                    "id": "node/6415418939"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6415541199",
                      "addr:unit": "206",
                      "name": "Survival & Outdoor Specialty Gear",
                      "opening_hours": "Tu,We,Sa 10:00-17:30; Th,Fr 11:30-19:00",
                      "phone": "+1-778-225-0500",
                      "shop": "outdoor",
                      "website": "https://www.sosgear.ca/",
                      "@timestamp": "2019-09-02T22:08:29Z",
                      "@version": 4,
                      "@changeset": 74014499,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9863064,
                        49.6810682
                      ]
                    },
                    "id": "node/6415541199"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6417067062",
                      "addr:housenumber": "754B",
                      "addr:street": "29th Street",
                      "name": "Kean Auto Services",
                      "phone": "+1-250-897-3643",
                      "shop": "car_repair",
                      "website": "https://www.keanauto.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 3,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.982661,
                        49.669762
                      ]
                    },
                    "id": "node/6417067062"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6450416389",
                      "name": "Liquor Express",
                      "shop": "alcohol",
                      "@timestamp": "2019-05-05T18:30:08Z",
                      "@version": 1,
                      "@changeset": 69912411,
                      "@user": "HiRes",
                      "@uid": 8312598
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9628317,
                        49.6791112
                      ]
                    },
                    "id": "node/6450416389"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6552109320",
                      "addr:housenumber": "367",
                      "addr:street": "6th Street",
                      "name": "Too Good To Be Threw",
                      "operator": "Comox Valley Transition Society",
                      "phone": "+1-250-338-0601",
                      "shop": "second_hand",
                      "website": "https://cvts.ca/thrift-store/",
                      "@timestamp": "2023-01-01T19:22:21Z",
                      "@version": 2,
                      "@changeset": 130760790,
                      "@user": "Greego",
                      "@uid": 18143029
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.999163,
                        49.6899162
                      ]
                    },
                    "id": "node/6552109320"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6587723707",
                      "addr:unit": "1002B",
                      "brand": "COBS Bread",
                      "brand:wikidata": "Q4849261",
                      "brand:wikipedia": "en:Bakers Delight",
                      "name": "COBS Bread",
                      "phone": "+1-250-338-7116",
                      "shop": "bakery",
                      "website": "https://www.cobsbread.com/local-bakery/driftwood-mall/",
                      "@timestamp": "2019-08-24T15:10:28Z",
                      "@version": 3,
                      "@changeset": 73698256,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9846812,
                        49.6740644
                      ]
                    },
                    "id": "node/6587723707"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6597693398",
                      "addr:unit": "A",
                      "name": "Boba Island",
                      "opening_hours": "Tu-Th,Su 11:30-21:00; Fr-Sa 11:30-22:00",
                      "phone": "+1-250-871-8188",
                      "shop": "tea",
                      "website": "https://bobaisland.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 4,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9923365,
                        49.6945067
                      ]
                    },
                    "id": "node/6597693398"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6813563434",
                      "addr:unit": "206",
                      "name": "Mosaic Optical Gallery & Optometry",
                      "opening_hours": "Mo-We,Fr 08:00-18:00; Th 08:00-19:00; Sa 09:00-16:00",
                      "phone": "+1-250-338-1665",
                      "shop": "optician",
                      "@timestamp": "2021-11-15T19:13:19Z",
                      "@version": 4,
                      "@changeset": 113819451,
                      "@user": "Timothy Smith",
                      "@uid": 115918
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.962862,
                        49.7095314
                      ]
                    },
                    "id": "node/6813563434"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/6813603288",
                      "addr:unit": "207A",
                      "name": "Suzanne\'s & Jenny\'s",
                      "phone": "+1-250-334-2533",
                      "shop": "clothes",
                      "website": "https://suzannes.biz/",
                      "@timestamp": "2019-09-23T15:35:32Z",
                      "@version": 2,
                      "@changeset": 74816271,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9628655,
                        49.7094601
                      ]
                    },
                    "id": "node/6813603288"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/7141942064",
                      "addr:unit": "111",
                      "name": "Carosel Fashions & Treasures",
                      "phone": "+1-250-871-0411",
                      "shop": "clothes",
                      "@timestamp": "2020-06-30T14:49:03Z",
                      "@version": 2,
                      "@changeset": 87354448,
                      "@user": "Matthew Darwin",
                      "@uid": 5633991
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.997524,
                        49.6905621
                      ]
                    },
                    "id": "node/7141942064"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/7295256171",
                      "name": "Gladstone Filling Station",
                      "shop": "alcohol",
                      "@timestamp": "2020-03-14T21:42:29Z",
                      "@version": 1,
                      "@changeset": 82204595,
                      "@user": "fmarier",
                      "@uid": 24555
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9980145,
                        49.6918453
                      ]
                    },
                    "id": "node/7295256171"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/7295333205",
                      "addr:housenumber": "2040",
                      "addr:street": "Guthrie Road",
                      "amenity": "pub",
                      "email": "info@landandseabrewing.ca",
                      "name": "Land & Sea Tasting Room",
                      "name:en": "Land & Sea Brewing Co.",
                      "opening_hours": "Su-We 12:00-21:00; Th-Sa 12:00-22:00",
                      "phone": "+1-250-941-5577",
                      "shop": "alcohol",
                      "website": "https://www.landandseabrewing.ca/",
                      "@timestamp": "2023-01-08T02:31:54Z",
                      "@version": 2,
                      "@changeset": 131001527,
                      "@user": "StarWagon",
                      "@uid": 14517845
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9369642,
                        49.6880082
                      ]
                    },
                    "id": "node/7295333205"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/8447999074",
                      "addr:unit": "2",
                      "name": "Comox Valley Hydraulic & Industrial Supply",
                      "phone": "+1 250 338-6001",
                      "shop": "trade",
                      "trade": "industrial_supplies",
                      "website": "https://cvhydraulic.ca/",
                      "@timestamp": "2021-02-23T05:21:25Z",
                      "@version": 1,
                      "@changeset": 99789797,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9978361,
                        49.6691971
                      ]
                    },
                    "id": "node/8447999074"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/8447999075",
                      "addr:unit": "4",
                      "name": "Honey Grove Artisan Bakery",
                      "phone": "+1 250 898-3304",
                      "shop": "bakery",
                      "website": "https://www.honeygrovebakery.ca/",
                      "@timestamp": "2021-02-23T05:21:25Z",
                      "@version": 1,
                      "@changeset": 99789797,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9978763,
                        49.6689593
                      ]
                    },
                    "id": "node/8447999075"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/8447999078",
                      "addr:unit": "215",
                      "name": "Progressive Growth",
                      "phone": "+1 250 334-8425",
                      "shop": "garden_centre",
                      "website": "https://progressive-growth.com/",
                      "@timestamp": "2021-02-23T05:21:25Z",
                      "@version": 1,
                      "@changeset": 99789797,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9973854,
                        49.6689055
                      ]
                    },
                    "id": "node/8447999078"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/8508476999",
                      "addr:housenumber": "2967",
                      "addr:street": "Kilpatrick Avenue",
                      "addr:unit": "A",
                      "name": "Andre\'s Electronic Experts",
                      "opening_hours": "Mo-Fr 09:30-17:30; Sa, Su 09:30-17:00",
                      "phone": "+1 250 338-0333",
                      "shop": "electronics",
                      "website": "https://www.andreselectronicexperts.com/",
                      "@timestamp": "2021-03-11T23:36:16Z",
                      "@version": 1,
                      "@changeset": 100868594,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9814893,
                        49.6698285
                      ]
                    },
                    "id": "node/8508476999"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/9739262217",
                      "addr:unit": "13",
                      "name": "The Denman Island Tea Company",
                      "opening_hours": "Mo-Fr 10:00-16:00; Sa 11:00-15:00",
                      "phone": "+1 250 334-1043",
                      "shop": "tea",
                      "website": "https://denmantea.ca/",
                      "@timestamp": "2022-10-04T17:48:49Z",
                      "@version": 2,
                      "@changeset": 127008425,
                      "@user": "feathered_ouul",
                      "@uid": 16643939
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9802768,
                        49.6698243
                      ]
                    },
                    "id": "node/9739262217"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/10141181255",
                      "brand": "Canadian Tire",
                      "brand:wikidata": "Q1032400",
                      "name": "Canadian Tire",
                      "shop": "department_store",
                      "@timestamp": "2022-10-30T19:46:28Z",
                      "@version": 1,
                      "@changeset": 128261031,
                      "@user": "Delgwa",
                      "@uid": 17535484
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9827163,
                        49.67255
                      ]
                    },
                    "id": "node/10141181255"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/10299168960",
                      "brand": "Fido",
                      "brand:wikidata": "Q3071471",
                      "name": "Fido",
                      "shop": "mobile_phone",
                      "@timestamp": "2023-01-01T19:22:21Z",
                      "@version": 1,
                      "@changeset": 130760790,
                      "@user": "Greego",
                      "@uid": 18143029
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.983454,
                        49.6729665
                      ]
                    },
                    "id": "node/10299168960"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/10299168961",
                      "brand": "Shaw Communications",
                      "brand:wikidata": "Q1516849",
                      "name": "Shaw Communications",
                      "shop": "mobile_phone",
                      "@timestamp": "2023-01-01T19:22:21Z",
                      "@version": 1,
                      "@changeset": 130760790,
                      "@user": "Greego",
                      "@uid": 18143029
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9834989,
                        49.6730112
                      ]
                    },
                    "id": "node/10299168961"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/10758121854",
                      "addr:housenumber": "815B",
                      "addr:street": "Cliffe Avenue",
                      "name": "Aviator Barbershop",
                      "phone": "+1 250 848-3513",
                      "shop": "hairdresser",
                      "website": "https://www.aviatorbarber.co/",
                      "@timestamp": "2023-03-24T05:21:28Z",
                      "@version": 1,
                      "@changeset": 134048771,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.9962777,
                        49.6893011
                      ]
                    },
                    "id": "node/10758121854"
                  },
                  {
                    "type": "Feature",
                    "properties": {
                      "@id": "node/10832195884",
                      "addr:unit": "1240",
                      "name": "MobileQ",
                      "phone": "+1 250 871-3395",
                      "shop": "mobile_phone",
                      "@timestamp": "2023-04-22T17:39:57Z",
                      "@version": 1,
                      "@changeset": 135237602,
                      "@user": "DENelson83",
                      "@uid": 14512
                    },
                    "geometry": {
                      "type": "Point",
                      "coordinates": [
                        -124.983908,
                        49.6734356
                      ]
                    },
                    "id": "node/10832195884"
                  }
                ]
              }
            '
        ]);
    }
}
