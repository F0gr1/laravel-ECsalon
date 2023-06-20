<?php
namespace App\Service;

use App\Repository\CourseRepository;

class CourseService
{
    public static function getCourse($id) {
        $courses = CourseRepository::findStoreCourse($id);
        return $courses;
    }
}