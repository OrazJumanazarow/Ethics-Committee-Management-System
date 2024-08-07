<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplcationForm extends Model
{
    use HasFactory;
    protected $table= 'application_form';
    protected $fillable=[
        'id',
        'user_id',
        'application_type_id',
        'title_of_study',
        'type_of_study',
        'type_of_study_other',
        'resarcher_status',
        'resarcher_name',
        'resarcher_departmant',
        'resarcher_institute',
        'resarcher_phone',
        'resarcher_adress',
        'resarcher_email',
        'resarcher_others_add_name_and_institution',
        'resarcher_advisor_title',
        'resarcher_advisor_name',
        'resarcher_advisor_departmant',
        'resarcher_advisor_institute',
        'resarcher_advisor_phone',
        'resarcher_advisor_adress',
        'resarcher_advisor_email',
        'expected_start_time',
        'expected_end_time',
        'organization_add',
        'is_approval',
        'is_approval_yes',
        'w_project_not_supported',
        'w_project_not_supported_yes',
        'w_project_supported_yes_spesific_institute',
        'w_project_supported_yes_spesific_institute_international',
        'w_project_supported_yes_spesific_institute_other',
        'will_the_ethical_approval',
        'will_the_ethical_approval_yes',
        'status_of_application_repoting_protocol_no',
        'status_of_application_repoting_explain',
        'status_of_application_repoting_reson_yes',
        'status_of_application_extantion_protocol_no',
        'status_of_application_extantion_pexpected_date',
        'status_of_application_extantion_previous_project',
        'status_of_application_extantion_previous_project_yes_explain',
        'status_of_application_new_or_revised',
        'status_of_application_reporting_changes',
        'status_of_application_extension_of_a_previos_study',
        'status_of_application_new_or_revised_11',
        'status_of_application_new_or_revised_12',
        'status_of_application_new_or_revised_13',
        'status_of_application_new_or_revised_14',
        'status_of_application_new_or_revised_15',
        'status_of_application_new_or_revised_16',
        'status_of_application_new_or_revised_17',
        'status_of_application_new_or_revised_17_preschool_pupils_partisi',
        'status_of_application_new_or_revised_17_preschool_children_parti',
        'status_of_application_new_or_revised_17_other',
        'status_of_application_new_or_revised_18',
        'status_of_application_new_or_revised_19',
        'status_of_application_new_or_revised_20',
        'status_of_application_new_or_revised_20_other',
        'status_of_application_new_or_revised_21',
        'confirmation_supervisor_name',
        'confirmation_supervisor_date',
        'confirmation_researcher_name',
        'confirmation_resercher_date',
        

        /*'brief_describe',
        'explain_data_c_plan',
        'expected_result_study',
        'study_involve_items',
        'study_involve_items_yes',
        'will_partisipants_be_kept',
        'will_partisipants_be_kept_yes',
        'indicate_the_potential',
        'previous_research_project',
        'previous_research_project_yes',
        'researcher_name'
        */
    ];
}
