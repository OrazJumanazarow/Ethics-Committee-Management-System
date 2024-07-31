@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ETHICS COMMITTEE PROJECT INFORMATION FORM </h1>
@stop

@section('content')
<section class="container">
    <div class="container-fluid">
        <div class="main">
            <div class="d-flex justify-content-center">
                <img style="width: 15%" src="img\logo6.png" alt="">
            </div>

            <form wire:submit='createForm2'>
                <div class="mb-3 row" id="section-2">
                    <label class="form-label"> Type Of Study</label>
                    <div class="form-check">
                        <input wire:click="showOtherTypeOfStudy" wire:model.live="type_of_study"
                            class="form-check-input" type="radio" value="Academic Staff Study">
                        <label class="form-label-small">
                            Academic Staff Study
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:click="showOtherTypeOfStudy" wire:model.live="type_of_study"
                            class="form-check-input" type="radio" value="Student">
                        <label class="form-label-small">
                            Student
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:click="showOtherTypeOfStudy" wire:model.live="type_of_study"
                            class="form-check-input" type="radio" value="other">
                        <label class="form-label-small">
                            Other (Specify):
                        </label>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!-- 1 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">1. Briefly describe the study to be conducted, including the
                            sub-research
                            questions, and hypotheses if any.</label>
                        <textarea wire:model.live='question_1' type="text" class="form-control" placeholder="" rows="8"></textarea>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <!-- 2 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">2. Explain the data collection plan, specifying the methods,
                            scales,
                            tools, and techniques to be used. (Please
                            hand in a copy of all types of instruments such as scales and questionnaires to be used
                            in
                            the
                            study along
                            with this document.</label>
                        <textarea wire:model.live='question_2' type="text" class="form-control" placeholder="" rows="8"></textarea>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <!-- 3 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">3. Write down the expected results of your study.</label>
                        <textarea wire:model.live='question_3' type="text" class="form-control" placeholder="" rows="8"></textarea>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <!-- 4 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">4. Does your study involve items/procedures that may jeopardize
                            the
                            physical and/or psychological wellbeing
                            of the participants or that may be distressing for them?</label>
                        <div class="form-check">
                            <input wire:click='showOtherInput' wire:model.live='question_4' class="form-check-input"
                                type="radio" value="yes">
                            <label class="form-label-small" for="flexCheckDefault2_0">Yes</label>
                        </div>
                        <div class="form-check">
                            <input wire:click='showOtherInput' wire:model.live='question_4' class="form-check-input"
                                type="radio" value="no">
                            <label class="form-label-small" for="flexCheckDefault2_0">No</label>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    </div>
                </div>
                <!-- 5 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">5. Will the participants be kept totally/partially uninformed of
                            the
                            aim
                            of the study (i.e. is there deception)? </label>
                        <div class="form-check">
                            <input wire:click='showOtherInput1' wire:model.live='question_5'
                                class="form-check-input" type="radio" value="yes">
                            <label class="form-label-small">Yes</label>
                        </div>
                        <div class="form-check">
                            <input wire:click='showOtherInput1' wire:model.live='question_5'
                                class="form-check-input" type="radio" value="no">
                            <label class="form-label-small">No</label>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                    </div>
                </div>

                <!-- 6 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">6. Indicate the potential contributions of the study to your
                            research
                            area
                            and/or the society.</label>
                        <textarea wire:model.live='question_6' type="text" class="form-control" placeholder="" rows="8"></textarea>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <!-- 7 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label"> 7. Have you completed any previous research project?</label>
                        <div class="form-check">
                            <input wire:click='showOtherInput2' wire:model.live='question_7'
                                class="form-check-input" type="radio" value="yes">
                            <label class="form-label-small" for="flexCheckDefault">Yes</label>
                        </div>
                        <div class="form-check">
                            <input wire:click='showOtherInput2' wire:model.live='question_7'
                                class="form-check-input" type="radio" value="no">
                            <label class="form-label-small" for="flexCheckDefault">No</label>
                        </div>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Researcher’s name and surname:</label>
                        <input wire:model.live='rname' class="form-control" type="text" name="Name">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <br>
                        <br>
                        <br>
                    </div>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3 row">
                    <div class="col-md">
                        <label class="form-label">Code:FRM-ETK-002</label>
                    </div>
                    <div class="col-md">
                        <label class="form-label">Rev. No. / Date: 00 Y. </label>
                    </div>
                    <div class="col-md">
                        <label class="form-label">Date: 25.07.2024</label>
                    </div>

                </div>
            </form>

            <div class="button d-flex flex-row align-items-center justify-content-end">
                <button wire:click='createForm2' type="submit" class="btn submit btn-primary">Submit</button>
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
                <a wire:click='redirectToDashboard' type="button" class="btn btn-secondary">Close</a>
            </div>
        </div>
    </div>
</div>

</div>
    </div>
</section>
@stop
