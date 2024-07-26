@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<section class="container">
    <div class="container-fluid">
        <form wire:submit='checkValidation'>

            <div class="main">
                <div class="d-flex justify-content-center">
                    <img style="width: 15%" src="img\logo6.png" alt="">
                </div>
                <h3>ETHICS COMMITTEE RESEARCH & PROJECT APPLICATION CHECKLIST</h3>
                <h4 class="form-description">Researchers applying to the Final International University (FIU) Ethics
                    Committee to
                    conduct a research
                    that requires data collection from people must have completed all the documents listed in the
                    Application
                    Checklist. Please review the Application Checklist below. Fill this form and attach it to the
                    beginning
                    of your application list</h4>

                <div class="row d-flex justify-content-start align-items-center">
                    <div class="col col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_form' class="form-check-input"
                                value="Ethics Committee Application Form" type="radio">
                            <label class="form-label-small" for="form_list">
                                Research Application Form
                            </label>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_form' class="form-check-input"
                                value="Project Information Form" type="radio">
                            <label class="form-label-small" for="form_list">
                                Project Application Form
                            </label>
                        </div>
                    </div>

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                </div>

                <div class="row">
                    <label class="form-label">Parent/Guardian Consent Form</label>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_parental' class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_parental' class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                Not Needed
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                <div class="row">
                    <label class="form-label">Debriefing Form</label>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='debriefing' wire:click='showDebriefing' class="form-check-input"
                                value="Yes" type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='debriefing' wire:click='showDebriefing' class="form-check-input"
                                value="No" type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <div class="row">
                    <label class="form-label">Tools</label>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='tools' class="form-check-input" value="Yes" type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='tools' class="form-check-input" value="No" type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <div class="row">
                    <label class="form-label">Permission</label>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='permission' class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='permission' class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                No
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <div class="row">
                    <label class="form-label">Informed Consent Form</label>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_informedc' class="form-check-input" value="Yes"
                                type="radio">
                            <label class="form-label-small">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-check">
                            <input wire:model.live='attach_informedc' class="form-check-input" value="No"
                                type="radio">
                            <label class="form-label-small">
                                Not Needed
                            </label>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                <!-- Consent Form -->

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
                                <input wire:model.live='question_1' class="form-check-input" value="Yes"
                                    type="radio">
                            </div>
                            <div class="form-check">
                                <input wire:model.live='question_1' class="form-check-input" value="No"
                                    type="radio">
                            </div>
                            <div class="form-check">
                                <input wire:model.live='question_1' class="form-check-input" value="N/A"
                                    type="radio">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">
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
                                    wire:model.live="question_2_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_2_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_2_a">
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
                                    wire:model.live="question_2_b">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_2_b">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_2_b">
                            </div>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>

                <div class="row">
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
                                    wire:model.live="question_3_a">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_a">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_a">
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
                                    wire:model.live="question_3_b">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_b">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_b">
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
                                    wire:model.live="question_3_c">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_c">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_c">
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
                                    wire:model.live="question_3_d">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_d">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_d">
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
                                    wire:model.live="question_3_e">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_e">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_e">
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
                                    wire:model.live="question_3_f">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_f">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_f">
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
                                    wire:model.live="question_3_g">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_g">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_g">
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
                                    wire:model.live="question_3_h">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_h">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_h">
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
                                    wire:model.live="question_3_i">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_i">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_i">
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
                                    wire:model.live="question_3_j">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_j">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_j">
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
                                    wire:model.live="question_3_k">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_3_k">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_3_k">
                            </div>
                        </div>

                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">

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
                                    wire:model.live="question_4">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_4">
                            </div>
                            <div class="form-check">

                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

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
                                    wire:model.live="question_5">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_5">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_5">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">

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
                                    wire:model.live="question_6">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_6">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_6">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">
                    <div class="col-7">
                        <label class="form-label">7. Will research be conducted with students or people working
                            for
                            the
                            researchers?
                            If the answer is no, or there are no incentives and no negative consequences of
                            their refusal to participate, skip to question 8.</label>
                    </div>

                    <div class="col-3 d-flex justify-content-between align-items-center">
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
                </div>

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                <div class="row">
                    <div class="col-7">
                        <label class="form-label">8. Will deception be used? If your answer is no skip to
                            question
                            9.</label>
                    </div>
                    <div class="col-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input wire:click="showSectionOf8" class="form-check-input" value="Yes"
                                type="radio" wire:model.live="question_8">
                        </div>
                        <div class="form-check">
                            <input wire:click="showSectionOf8" class="form-check-input" value="No"
                                id="no-8" type="radio" wire:model.live="question_8">
                        </div>

                        <div class="form-check">

                        </div>

                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

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
                                    wire:model.live="question_9">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_9">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_9">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">

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
                                    wire:model.live="question_10">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_10">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="N/A" type="radio"
                                    wire:model.live="question_10">
                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="row">

                    <div class="row">
                        <div class="col-7">
                            <label class="form-label">11. Is it specified how research data will be
                                stored
                                (locker or encrypted electronic file)?</label>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" value="Yes" type="radio"
                                    wire:model.live="question_11">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="No" type="radio"
                                    wire:model.live="question_11">
                            </div>
                            <div class="form-check">

                            </div>
                        </div>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
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
