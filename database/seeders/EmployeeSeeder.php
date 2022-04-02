<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'employee_code'=> 'G-00000',
            'name' => 'Dungog, Marvin Bantingue',
            'department' => 'Online Tutorial Department',
            'position' => 'CEO',
            'hire_date' =>'2022-02-21',
            'status' => 'Active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00001',
            'name' => 'Tromp, Rafael Bealty',
            'department' => 'Online Tutorial Department',
            'position' => 'Finance Analyst',
            'hire_date' => '2022-02-21',
            'status' => 'Inactive',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00002',
            'name' => 'Kunze, Kylee Tromp',
            'department' => 'Sales',
            'position' => 'Sales Staff',
            'hire_date' => '2000-02-02',
            'status' => 'Resigned',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00003',
            'name' => 'VonRuden, Fiona Jacobs',
            'department' => 'International Department',
            'position' => 'Sales Staff',
            'hire_date' => '1973-10-05',
            'status' => 'Resigned',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00004',
            'name' => 'Lehner, Selina D\'Amore',
            'department' => 'Inter-Agency Department',
            'position' => 'Finance Analyst',
            'hire_date' => '1991-11-25',
            'status' => 'Active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00005',
            'name' => 'Lehner, Selina D\'Amore',
            'department' => 'Inter-Agency Department',
            'position' => 'HR Assistant',
            'hire_date' => '1990-07-31',
            'status' => 'Active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('employees')->insert([
            'employee_code' => 'G-00006',
            'name' => 'Jacob, Jane Jonas',
            'department' => 'Inter-Agency Department',
            'position' => 'Purchase Officer',
            'hire_date' => '1991-04-16',
            'status' => 'Active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
