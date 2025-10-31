<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        //tipo-combustibles

        $fuel_types = ["Gasolina", "Diesel", "Electrico"];

        foreach ($fuel_types as $type) {
            DB::table('fuel_types')->insert([
                "name" => $type
            ]);
        }


        $vehicle_types = [
            ["name" => "ECONOMICO AUT.", "code" => "ECAR"],
            ["name" => "COMPACTO AUT.", "code" => "CCAR"],
            ["name" => "MID SIZE AUT.", "code" => "ICAR"],
            ["name" => "ECONOMICO SUV AUT.", "code" => "EFAR"],
            ["name" => "COMPACTO SUV AUT.", "code" => "CFAR"],
            ["name" => "MID SIZE 4x4 AUT.", "code" => "IFAR"],
            ["name" => "SPECIAL SUV AUT.", "code" => "XFAR"],
            ["name" => "STANDARD 4X4 AUT.", "code" => "SFAR"],
            ["name" => "COMPACT 4X4 AUT (4 PUERTAS)", "code" => "CJAR"],
            ["name" => "STANDARD ELITE 4X4 AUT.", "code" => "SJAR"],
            ["name" => "FULL SIZE PICK UP", "code" => "FPAR"],
            ["name" => "FULL SIZE 4X4 AUT.", "code" => "FFAR"],
            ["name" => "PREMIUM 4X4 AUT.", "code" => "PFAR"],
            ["name" => "FULL SIZE VAN MANUAL", "code" => "FVMR"],
            ["name" => "FULL SIZE VAN AUTOMATICA", "code" => "FVAR"],
            ["name" => "FULL SIZE VAN AUTOMATICA 4X4", "code" => "FVBR"],
            ["name" => "LUXURY SUV AUTOMÁTICA", "code" => "LFAR"]
        ];


        foreach ($vehicle_types as $type) {
            DB::table('vehicle_types')->insert([
                "code" => $type["code"],
                "name" => $type["name"]
            ]);
        }


        $vehicles = [
            ["code" => "ECAR", "name" => "SUZUKI SWIFT"],
            ["code" => "CCAR", "name" => "TOYOTA YARIS"],
            ["code" => "ICAR", "name" => "TOYOTA COROLLA"],
            ["code" => "EFAR", "name" => "TOYOTA YARIS CROSS"],
            ["code" => "CFAR", "name" => "TOYOTA COROLLA CROSS"],
            ["code" => "IFAR", "name" => "SUZUKI NEW VITARA"],
            ["code" => "XFAR", "name" => "TOYOTA RUSH"],
            ["code" => "SFAR", "name" => "TOYOTA RAV4"],
            ["code" => "CJAR", "name" => "SUZUKI JIMNY"],
            ["code" => "SJAR", "name" => "FORD BRONCO"],
            ["code" => "SFAR", "name" => "TOYOTA HILUX"],
            ["code" => "FFAR", "name" => "TOYOTA FORTUNER"],
            ["code" => "PFAR", "name" => "FORD EVEREST"],
            ["code" => "FVMR", "name" => "TOYOTA HIACE"],
            ["code" => "FVAR", "name" => "TOYOTA HIACE"],
            ["code" => "FVBR", "name" => "HYUNDAI STARIA"],
            ["code" => "LFAR", "name" => "FORD EXPEDITION"]
        ];

        foreach ($vehicles as $vehicle) {
            DB::table('vehicles')->insert([
                "code" => $vehicle["code"],
                "name" => $vehicle["name"]
            ]);
        }



        $offices = [
            ["id" => "2", "name" => "SJO Airport"],
            ["id" => "43", "name" => "Pérez Zéledon"],
            ["id" => "6", "name" => "Liberia Airport"],
            ["id" => "3", "name" => "Paseo Colon"],
            ["id" => "25", "name" => "Plaza Víquez"],
            ["id" => "4", "name" => "Hotel Irazú"],
            ["id" => "5", "name" => "Hotel Wyndham Herradura"],
            ["id" => "30", "name" => "Hotel Costa Rica Marriott"],
            ["id" => "24", "name" => "Lindora"],
            ["id" => "33", "name" => "Cartago"],
            ["id" => "34", "name" => "Curridabat"],
            ["id" => "35", "name" => "Palmares"],
            ["id" => "12", "name" => "La Fortuna"],
            ["id" => "13", "name" => "Peñas Blancas"],
            ["id" => "20", "name" => "Playas del Coco"],
            ["id" => "23", "name" => "Occidental Papagayo"],
            ["id" => "7", "name" => "Tamarindo Beach"],
            ["id" => "18", "name" => "Brasilito"],
            ["id" => "22", "name" => "Nosara"],
            ["id" => "8", "name" => "Samara Beach"],
            ["id" => "36", "name" => "Hotel Secret"],
            ["id" => "37", "name" => "Hotel Hilton Garden Liberia"],
            ["id" => "38", "name" => "Hotel Dreams Las Mareas"],
            ["id" => "27", "name" => "Flamingo"],
            ["id" => "40", "name" => "Hotel JW Marriott Guanacaste"],
            ["id" => "9", "name" => "Mal País"],
            ["id" => "10", "name" => "Jacó Beach"],
            ["id" => "28", "name" => "Marina los Sueños"],
            ["id" => "11", "name" => "Quepos"],
            ["id" => "29", "name" => "Marina Pez Vela"],
            ["id" => "19", "name" => "Dominical"],
            ["id" => "31", "name" => "Golfito"],
            ["id" => "15", "name" => "Puerto Jimenez"],
            ["id" => "17", "name" => "Paso Canoas"],
            ["id" => "21", "name" => "Guapiles"],
            ["id" => "32", "name" => "Limón"],
            ["id" => "16", "name" => "Puerto Viejo, Limón"],
            ["id" => "26", "name" => "Uvita"],
            ["id" => "42", "name" => "Ciudad Quesada"],
            ["id" => "44", "name" => "Puntarenas"],
            ["id" => "45", "name" => "Heredia"],
            ["id" => "46", "name" => "Liberia Downtown"],
            ["id" => "47", "name" => "Nicoya"],

        ];


        foreach ($offices as $office) {
            DB::table('offices')->insert([
                "code" => $office['id'],
                "name" => $office["name"]
            ]);
        }
        $this->create_users();
    }

    function create_users()
    {




        $admin = User::updateOrCreate([
            'name'       => 'admin',
            'email'      => 'rodogonzalez@msn.com'
        ], [
            'name'       => 'admin',
            'email'      => 'rodogonzalez@msn.com',
            'password'   => bcrypt('R0d0lfit0!')
        ]);



    }
}
