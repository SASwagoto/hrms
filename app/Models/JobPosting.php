<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPosting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'job_title',
        'company',
        'location',
        'key_responsibilities',
        'educational_qualifications',
        'salary_range',
        'unique_tracking_number',
        'how_to_apply',
        'position',
        'preferred_skills',
        'benefits',
        'application_deadline',
        'requisition_number',
        'about_us',
        'department',
        'requirements',
        'experience',
        'contact_information',
        'file_path',
        'approved_by',
    ];
}
