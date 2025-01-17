<?php

namespace Database\Seeders;

use App\Imports\AcademicStaffImport;
use App\Imports\CourseFieldImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Imports\CourseImport;
use App\Imports\FieldImport;
use Maatwebsite\Excel\Facades\Excel;
class ExcelImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new CourseImport,public_path('Excel\courses.xlsx'));
        Excel::import(new FieldImport,public_path('Excel\fields.xlsx'));
        Excel::import(new CourseFieldImport,public_path('Excel\course_field.xlsx'));
        Excel::import(new AcademicStaffImport,public_path('Excel\academic_staff.xlsx'));
    }
}
