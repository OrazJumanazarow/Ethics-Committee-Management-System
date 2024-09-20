<?php
namespace App\Models;

use ILLuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformedConsentForm extends Model{

    use HasFactory;
    protected $table='informed_consent_form';
    protected $fillable=[
        'id',
        'application_id',
        'application_type_id',
        'start_time',
        'end_time',
        'aims_to_investigate',
        'survey_explain',
        'survey_is_anonyms',
        'partification_explain',
        'can_support_explain',
    ];
}


