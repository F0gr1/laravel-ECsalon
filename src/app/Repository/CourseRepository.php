<?php
namespace App\Repository;

use App\Models\Course;

class CourseRepository
{
    public static function findStoreCourse($id)
    {
        return Course::where('storeId','=' ,$id)->get();
    }
}