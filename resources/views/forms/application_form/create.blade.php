@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>APPLICATION FORMS</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content ml-4">
      <div class="container-fluid">
        <form action="{{ route('application_form_store') }}" class="main" method="POST" >
            <div class="d-flex justify-content-center">
                <img style="width: 15%" src="img\logo6.png" alt="">
            </div>

            @csrf
            <!-- 0 -->
            <div>
                <table >
                    <tr>
                        <th face="Calibri" style="font-style: normal; font size: 3px">Studies conducted in
                            Final International University (FIU) and/or studies conducted
                            by FIU personnel/students, which involve collecting data from human participants,
                            are subject to review by the FIU Ethics Committee (EC).
                            Applicants should submit this application form to the FIU EC along with the other
                            required documents (see the Application Check List).
                            Approval of the EC is required before the start of data collection from human
                            participants.
                        </th>
                    </tr>
                </table>
            </div>
            <br> <br>
            <!-- 0 -->
            <!-- 1 -->
            <div class="mb-3 row" id="section-1">
                <div class="col">
                    <label class="form-label">1. Title Of Study</label>
                    <input name="title_of_study" value="" type="text" class="form-control" placeholder="Summarizes the main idea or ideas of your study">
                </div>
            </div>
            <!-- 2 -->
            <form>
                <fieldset class="form-group">
                  <legend>2. Type of Study</legend>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_of_study" id="academicStaffStudy" value="academicStaffStudy">
                    <label class="form-check-label" for="academicStaffStudy">Academic Staff Study</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_of_study" id="doctorateThesis" value="doctorateThesis">
                    <label class="form-check-label" for="doctorateThesis">Doctorate Thesis</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_of_study" id="masterThesis" value="masterThesis">
                    <label class="form-check-label" for="masterThesis">Master Thesis</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_of_study" id="otherSpecify" value="otherSpecify">
                    <label class="form-check-label" for="otherSpecify">Other (Specify)</label>
                  </div>
                  <div class="form-group" id="otherSpecifyInputContainer" style="display: none;">
                    <label for="otherSpecifyInput">Specify:</label>
                    <input type="text" class="form-control" id="otherSpecifyInput" name="type_of_studu_other">
                  </div>
                </fieldset>
              </form>

              <script>
                const otherSpecifyInput = document.getElementById('otherSpecifyInput');
                const otherSpecifyInputContainer = document.getElementById('otherSpecifyInputContainer');

                document.querySelectorAll('input[name="type_of_studu_other"]').forEach((radio) => {
                  radio.addEventListener('change', function () {
                    if (this.value === 'type_of_studu_other') {
                      otherSpecifyInputContainer.style.display = 'block';
                    } else {
                      otherSpecifyInputContainer.style.display = 'none';
                    }
                  });
                });
              </script>



            <!-- 3 -->
            <div class="mb-3 row" id="section-3">
                <label class="form-label">3. Researcher's</label>
                <div class="col">
                    <label class="form-label-small headers">Title</label>
                    <select name="resarcher_status"  class="form-select form-control"
                        aria-label=".form-select">
                        <option value="Prof. Dr." selected>Student</option>
                        <option value="Prof. Dr."> Prof. Dr.</option>
                        <option value="Assoc. Pro. Dr.">Assoc. Pro. Dr.</option>
                        <option value="Asst. Prof. Dr.">Asst. Prof. Dr.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Sen. Instr.">Sen. Instr.</option>
                        <option value="Instr.">Instr.</option>
                    </select>
                    <label class="form-label-small headers">Name and surname:</label>
                    <input name="resarcher_name" type="text" class="form-control" placeholder="Exp: Oraz Jumanazarov">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Department:</label>
                    <input name='researcher_department' type="text" class="form-control"
                        placeholder="Exp: Comp Eng">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Institute:</label>
                    <input name='researcher_institution' type="text" class="form-control"
                        placeholder="Exp: FIU (Final International Unversity)">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Phone:</label>
                    <input name ='researcher_phone' type="text" class="form-control"
                        placeholder="+90**********">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Address:</label>
                    <textarea name="resarcher_adress"  type="text" class="form-control" placeholder="" rows="3"></textarea>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Email:</label>
                    <input name="resarcher_email" type="text" class="form-control"
                        placeholder="example@gmail.com">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <!-- 4 -->
            <div class="mb-3 row" id="section-4">
                <label class="form-label">4. Other Researchers (if any)</label>
                <div class="col" style="margin: 10px">
                    <br>
                    <a class="btn btn-light w-25">Add</a>
                </div>
                <div id="inputContainer1">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>


            <!-- 5 -->
            <!--[if BLOCK]><![endif]-->
                 <div class=" row">
                    <label class="form-label">
                        5. Advisor’s/Supervising Faculty Member’s <i>(Students conducting research
                            must
                            have
                            an
                            academic advisor/instructor supervising their research):</i>
                    </label>

                        <label class="form-label-small headers">Title:</label>
                        <select name="resarcher_advisor_title" class="form-select form-control"
                            aria-label=".form-select">


                            <div class="col-md">
                            <option value="Prof. Dr." selected> Prof. Dr.</option>
                            <option value="Assoc. Pro. Dr.">Assoc. Pro. Dr.</option>
                            <option value="Asst. Prof. Dr.">Asst. Prof. Dr.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Sen. Instr.">Sen. Instr.</option>
                            <option value="Instr.">Instr.</option>
                        </select>
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">Name and surname:</label>
                        <input name="resarcher_advisor_name" type="text" class="form-control ">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">Department:</label>
                        <input name="resarcher_advisor_departmant" type="text" class="form-control">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>


                    <div class="col-md">
                        <label class="form-label-small headers">Phone:</label>
                        <input name="resarcher_advisor_phone" type="text" class="form-control"
                            placeholder="+90**********">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">Address:</label>
                        <input name="resarcher_advisor_adress" type="text" class="form-control">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">E-mail:</label>
                        <input name="resarcher_advisor_email" type="text" class="form-control"
                            placeholder="example@gmail.com" >
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>


             <!--[if ENDBLOCK]><![endif]-->
            <!-- 6 -->


                <label class="form-label" ><br>6. Expected time frame of the study: <br><span class="warnings">The start date of the study should be at least three weeks from your
                        date
                        of
                        application.</span> </label>

                <div class="row">
                <div class="col-md">
                    <label class="form-label-small">Start:</label>
                    <input name="expected_start_time" id="expected_start" class="form-control"
                        type="date" min="2024-08-14">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>


                <div class="col-md">
                    <label class="form-label-small">End:</label>
                    <input id="expected_end" name="expected_end_time" class="form-control" type="date">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            </div>

            </div>


            <!-- 7 -->
            <div class="mb-3 row">
                <label class="form-label"><br>7. Organizations, institutions in which data collection is planned to
                    be
                    accomplished:</label>

                <div class="col" style="margin: 10px">
                    <br>
                    <a name="organization_add" class="btn btn-light w-25">Add</a>
                </div>
                <div id="inputContainer2">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

            </div>

            <!-- 8 -->

                <label for="" class="form-label">8. Is the approval/permission of an institution or
                    organization other than IFU required for data collection?</label>
                <div class="mb-3 row">
                <div class="form-check col">
                    <input name="is_approval" value="no" class="form-check-input"
                        type="radio" wire:click="showOtherInput1">
                    <label class="form-label-small" for="flexCheckDefault1">No</label>
                </div>

                <div class="form-check col">
                    <input name="is_approval_yes" value="yes" class="form-check-input"
                        type="radio" wire:click="showOtherInput1">
                    <label class="form-label-small" for="flexCheckDefault1">Yes(specify)</label>
                </div>

                <div class="col">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>


            <!-- 9 -->

                <label for="" class="form-label">9. Whether the project is supported/funded or
                    not:</label>
                <div class="mb-3 row">
                <div class="form-check">
                    <input name="w_project_supported_yes" class="form-check-input" value="Supported"
                        type="radio">
                    <label class="form-label-small mr-3">Supported</label>
                </div>
                <div class="form-check">
                    <input name="w_project_not_supported" class="form-check-input" value="Not Supported"
                        type="radio">
                    <label class="form-label-small">Not Supported</label>
                </div>

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                </div>

            <form>
                <div class="mb-3">
                  <label class="form-label">If supported, specify institution:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="w_project_supported_yes_spesific_institute" id="university" value="university">
                    <label class="form-check-label" for="university">University</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="w_project_supported_yes_spesific_institute" id="tubitak" value="tubitak">
                    <label class="form-check-label" for="tubitak">TUBITAK</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="w_project_supported_yes_spesific_institute_international" id="international" value="international">
                    <label class="form-check-label" for="international">International (please specify)</label>
                    <input type="text" class="form-control mt-2" id="internationalText" placeholder="Please specify">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="institution" id="other" value="other">
                    <label class="form-check-label" for="other">Other (please specify)</label>
                    <input name="w_project_supported_yes_spesific_institute_other	" type="text" class="form-control mt-2" id="otherText" placeholder="Please specify">
                  </div>
                </div>
              </form>

              <form>
                <div class="mb-3">
                  <label class="form-label">Will the ethical approval be used for a project submission (TUBITAK, EU projects etc.)?</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="will_the_ethical_approval" id="no" value="no">
                    <label class="form-check-label" for="no">No</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ethicalApproval" id="yes" value="yes">
                    <label class="form-check-label" for="yes">Yes (specify)</label>
                    <input name="will_the_ethical_approval_yes" type="text" class="form-control mt-2" id="yesText" placeholder="Please specify">
                  </div>
                </div>
              </form>



                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->



            <!-- 10 -->

                <div class="form-label">10. Status of the application:</div>
                <div class="mb-3 row">
                <div class="form-check mr-4">
                    <input name="status_of_application_new_or_revised" class="form-check-input"
                        value="New" type="radio">
                    <label class="form-label-small">New</label>
                </div>
                <div class="form-check mr-4">
                    <input name="status_of_application_new_or_revised" class="form-check-input"
                        value="Revised" type="radio">
                    <label class="form-label-small">Revised</label>
                </div>


                <div class="form-check mr-4">
                    <input wire:click='showFields' wire:model.live='status' id="rpchanges"
                        class="form-check-input" value="Reporting Changes" type="radio">
                    <label class="form-label-small" for="flexCheckDefault6">Reporting Changes</label>
                </div>
                <div class="form-check">
                    <input wire:click='showFields' wire:model.live='status' class="form-check-input"
                        value="Extension of a Previous Study" type="radio">
                    <label class="form-label-small">Extension of a Previous Study</label>
                </div>
            </div>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->





            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <form>
                <div class="mb-3">
                  <label class="form-label">11. Please explain the purpose of your study and the research question you are trying to answer with this study. Write it in a simple language so that people without expertise in the field can understand (maximum of two paragraphs).</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">12. Write down your description of process, including the research question, scale, tools and techniques used for data collection or analysis (Submit a copy of any measure or questionnaire used in the school with this document).</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">13. Does the study aim to partially/completely provide the participants with incorrect information in any way? Is there deception? Does the study require secrecy?</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="deception" id="no" value="no">
                      <label class="form-check-label" for="no">No</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="deception" id="yes" value="yes">
                      <label class="form-check-label" for="yes">Yes</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">14. Beyond the minimum stress and discomfort that participants may encounter in their daily lives, does your work contain elements that threaten their physical and/or mental health or that may be a source of stress for them?</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stress" id="noStress" value="no">
                      <label class="form-check-label" for="noStress">No</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="stress" id="yesStress" value="yes">
                      <label class="form-check-label" for="yesStress">Yes</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">15. The expected number of participants:</label>
                    <input type="number" class="form-control" id="participants" placeholder="Enter number of participants">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">16. If you are doing an education or intervention study, will a control group be used?</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="controlGroup" id="noControl" value="no">
                      <label class="form-check-label" for="noControl">No</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="controlGroup" id="yesControl" value="yes">
                      <label class="form-check-label" for="yesControl">Yes</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">17. From the list presented below, tick the options that best describe the participants:</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="universityStudents" value="universityStudents">
                      <label class="form-check-label" for="universityStudents">University students</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="highschoolStudents" value="highschoolStudents">
                      <label class="form-check-label" for="highschoolStudents">Highschool students</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="adultsInEmployment" value="adultsInEmployment">
                      <label class="form-check-label" for="adultsInEmployment">Adults in employment</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="primarySchoolPupils" value="primarySchoolPupils">
                      <label class="form-check-label" for="primarySchoolPupils">Primary school pupils</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="unemployedAdults" value="unemployedAdults">
                      <label class="form-check-label" for="unemployedAdults">Unemployed adults</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="childWorkers" value="childWorkers">
                      <label class="form-check-label" for="childWorkers">Child workers</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="preschoolChildren" value="preschoolChildren">
                      <label class="form-check-label" for="preschoolChildren">Preschool children</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="elderly" value="elderly">
                      <label class="form-check-label" for="elderly">The elderly</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="mentallyDisabled" value="mentallyDisabled">
                      <label class="form-check-label" for="mentallyDisabled">Mentally disabled/challenged individuals</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="prisoners" value="prisoners">
                      <label class="form-check-label" for="prisoners">Prisoners</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="physicallyDisabled" value="physicallyDisabled">
                      <label class="form-check-label" for="physicallyDisabled">Physically disabled/challenged individuals</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="other" value="other">
                      <label class="form-check-label" for="other">Other (please specify):</label>
                      <input type="text" class="form-control mt-2" id="otherText" placeholder="Please specify">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Will you obtain verbal consent from the pupils participating in the study?</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="verbalConsent" id="noConsent" value="no">
                      <label class="form-check-label" for="noConsent">No</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="verbalConsent" id="yesConsent" value="yes">
                      <label class="form-check-label" for="yesConsent">Yes</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p style="color: red">Please submit the Parental Approval Form with your application.</p>
                    <p style="color: red">Please submit the Parental Approval Form in addition to the Informed Consent Form that the students are expected to sign, with your application.</p>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">18. Briefly describe the sample characteristics, special restrictions and conditions for participation (for example, age group restriction, whether there is a requirement to be a member of a certain social group, etc.) Please explain.</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">19. Explain how you will invite participants to the study. If the invitation will be via e-mail, social media, various websites, and similar channels, you should insert the text of the announcement in the textbox below.</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">20. Please tick the method(s) to be used:</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="survey" value="survey">
                      <label class="form-check-label" for="survey">Survey</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="interview" value="interview">
                      <label class="form-check-label" for="interview">Interview</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="observation" value="observation">
                      <label class="form-check-label" for="observation">Observation</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="computerTest" value="computerTest">
                      <label class="form-check-label" for="computerTest">Computer test</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="videoRecording" value="videoRecording">
                      <label class="form-check-label" for="videoRecording">Video/film recording</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="voiceRecording" value="voiceRecording">
                      <label class="form-check-label" for="voiceRecording">Voice recording</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="physiologicalMeasurement" value="physiologicalMeasurement">
                      <label class="form-check-label" for="physiologicalMeasurement">Physiological measurement</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="biologicalSample" value="biologicalSample">
                      <label class="form-check-label" for="biologicalSample">Biological sample</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="chemicalSubstance" value="chemicalSubstance">
                      <label class="form-check-label" for="chemicalSubstance">Making participants use alcohol, drugs or any other chemical substance</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="highSimulation" value="highSimulation">
                      <label class="form-check-label" for="highSimulation">Exposure to high simulation (such as light, sound)</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="otherMethod" value="otherMethod">
                      <label class="form-check-label" for="otherMethod">Other (Please specify):</label>
                      <input type="text" class="form-control mt-2" id="otherMethodText" placeholder="Please specify">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">21. Write down the possible contribution of this work to your field and/or society (one paragraph at most).</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>

              </form>




                <label class="form-label" for="">I confirm that the information I have given above is
                    accurate
                    to the best of my knowledge</label>
                <!--[if BLOCK]><![endif]-->                            <!--Extra-->

                <div class="mb-3 row">
                    <div class="col-md">
                        <label class="form-label">Supervisor's (if any) Name and Surname:</label>
                        <input wire:model.live='sname' class="form-control" type="text">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div class="col">
                        <label class="form-label">Date:</label>
                        <input wire:model.live='sdate' class="form-control" type="date">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                 <!--[if ENDBLOCK]><![endif]--> <!-- Extra-->
            </div>
            <div class="mb-3 row">
                <div class="col-md">
                    <label class="form-label">Researcher's Name and Surname:</label>
                    <input wire:model.live='rname' name="researcher_name" class="form-control"
                        type="text">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="col-md">
                    <label class="form-label">Date:</label>
                    <input wire:model.live='rdate' class="form-control" type="date">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

            </div>



            <div class="mb-3 row">
                <div class="col-md">
                    <label class="form-label">Code:FRM-ETK-001</label>
                </div>
                <div class="col-md">
                    <label class="form-label">Rev. No. / Date: 00 Y. </label>
                </div>
                <div class="col-md">
                    <label class="form-label">Date: 24.07.2024</label>
                </div>

            </div>

            <div class="button d-flex flex-row align-items-center justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@stop
