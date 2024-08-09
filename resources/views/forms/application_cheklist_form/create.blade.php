@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ETHICS COMMITTEE RESEARCH & PROJECT APPLICATION CHECKLIST</h1>
@stop

@section('content')
<section class="container">
    <div class="container-fluid">
        <form >

            <br> <br>
                <div class="d-flex justify-content-center">
                    <img style="width: 15%" src="img\logo6.png" alt="">
                </div>

                <h4 class="form-description">Researchers applying to the Final International University (FIU) Ethics
                    Committee to
                    conduct a research
                    that requires data collection from people must have completed all the documents listed in the
                    Application
                    Checklist. Please review the Application Checklist below. Fill this form and attach it to the
                    beginning
                    of your application list</h4>

                    <br> <br>

                <div class="row d-flex justify-content-start align-items-center">
                    <div class="col col-sm-3">
                        <div class="form-check">
                            <input name="research_or_project_application_form" class="form-check-input"
                                value="Ethics Committee Application Form" type="radio">
                            <label class="form-label-small" for="form_list">
                                Research Application Form
                            </label>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="form-check">
                            <input name="research_or_project_application_form" class="form-check-input"
                                value="Project Information Form" type="radio">
                            <label class="form-label-small" for="form_list">
                                Project Application Form
                            </label>
                        </div>
                    </div>

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                </div>

                <br> <br>

                    <label class="form-label">Parent/Guardian Consent Form</label>
                     <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="parent_guardian" class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="parent_guardian" class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                Not Needed
                            </label>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 10px">
                    <a href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.final.edu.tr%2Fckfinder%2Fuserfiles%2Ffiles%2F05-HR_Parental_Approval_Form.doc&amp;wdOrigin=BROWSELINK">Parent/Guardian
                        Consent Form</a>
                </div>
                <div>
                    <input style="width: 50%" class="form-control" wire:model.live="file1" type="file" accept=".doc">
                </div>



                <br> <br>
                    <label class="form-label">Debriefing Form</label>
                    <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="debriefing_form" class="form-check-input"
                                value="Yes" type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="debriefing_form" class="form-check-input"
                                value="No" type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>

                </div>

                <div>
                    <input style="width: 50%" class="form-control" name="debriefing_form_yes_file" type="file" accept=".doc">
                </div>
                <textarea name="debriefing_form_no_explain" class="form-control" placeholder="Provide an explanation.." name="" id="" rows="3"></textarea>


                <br> <br>
                    <label class="form-label">Tools</label>
                    <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name='tools' class="form-check-input" value="Yes" type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="tools"  class="form-check-input" value="No" type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <div>
                    <input style="width: 50%" class="form-control" name="tools_file" type="file" accept=".doc">
                </div>
                <textarea  class="form-control" placeholder="Provide an explanation.." name="tools_explain" id="" rows="3"></textarea>



                <br> <br>
                    <label class="form-label">Permission</label>
                    <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name='permission' class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name='permission' class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>

                </div>
                <div>
                    <input style="width: 50%" class="form-control" name="permission_file" type="file" accept=".doc">
                </div>
                <textarea  class="form-control" placeholder="Provide an explanation.." name="permission_explain" id="" rows="3"></textarea>


                <br> <br>
                    <label class="form-label">Informed Consent Form</label>
                   <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="informed_consent" class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input name="informed_consent" class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                Not Needed
                            </label>
                        </div>
                    </div>

                </div>
                <div>
                    <input style="width: 50%" class="form-control" name="informed_consent_file" type="file" accept=".doc">
                </div>

                <br> <br>
                <div class="row">

                    <h4>POINTS TO BE CONSIDERED DURING ETHICAL ASSESSMENT</h4>
                    <h4 style="color: red">THE N/A OPTION SHOULD BE USED FOR THOSE QUESTIONS NOT APPLICABLE
                        (For example, if archival records are not to be used, N/A should be marked in Question
                        1.)
                    </h4 style="color: red">

                </div>
                <div class="row">
                    <div class="col-7">

                    </div>
                    <div class="col-3 d-flex justify-content-between align-items-center">
                        <label for="">Yes</label>
                        <label for="">No</label>
                        <label for="">N/A</label>
                    </div>
                </div>


                    <div class="row">
                        <div class="col-7">
                            <label class="form-label"> 1. If archival records are to be used in the research,
                                has
                                the
                                relevant
                                legal
                                regulations been complied with and permission has been obtained?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input name="points_assessment_1" class="form-check-input" value="Yes"
                                    type="radio">
                            </div>
                            <div class="form-check">
                                <input name="points_assessment_1" class="form-check-input" value="No"
                                    type="radio">
                            </div>
                            <div class="form-check">
                                <input name="points_assessment_1" class="form-check-input" value="N/A"
                                    type="radio">
                            </div>
                        </div>
                    </div>
                    <textarea  class="form-control" placeholder="Provide an explanation.." name="points_assessment_1_no" id="" rows="3"></textarea>

                    <br> <br>

                    <div class="col-7">
                        <label class="form-label">2. Random assignment</label>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">a. Is it clear that the selection/assignment of the
                                research
                                participants
                                will
                                be done randomly?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_2_random_assigment_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_2_random_assigment_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_2_random_assigment_a">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">b. If one or more control groups are used, is it
                                clear
                                that
                                the
                                assignment
                                of the participants to di erent groups (experimental and control groups)
                                will be done randomly?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_2_random_assigment_b">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_2_random_assigment_b">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                   name="points_assessment_2_random_assigment_b">
                            </div>
                        </div>

                    </div>

                    <br> <br>

                    <div class="col-7">
                        <label class="form-label">3. Does the informed consent form contain the following
                            items?</label>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">a. The purpose of the research</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_a">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_a">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">b. Anticipated time for data collection</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_b">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_b">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_a">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">c. What the participants are expected to do during
                                the
                                data
                                collection
                                process (for example, filling out a questionnaire, computer-based
                                application, etc.)</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_c">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_c">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_c">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">d. Participation was on a voluntary basis</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_d">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_d">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_d">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">e. The participants right to opt out after the
                                research
                                has
                                begun</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_e">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_e">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_e">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">f. Possible consequences of giving up</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_f">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_f">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_f">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>


                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">g. Potential risks, discomfort, or adverse
                                effects</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_g">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_g">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_g">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">h. How and for what purpose the information
                                obtained
                                will
                                be
                                used</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_h">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_h">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_h">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">i. How the participants identity and institution
                                information
                                will
                                be based
                                on con dentiality (anonymity) or how this information will be used and
                                protected by researchers in cases where identity/institution information
                                is required</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_i">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_i">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_i">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">j. Incentives (if any) for participation</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_j">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_j">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_j">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label-small">k. By whom the research was conducted and how to
                                reach
                                them
                                (for
                                large
                                teams, only the name of the lead person may be written.)</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_3_k">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_3_k">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_3_k">
                            </div>
                        </div>

                    </div>


                    <br> <br>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">4. Does the researcher have a dual role in the
                                research
                                that
                                will
                                create a conflict
                                of interest?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_4">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_4">
                            </div>
                            <div class="form-check">

                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <br> <br>

                <div class="row">

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">5. If the information is to be collected in the
                                research
                                on
                                sensitive
                                issues (sexual
                                orientation, substance use, illegitimate behaviors, etc.), are measures taken to
                                protect the rights of the participants and ensure condentiality?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_5">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_5">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_5">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <br> <br>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">6. If any audio or video recording is to be taken, is
                                it
                                stated
                                that
                                prior permission
                                will be obtained?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_6">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_6">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_6">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <br> <br>

                <div class="row">
                    <div class="col-7">
                        <label class="form-label">7. Will research be conducted with students or people working
                            for
                            the
                            researchers?
                            If the answer is no, or there are no incentives and no negative consequences of
                            their refusal to participate, skip to question 8.</label>
                    </div>

                    <div class="col-3 d-flex justify-content-between align-items-center" >
                        <div class="form-check">
                            <input wire:click='showSectionOf7' class="form-check-input" value="Yes"
                                type="radio" wire:model.live="question_7">
                        </div>
                        <div class="form-check">
                            <input wire:click='showSectionOf7' class="form-check-input" value="No"
                                type="radio" wire:model.live="question_7">
                        </div>

                        <div class="form-check">


                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">a. Are measures taken to protect participants
                                    against
                                    the
                                    negative
                                    consequences of their refusal to participate in the research or their
                                    withdrawal?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center ml-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_7_a">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_7_a">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" value="N/A" type="radio" name="points_assessment_7_a">
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">b. If participation in the research will
                                    provide
                                    extra
                                    points
                                    as required by
                                    the course; are different options offered to those who may choose not to
                                    participate?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_7_b">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_7_b">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" value="N/A" type="radio" name="points_assessment_7_b">
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">c. Are the economic or other incentives (extra
                                    points
                                    for
                                    the course) to be
                                    provided to the participants for participation in the research in amounts
                                    that make participation compulsory?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_7_c">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_7_c">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" value="N/A" type="radio" name="points_assessment_7_c">
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>



                <br> <br>

                <div class="row">
                    <div class="col-7">
                        <label class="form-label">8. Will deception be used? If your answer is no skip to
                            question
                            9.</label>
                    </div>
                    <div class="col-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input name="points_assessment_8" class="form-check-input" value="Yes"
                                type="radio" >
                        </div>
                        <div class="form-check">
                            <input name="points_assessment_8" class="form-check-input" value="No"
                                id="no-8" type="radio" >
                        </div>

                        <div class="form-check">

                        </div>


                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">a. Will deception be used in a situation where
                                    it
                                    can
                                    be
                                    predicted to cause
                                    physical pain or severe emotional distress to the participant?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_a">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_8_a">
                                </div>

                                <div class="form-check">

                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">b. Is it stated that any deception necessary
                                    for
                                    the
                                    healthy
                                    conduct of
                                    the research will be disclosed to the participants at the end of the
                                    participation and as early as possible (debriefing)?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_b">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_8_b">
                                </div>

                                <div class="form-check">

                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">c. Has a debriefing form been submitted in the
                                    case
                                    of
                                    deception
                                    in the
                                    research?</label>
                            </div>
                            <div class="col-3 d-flex justify-content-between align-items-center ">
                                <div class="form-check ">
                                    <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_c">
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" value="No" type="radio" name="points_assessment_8_c">
                                </div>

                                <div class="form-check">

                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <label class="form-label-small">d. Does the Debriefing Form contain the
                                    following
                                    items
                                    (i-iii)?</label>
                            </div>

                            <br> <br>
                            <div class="row">
                                <div class="col-7 ml-3">
                                    <label class="form-label-small">i. The real purpose of the research</label>
                                </div>
                                <div class="col-3 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_d_i">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="points_assessment_8_d_i">
                                    </div>

                                    <div class="form-check ml-3" >
                                        <input class="form-check-input" value="N/A" type="radio" name="points_assessment_8_d_i">
                                    </div>
                                </div>
                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                            <div class="row">
                                <div class="col-7 ml-3">
                                    <label class="form-label-small">ii. Reason for deception</label>
                                </div>
                                <div class="col-3 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_d_ii">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="points_assessment_8_d_ii">
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" value="N/A" type="radio" name="points_assessment_8_d_ii">
                                    </div>
                                </div>
                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                            </div>

                            <br><br>

                            <div class="row">
                                <div class="col-7 ml-3">
                                    <label class="form-label-small">iii. The participants potential questions
                                        or
                                        ideas
                                        can
                                        be
                                        forwarded to
                                        the researcher or FIU Ethical Committee.</label>
                                </div>
                                <div class="col-3 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Yes" type="radio" name="points_assessment_8_d_iii">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="No" type="radio" name="points_assessment_8_d_iii">
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" value="N/A" type="radio" name="points_assessment_8_d_iii">
                                    </div>
                                </div>
                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <br> <br>

                <div class="row">

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">9. If there are possible risks that may arise
                                during
                                the
                                research, have necessary
                                measures been explained to minimize or compensate for the harm done to the
                                participant if it is realized?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_9">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_9">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_9">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <br> <br>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">10. Is it specifieded how research data will be
                                recorded
                                (consistent
                                with the principle
                                of condentiality)?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_10">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_10">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    name="points_assessment_10">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <br> <br>

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">11. Is it specified how research data will be
                                stored
                                (locker or encrypted electronic file)?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    name="points_assessment_11">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    name="points_assessment_11">
                            </div>
                            <div class="form-check">

                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <br> <br> <br>

                <div class="mb-3 row">
                    <div class="col-md">
                        <label class="form-label">Code:FRM-ETK-003</label>
                    </div>
                    <div class="col-md">
                        <label class="form-label">Rev. No. / Date: 00 Y. </label>
                    </div>
                    <div class="col-md">
                        <label class="form-label">Date: 25.07.2024</label>
                    </div>

                </div>

                <div class="button d-flex flex-row align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>



    <div wire:ignore.self class="modal" id="attachFormModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Choose a form you want to attach</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <select wire:model.live="attached_app_id" class="form-control form-select form-select-lg" -
                        aria-label=".form-select-lg">
                        <option value="" hidden>Select a Form</option>
                        <!--[if BLOCK]><![endif]-->                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                         <!--[if ENDBLOCK]><![endif]-->


                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" wire:click='createChecklist' class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>



    <div wire:ignore.self data-bs-backdrop="static" data-bs-keyboard="false" id="myModal" class="modal"
        tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p class="">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </p>
                </div>

                <div class="modal-footer">
                    <a wire:navigate href="/user-dashboard" type="button" class="btn btn-secondary">Close</a>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
    </div>
</section>
@stop
