<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application"s database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        //tipo-combustibles

        $fuel_types = ["Gasolina", "Diesel", "Electrico"];

        foreach ($fuel_types as $type) {
            DB::table("fuel_types")->insert([
                "name" => $type
            ]);
        }


        $vehicle_types = [
            [
                "name" => "ECONOMICO AUT.",
                "code" => "ECAR"
            ],
            [
                "name" => "COMPACTO AUT.",
                "code" => "CCAR"
            ],
            [
                "name" => "MID SIZE AUT.",
                "code" => "ICAR"
            ],
            [
                "name" => "ECONOMICO SUV AUT.",
                "code" => "EFAR"
            ],
            [
                "name" => "COMPACTO SUV AUT.",
                "code" => "CFAR"
            ],
            [
                "name" => "MID SIZE 4x4 AUT.",
                "code" => "IFAR"
            ],
            [
                "name" => "SPECIAL SUV AUT.",
                "code" => "XFAR"
            ],
            [
                "name" => "STANDARD 4X4 AUT.",
                "code" => "SFAR"
            ],
            [
                "name" => "COMPACT 4X4 AUT (4 PUERTAS)",
                "code" => "CJAR"
            ],
            [
                "name" => "STANDARD ELITE 4X4 AUT.",
                "code" => "SJAR"
            ],
            [
                "name" => "FULL SIZE PICK UP",
                "code" => "FPAR"
            ],
            [
                "name" => "FULL SIZE 4X4 AUT.",
                "code" => "FFAR"
            ],
            [
                "name" => "PREMIUM 4X4 AUT.",
                "code" => "PFAR"
            ],
            [
                "name" => "FULL SIZE VAN MANUAL",
                "code" => "FVMR"
            ],
            [
                "name" => "FULL SIZE VAN AUTOMATICA",
                "code" => "FVAR"
            ],
            [
                "name" => "FULL SIZE VAN AUTOMATICA 4X4",
                "code" => "FVBR"
            ],
            [
                "name" => "LUXURY SUV AUTOMÁTICA",
                "code" => "LFAR"
            ]
        ];


        foreach ($vehicle_types as $type) {
            DB::table("vehicle_types")->insert([
                "code" => $type["code"],
                "name" => $type["name"]
            ]);
        }


        $vehicles = [
            [
                "code" => "ECAR",
                "name" => "SUZUKI SWIFT"
            ],
            [
                "code" => "CCAR",
                "name" => "TOYOTA YARIS"
            ],
            [
                "code" => "ICAR",
                "name" => "TOYOTA COROLLA"
            ],
            [
                "code" => "EFAR",
                "name" => "TOYOTA YARIS CROSS"
            ],
            [
                "code" => "CFAR",
                "name" => "TOYOTA COROLLA CROSS"
            ],
            [
                "code" => "IFAR",
                "name" => "SUZUKI NEW VITARA"
            ],
            [
                "code" => "XFAR",
                "name" => "TOYOTA RUSH"
            ],
            [
                "code" => "SFAR",
                "name" => "TOYOTA RAV4"
            ],
            [
                "code" => "CJAR",
                "name" => "SUZUKI JIMNY"
            ],
            [
                "code" => "SJAR",
                "name" => "FORD BRONCO"
            ],
            [
                "code" => "SFAR",
                "name" => "TOYOTA HILUX"
            ],
            [
                "code" => "FFAR",
                "name" => "TOYOTA FORTUNER"
            ],
        /*    [
                "code" => "PFAR",
                "name" => "FORD EVEREST"
            ],*/
            [
                "code" => "FVMR",
                "name" => "TOYOTA HIACE"
            ],
            [
                "code" => "FVAR",
                "name" => "TOYOTA HIACE"
            ],
            [
                "code" => "FVBR",
                "name" => "HYUNDAI STARIA"
            ],
         /*   [
                "code" => "LFAR",
                "name" => "FORD EXPEDITION"
            ]*/
        ];

        foreach ($vehicles as $vehicle) {
            DB::table("vehicles")->insert([
                "code" => $vehicle["code"],
                "name" => $vehicle["name"]
            ]);
        }



        $offices = [
            [
                "id"   => "2",
                "name" => "SJO Airport"
            ],
            [
                "id"   => "43",
                "name" => "Pérez Zéledon"
            ],
            [
                "id"   => "6",
                "name" => "Liberia Airport"
            ],
            [
                "id"   => "3",
                "name" => "Paseo Colon"
            ],
            [
                "id"   => "25",
                "name" => "Plaza Víquez"
            ],
            [
                "id"   => "4",
                "name" => "Hotel Irazú"
            ],
            [
                "id"   => "5",
                "name" => "Hotel Wyndham Herradura"
            ],
            [
                "id"   => "30",
                "name" => "Hotel Costa Rica Marriott"
            ],
            [
                "id"   => "24",
                "name" => "Lindora"
            ],
            [
                "id"   => "33",
                "name" => "Cartago"
            ],
            [
                "id"   => "34",
                "name" => "Curridabat"
            ],
            [
                "id"   => "35",
                "name" => "Palmares"
            ],
            [
                "id"   => "12",
                "name" => "La Fortuna"
            ],
            [
                "id"   => "13",
                "name" => "Peñas Blancas"
            ],
            [
                "id"   => "20",
                "name" => "Playas del Coco"
            ],
            [
                "id"   => "23",
                "name" => "Occidental Papagayo"
            ],
            [
                "id"   => "7",
                "name" => "Tamarindo Beach"
            ],
            [
                "id"   => "18",
                "name" => "Brasilito"
            ],
            [
                "id"   => "22",
                "name" => "Nosara"
            ],
            [
                "id"   => "8",
                "name" => "Samara Beach"
            ],
            [
                "id"   => "36",
                "name" => "Hotel Secret"
            ],
            [
                "id"   => "37",
                "name" => "Hotel Hilton Garden Liberia"
            ],
            [
                "id"   => "38",
                "name" => "Hotel Dreams Las Mareas"
            ],
            [
                "id"   => "27",
                "name" => "Flamingo"
            ],
            [
                "id"   => "40",
                "name" => "Hotel JW Marriott Guanacaste"
            ],
            [
                "id"   => "9",
                "name" => "Mal País"
            ],
            [
                "id"   => "10",
                "name" => "Jacó Beach"
            ],
            [
                "id"   => "28",
                "name" => "Marina los Sueños"
            ],
            [
                "id"   => "11",
                "name" => "Quepos"
            ],
            [
                "id"   => "29",
                "name" => "Marina Pez Vela"
            ],
            [
                "id"   => "19",
                "name" => "Dominical"
            ],
            [
                "id"   => "31",
                "name" => "Golfito"
            ],
            [
                "id"   => "15",
                "name" => "Puerto Jimenez"
            ],
            [
                "id"   => "17",
                "name" => "Paso Canoas"
            ],
            [
                "id"   => "21",
                "name" => "Guapiles"
            ],
            [
                "id"   => "32",
                "name" => "Limón"
            ],
            [
                "id"   => "16",
                "name" => "Puerto Viejo, Limón"
            ],
            [
                "id"   => "26",
                "name" => "Uvita"
            ],
            [
                "id"   => "42",
                "name" => "Ciudad Quesada"
            ],
            [
                "id"   => "44",
                "name" => "Puntarenas"
            ],
            [
                "id"   => "45",
                "name" => "Heredia"
            ],
            [
                "id"   => "46",
                "name" => "Liberia Downtown"
            ],
            [
                "id"   => "47",
                "name" => "Nicoya"
            ],

        ];


        foreach ($offices as $office) {
            DB::table("offices")->insert([
                "code" => $office["id"],
                "name" => $office["name"]
            ]);
        }

        $rates = $this->get_rates();

        foreach ($rates as $rates_period) {

            //$rates_period[]= date
            $date = date('d/m/Y', time());


            $new_rate_period = \App\Models\RatesPeriod::create(
                [
                    "name"       => $rates_period["name"],
                    "date_start" => Carbon::createFromFormat('d/m/Y', $rates_period["date_start"])->format('Y-m-d'),
                    "date_end"   => Carbon::createFromFormat('d/m/Y', $rates_period["date_end"])->format('Y-m-d')
                ]
            );
            foreach ($rates_period["vehicle_rates"] as $vehicle_rate) {
                $vehicle_rate["rates_periods_id"] = $new_rate_period->id;

                \App\Models\VehiclesRate::create($vehicle_rate);
            }

        }

        $this->create_users();

    }

    function get_rates()
    {

        return [

            [
                "name"          => "01.11 al 10.11 del 2025",
                "date_start"    => "1/11/2025",
                "date_end"      => "10/11/2025",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "14.00"],
                    ["code" => "CCAR", "price" => "14.00"],
                    ["code" => "ICAR", "price" => "16.00"],
                    ["code" => "EFAR", "price" => "16.00"],
                    ["code" => "CFAR", "price" => "16.00"],
                    ["code" => "IFAR", "price" => "16.00"],
                    ["code" => "XFAR", "price" => "16.00"],
                    ["code" => "SFAR", "price" => "16.00"],
                    ["code" => "SJAR", "price" => "18.00"],
                    ["code" => "FPAR", "price" => "21.00"],
                    ["code" => "FFAR", "price" => "20.00"],
                    ["code" => "PFAR", "price" => "20.00"],
                    ["code" => "FVMR", "price" => "40.00"],
                    ["code" => "FVAR", "price" => "40.00"],
                    ["code" => "FVBR", "price" => "47.00"],
                    ["code" => "LFAR", "price" => "60.00"],

                ]

            ],
            [
                "name"          => "11.11 al 30.11 del 2025",
                "date_start"    => "11/11/2025",
                "date_end"      => "30/11/2025",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "47.00"],
                    ["code" => "CCAR", "price" => "47.00"],
                    ["code" => "ICAR", "price" => "55.00"],
                    ["code" => "EFAR", "price" => "61.00"],
                    ["code" => "CFAR", "price" => "66.00"],
                    ["code" => "IFAR", "price" => "70.00"],
                    ["code" => "XFAR", "price" => "66.00"],
                    ["code" => "SFAR", "price" => "76.00"],
                    ["code" => "CJAR", "price" => "70.00"],
                    ["code" => "SJAR", "price" => "84.00"],
                    ["code" => "FPAR", "price" => "102.00"],
                    ["code" => "FFAR", "price" => "100.00"],
                    ["code" => "PFAR", "price" => "101.00"],
                    ["code" => "FVMR", "price" => "192.00"],
                    ["code" => "FVAR", "price" => "192.00"],
                    ["code" => "FVBR", "price" => "223.00"],
                    ["code" => "LFAR", "price" => "279.00"],


                ]
            ],
            [
                "name"          => "01.12 al 16.12 del 2025",
                "date_start"    => "01/12/2025",
                "date_end"      => "16/12/2025",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "24.00"],
                    ["code" => "CCAR", "price" => "25.00"],
                    ["code" => "ICAR", "price" => "25.00"],
                    ["code" => "EFAR", "price" => "27.00"],
                    ["code" => "CFAR", "price" => "27.00"],
                    ["code" => "IFAR", "price" => "31.00"],
                    ["code" => "XFAR", "price" => "27.00"],
                    ["code" => "SFAR", "price" => "38.00"],
                    ["code" => "CJAR", "price" => "30.00"],
                    ["code" => "SJAR", "price" => "41.00"],
                    ["code" => "FPAR", "price" => "47.00"],
                    ["code" => "FFAR", "price" => "45.00"],
                    ["code" => "PFAR", "price" => "54.00"],
                    ["code" => "FVMR", "price" => "103.00"],
                    ["code" => "FVAR", "price" => "103.00"],
                    ["code" => "FVBR", "price" => "119.00"],
                    ["code" => "LFAR", "price" => "151.00"],


                ]
            ],
            [
                "name"          => "17.12 al 31.12 del 2025",
                "date_start"    => "17/12/2025",
                "date_end"      => "31/12/2025",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "116.00"],
                    ["code" => "CCAR", "price" => "116.00"],
                    ["code" => "ICAR", "price" => "121.00"],
                    ["code" => "EFAR", "price" => "123.00"],
                    ["code" => "CFAR", "price" => "124.00"],
                    ["code" => "IFAR", "price" => "131.00"],
                    ["code" => "XFAR", "price" => "205.00"],
                    ["code" => "SFAR", "price" => "156.00"],
                    ["code" => "CJAR", "price" => "133.00"],
                    ["code" => "SJAR", "price" => "207.00"],
                    ["code" => "FPAR", "price" => "164.00"],
                    ["code" => "FFAR", "price" => "207.00"],
                    ["code" => "PFAR", "price" => "244.00"],
                    ["code" => "FVMR", "price" => "465.00"],
                    ["code" => "FVAR", "price" => "465.00"],
                    ["code" => "FVBR", "price" => "538.00"],
                    ["code" => "LFAR", "price" => "674.00"],

                ]
            ],
            [
                "name"          => "01.01 al 31.01 del 2026",
                "date_start"    => "01/01/2026",
                "date_end"      => "31/01/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "81.00"],
                    ["code" => "CCAR", "price" => "82.00"],
                    ["code" => "ICAR", "price" => "83.00"],
                    ["code" => "EFAR", "price" => "84.00"],
                    ["code" => "CFAR", "price" => "84.00"],
                    ["code" => "IFAR", "price" => "87.00"],
                    ["code" => "XFAR", "price" => "108.00"],
                    ["code" => "SFAR", "price" => "98.00"],
                    ["code" => "CJAR", "price" => "91.00"],
                    ["code" => "SJAR", "price" => "108.00"],
                    ["code" => "FPAR", "price" => "98.00"],
                    ["code" => "FFAR", "price" => "109.00"],
                    ["code" => "PFAR", "price" => "125.00"],
                    ["code" => "FVMR", "price" => "213.00"],
                    ["code" => "FVAR", "price" => "219.00"],
                    ["code" => "FVBR", "price" => "237.00"],
                    ["code" => "LFAR", "price" => "312.00"],

                ]
            ],
            [
                "name"          => "01.02 al 15.02 del 2026",
                "date_start"    => "01/02/2026",
                "date_end"      => "15/02/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "90.00"],
                    ["code" => "CCAR", "price" => "91.00"],
                    ["code" => "ICAR", "price" => "94.00"],
                    ["code" => "EFAR", "price" => "95.00"],
                    ["code" => "CFAR", "price" => "96.00"],
                    ["code" => "IFAR", "price" => "98.00"],
                    ["code" => "XFAR", "price" => "118.00"],
                    ["code" => "SFAR", "price" => "109.00"],
                    ["code" => "CJAR", "price" => "103.00"],
                    ["code" => "SJAR", "price" => "119.00"],
                    ["code" => "FPAR", "price" => "109.00"],
                    ["code" => "FFAR", "price" => "119.00"],
                    ["code" => "PFAR", "price" => "136.00"],
                    ["code" => "FVMR", "price" => "177.00"],
                    ["code" => "FVAR", "price" => "184.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "271.00"],
                ]
            ],
            [
                "name"          => "16.02 al 28.02 del 2026",
                "date_start"    => "16/02/2026",
                "date_end"      => "28/02/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "90.00"],
                    ["code" => "CCAR", "price" => "91.00"],
                    ["code" => "ICAR", "price" => "94.00"],
                    ["code" => "EFAR", "price" => "95.00"],
                    ["code" => "CFAR", "price" => "96.00"],
                    ["code" => "IFAR", "price" => "98.00"],
                    ["code" => "XFAR", "price" => "118.00"],
                    ["code" => "SFAR", "price" => "109.00"],
                    ["code" => "CJAR", "price" => "103.00"],
                    ["code" => "SJAR", "price" => "131.00"],
                    ["code" => "FPAR", "price" => "109.00"],
                    ["code" => "FFAR", "price" => "119.00"],
                    ["code" => "PFAR", "price" => "136.00"],
                    ["code" => "FVMR", "price" => "177.00"],
                    ["code" => "FVAR", "price" => "184.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "271.00"],



                ]
            ],
            [
                "name"          => "01.03 al 28.03 del 2026",
                "date_start"    => "01/03/2026",
                "date_end"      => "28/03/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "83.00"],
                    ["code" => "CCAR", "price" => "84.00"],
                    ["code" => "ICAR", "price" => "86.00"],
                    ["code" => "EFAR", "price" => "87.00"],
                    ["code" => "CFAR", "price" => "87.00"],
                    ["code" => "IFAR", "price" => "89.00"],
                    ["code" => "XFAR", "price" => "108.00"],
                    ["code" => "SFAR", "price" => "98.00"],
                    ["code" => "CJAR", "price" => "94.00"],
                    ["code" => "SJAR", "price" => "118.00"],
                    ["code" => "FPAR", "price" => "81.00"],
                    ["code" => "FFAR", "price" => "109.00"],
                    ["code" => "PFAR", "price" => "130.00"],
                    ["code" => "FVMR", "price" => "170.00"],
                    ["code" => "FVAR", "price" => "175.00"],
                    ["code" => "FVBR", "price" => "208.00"],
                    ["code" => "LFAR", "price" => "261.00"],



                ]
            ],
            [
                "name"          => "29.03 al 05.04 del 2026 (Semana Santa)",
                "date_start"    => "29/03/2026",
                "date_end"      => "05/04/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "83.00"],
                    ["code" => "CCAR", "price" => "84.00"],
                    ["code" => "ICAR", "price" => "86.00"],
                    ["code" => "EFAR", "price" => "87.00"],
                    ["code" => "CFAR", "price" => "87.00"],
                    ["code" => "IFAR", "price" => "89.00"],
                    ["code" => "XFAR", "price" => "108.00"],
                    ["code" => "SFAR", "price" => "98.00"],
                    ["code" => "CJAR", "price" => "94.00"],
                    ["code" => "SJAR", "price" => "118.00"],
                    ["code" => "FPAR", "price" => "89.00"],
                    ["code" => "FFAR", "price" => "109.00"],
                    ["code" => "PFAR", "price" => "130.00"],
                    ["code" => "FVMR", "price" => "170.00"],
                    ["code" => "FVAR", "price" => "175.00"],
                    ["code" => "FVBR", "price" => "208.00"],
                    ["code" => "LFAR", "price" => "261.00"],



                ]
            ],
            [
                "name"          => "06.04 al 31.05 del 2026",
                "date_start"    => "06/04/2026",
                "date_end"      => "31/05/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "53.00"],
                    ["code" => "CCAR", "price" => "53.00"],
                    ["code" => "ICAR", "price" => "60.00"],
                    ["code" => "EFAR", "price" => "63.00"],
                    ["code" => "CFAR", "price" => "66.00"],
                    ["code" => "IFAR", "price" => "70.00"],
                    ["code" => "XFAR", "price" => "81.00"],
                    ["code" => "SFAR", "price" => "76.00"],
                    ["code" => "CJAR", "price" => "72.00"],
                    ["code" => "SJAR", "price" => "84.00"],
                    ["code" => "FPAR", "price" => "81.00"],
                    ["code" => "FFAR", "price" => "82.00"],
                    ["code" => "PFAR", "price" => "87.00"],
                    ["code" => "FVMR", "price" => "147.00"],
                    ["code" => "FVAR", "price" => "152.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "238.00"],



                ]
            ],
            [
                "name"          => "01.06 al 30.06 del 2026",
                "date_start"    => "01/06/2026",
                "date_end"      => "30/06/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "47.00"],
                    ["code" => "CCAR", "price" => "47.00"],
                    ["code" => "ICAR", "price" => "55.00"],
                    ["code" => "EFAR", "price" => "61.00"],
                    ["code" => "CFAR", "price" => "66.00"],
                    ["code" => "IFAR", "price" => "70.00"],
                    ["code" => "XFAR", "price" => "76.00"],
                    ["code" => "SFAR", "price" => "70.00"],
                    ["code" => "CJAR", "price" => "84.00"],
                    ["code" => "SJAR", "price" => "84.00"],
                    ["code" => "FPAR", "price" => "77.00"],
                    ["code" => "FFAR", "price" => "82.00"],
                    ["code" => "PFAR", "price" => "87.00"],
                    ["code" => "FVMR", "price" => "147.00"],
                    ["code" => "FVAR", "price" => "152.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "238.00"],



                ]
            ],
            [
                "name"          => "01.07 al 31.07 del 2026",
                "date_start"    => "01/07/2026",
                "date_end"      => "31/07/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "47.00"],
                    ["code" => "CCAR", "price" => "47.00"],
                    ["code" => "ICAR", "price" => "55.00"],
                    ["code" => "EFAR", "price" => "61.00"],
                    ["code" => "CFAR", "price" => "66.00"],
                    ["code" => "IFAR", "price" => "70.00"],
                    ["code" => "XFAR", "price" => "81.00"],
                    ["code" => "SFAR", "price" => "76.00"],
                    ["code" => "CJAR", "price" => "70.00"],
                    ["code" => "SJAR", "price" => "84.00"],
                    ["code" => "FPAR", "price" => "86.00"],
                    ["code" => "FFAR", "price" => "82.00"],
                    ["code" => "PFAR", "price" => "87.00"],
                    ["code" => "FVMR", "price" => "165.00"],
                    ["code" => "FVAR", "price" => "165.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "238.00"],



                ]
            ],
            [
                "name"          => "01.08 al 31.08 del 2026",
                "date_start"    => "01/08/2026",
                "date_end"      => "31/08/2026",
                "vehicle_rates" => [
                    ["code" => "ECAR", "price" => "47.00"],
                    ["code" => "CCAR", "price" => "47.00"],
                    ["code" => "ICAR", "price" => "55.00"],
                    ["code" => "EFAR", "price" => "61.00"],
                    ["code" => "CFAR", "price" => "66.00"],
                    ["code" => "IFAR", "price" => "70.00"],
                    ["code" => "XFAR", "price" => "81.00"],
                    ["code" => "SFAR", "price" => "76.00"],
                    ["code" => "CJAR", "price" => "70.00"],
                    ["code" => "SJAR", "price" => "84.00"],
                    ["code" => "FPAR", "price" => "86.00"],
                    ["code" => "FFAR", "price" => "82.00"],
                    ["code" => "PFAR", "price" => "87.00"],
                    ["code" => "FVMR", "price" => "165.00"],
                    ["code" => "FVAR", "price" => "165.00"],
                    ["code" => "FVBR", "price" => "191.00"],
                    ["code" => "LFAR", "price" => "238.00"],
                ]
            ]

        ];

    }

    function create_users()
    {




        $admin = User::updateOrCreate([
            "name"  => "admin",
            "email" => "rodogonzalez@msn.com"
        ], [
            "name"     => "admin",
            "email"    => "rodogonzalez@msn.com",
            "password" => bcrypt("R0d0lfit0!")
        ]);
    }
}
