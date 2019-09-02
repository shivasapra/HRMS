<?php

use Illuminate\Database\Seeder;

use App\DepartmentSettings;
use App\JobtitleSettings;
use App\AllowanceSettings;
use App\ServiceSettings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dp = new DepartmentSettings;
        $dp->name = 'Telemarketing';
        $dp->save();

        $dp = new DepartmentSettings;
        $dp->name = 'Sales';
        $dp->save();

        $dp = new DepartmentSettings;
        $dp->name = 'Operations';
        $dp->save();

        $dp = new DepartmentSettings;
        $dp->name = 'Backend';
        $dp->save();

        $dp = new DepartmentSettings;
        $dp->name = 'Information Technology (IT)';
        $dp->save();


        $as = new AllowanceSettings;
        $as->name = 'HRA';
        $as->save();

        $as = new AllowanceSettings;
        $as->name = 'Medical';
        $as->save();

        $as = new AllowanceSettings;
        $as->name = 'TA';
        $as->save();

        $as = new AllowanceSettings;
        $as->name = 'Insurance';
        $as->save();

        $as = new AllowanceSettings;
        $as->name = 'DA';
        $as->save();


        $ss = new ServiceSettings;
        $ss->name = 'Bus';
        $ss->charges = 'Rs. 1500';
        $ss->save();

        $ss = new ServiceSettings;
        $ss->name = 'Food';
        $ss->charges = 'Rs. 2000';
        $ss->save();

        $ss = new ServiceSettings;
        $ss->name = 'TDS';
        $ss->charges = '3% of Salary';
        $ss->save();

        $ss = new ServiceSettings;
        $ss->name = 'PF';
        $ss->save();

        $ss = new ServiceSettings;
        $ss->name = 'ESI';
        $ss->save();
    }
}
