<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubmittedShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submitted_shifts')->insert([
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-01',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-02',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-04',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-06',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-08',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-12',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-14',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '山田 太郎',
                'DesireWorkingDate' => '2024-04-15',
                'DesireStartTime' => '18:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],

            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-01',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-02',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-03',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-07',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-09',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '石川 結子',
                'DesireWorkingDate' => '2024-04-14',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],

            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-01',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-02',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-04',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-05',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-06',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-07',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-11',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-12',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-13',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-14',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
            [
                'name' => '鈴木 紗英',
                'DesireWorkingDate' => '2024-04-15',
                'DesireStartTime' => '17:00',
                'DesireEndTime' => '22:00',
                'remarks' => Str::random(30),
                'StartPeriod' => '2024-04-01',
                'EndPeriod'=> '2024-04-15'
            ],
        ]);
    }
}
