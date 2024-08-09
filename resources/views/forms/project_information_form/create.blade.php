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

            <form >
                @csrf

                <div class="mb-3">
                    <label class="form-label">Type Of Study</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type_of_study" id="academicStaff" value="academicStaff" checked>
                      <label class="form-check-label" for="academicStaff">Academic Staff Study</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type_of_study" id="student" value="student">
                      <label class="form-check-label" for="student">Student</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type_of_study" id="other" value="other">
                      <label class="form-check-label" for="other">Other (Specify):</label>
                      <input type="text" class="form-control mt-2" id="otherText" placeholder="Please specify" style="display: none">
                    </div>
                  </div>


                <!-- 1 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">1. Briefly describe the study to be conducted, including the
                            sub-research
                            questions, and hypotheses if any.</label>
                        <textarea name="brief_describe" type="text" class="form-control" placeholder="" rows="8"></textarea>
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
                        <textarea name="explain_data_c_plan" type="text" class="form-control" placeholder="" rows="8"></textarea>



                    </div>
                </div>
                <!-- 3 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">3. Write down the expected results of your study.</label>
                        <textarea name="expected_result_study" type="text" class="form-control" placeholder="" rows="8"></textarea>
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
                            <input name="study_involve_items" class="form-check-input"
                                type="radio" value="yes">
                            <label class="form-label-small" for="flexCheckDefault2_0">Yes</label>
                        </div>
                        <div class="form-check">
                            <input name="study_involve_items" class="form-check-input"
                                type="radio" value="no">
                            <label class="form-label-small" for="flexCheckDefault2_0">No</label>
                        </div>
                        <label class="form-label" for="">If yes, please explain. Specify the precautions
                            that will be taken to eliminate or minimize the effects of
                            these items/procedures.
                        </label>
                        <textarea name="study_involve_items_yes" value="InvIfYes" type="text" class="form-control" rows="8" id="ifYes"></textarea>

                    </div>
                </div>
            <script>
                const ifYes=document.getElementById('ifYes')
                document.querySelectorAll('input[name="study_involve_items_yes"]').forEach((radio) => {
                radio.addEventListener('change', function () {

            if (this.value === 'InvIfYes') {
                ifYes.style.display='block';
            }
             else {
                ifYes.style.display='none';
            }
           });
           });
            </script>
                <!-- 5 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">5. Will the participants be kept totally/partially uninformed of
                            the
                            aim
                            of the study (i.e. is there deception)? </label>
                        <div class="form-check">
                            <input name="will_partisipants_be_kept" class="form-check-input" type="radio" value="yes">
                            <label class="form-label-small">Yes</label>
                        </div>
                        <div class="form-check">
                            <input name="will_partisipants_be_kept" class="form-check-input" type="radio" value="no">
                            <label class="form-label-small">No</label>
                        </div>
                        <label for="" class="form-label">If yes, explain why.
                            Indicate
                            how
                            this
                            will
                            be explained to the participants at the end of the data
                            collection in debriefing the participants.
                        </label>

                        <div class="col">
                            <textarea name="will_partisipants_be_kept_yes" value="" type="text" class="form-control" rows="8"></textarea>
                        </div>

                    </div>
                </div>

                <!-- 6 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label">6. Indicate the potential contributions of the study to your
                            research
                            area
                            and/or the society.</label>
                        <textarea name="indicate_the_potential" type="text" class="form-control" placeholder="" rows="8"></textarea>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <!-- 7 -->
                <div class="mb-3 row">
                    <div class="col">
                        <label class="form-label"> 7. Have you completed any previous research project?</label>
                        <div class="form-check">
                            <input name="previous_research_project" class="form-check-input" type="radio" value="yes">
                            <label class="form-label-small" for="flexCheckDefault">Yes</label>
                        </div>
                        <div class="form-check">
                            <input name="previous_research_project" class="form-check-input" type="radio" value="no">
                            <label class="form-label-small" for="flexCheckDefault">No</label>
                        </div>
                        <label for="" class="form-label">If your answer is yes,
                            write
                            down
                            the
                            titles, and dates of previous research projects you have conducted or
                            that you have taken part in and the names of funding institution(s) if
                            any.
                        </label>
                        <div class="col">
                            <textarea name="previous_research_project_yes" value="" type="text" class="form-control" rows="8" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Researcher’s name and surname:</label>
                        <input class="form-control" type="text" name="researcher_name">
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
                <div class="button d-flex flex-row align-items-center justify-content-end">
                <button type="submit" class="btn submit btn-primary">Submit</button>
            </div>
            </form>


        </div>

</div>


<script>
    const otherText=document.getElementById('otherText')
            document.querySelectorAll('input[name="type_of_study"]').forEach((radio) => {
            radio.addEventListener('change', function () {

            if (this.value === 'other') {
                otherText.style.display='block';
            }
             else {
                otherText.style.display='none';
            }
           });
           });
</script>

</section>
@stop
