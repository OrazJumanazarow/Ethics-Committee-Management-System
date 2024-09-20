<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProjectInformationForm extends Model{

    use HasFactory;
    protected $table = 'project_information_form';
    protected $fillable = [
        'id',
        'application_type_id',
        'type_of_study',
        'type_of_study_other',
        'brief_describe',
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
    ];

}
?>
