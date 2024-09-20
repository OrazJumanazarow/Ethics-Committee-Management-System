<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationChecklist extends Model{

    use HasFactory;
    protected $table = 'application_checklist';
    protected $fillable = [
        'id',
        'application_type_id',
        'project_application_form',
        'parent_guardian',
        'parent_guardian_file',
        'debriefing_form',
        'debriefing_form_yes_file',
        'debriefing_form_no_explain',
        'tools',
        'tools_file',
        'tools_explain',
        'permission',
        'permission_file',
        'permission_explain',
        'informed_consent',
        'informed_consent_file',
        'points_assessment_1',
        'points_assessment_1_no',
        'points_assessment_2_random_assigment_a',
        'points_assessment_2_random_assigment_b',
        'points_assessment_3_a',
        'points_assessment_3_b',
        'points_assessment_3_c',
        'points_assessment_3_d',
        'points_assessment_3_e',
        'points_assessment_3_f',
        'points_assessment_3_g',
        'points_assessment_3_h',
        'points_assessment_3_i',
        'points_assessment_3_j',
        'points_assessment_3_k',
        'points_assessment_4',
        'points_assessment_5',
        'points_assessment_6',
        'points_assessment_7',
        'points_assessment_7_a',
        'points_assessment_7_b',
        'points_assessment_7_c',
        'points_assessment_8',
        'points_assessment_8_a',
        'points_assessment_8_b',
        'points_assessment_8_c',
        'points_assessment_8_d',
        'points_assessment_8_d_i',
        'points_assessment_8_d_ii',
        'points_assessment_8_d_iii',
        'points_assessment_9',
        'points_assessment_10',
        'points_assessment_11'
    ];
}

