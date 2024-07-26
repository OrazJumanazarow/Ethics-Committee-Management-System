@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>APPLICATION FORMS</h1>
@stop

@section('content')



    <!-- Main content -->
    <section class="content ml-4">
      <div class="container-fluid">
        <form wire:submit="createForm1" action="" class="main">
            <div class="d-flex justify-content-center">
                <img style="width: 15%" src="img\logo6.png" alt="">
            </div>


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
                    <input wire:model.live="title_of_study" value="" type="text" class="form-control" placeholder="Summarizes the main idea or ideas of your study">
                </div>
            </div>
            <!-- 2 -->
            <form>
                <fieldset class="form-group">
                  <legend>2. Type of Study</legend>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="studyType" id="academicStaffStudy" value="academicStaffStudy">
                    <label class="form-check-label" for="academicStaffStudy">Academic Staff Study</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="studyType" id="doctorateThesis" value="doctorateThesis">
                    <label class="form-check-label" for="doctorateThesis">Doctorate Thesis</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="studyType" id="masterThesis" value="masterThesis">
                    <label class="form-check-label" for="masterThesis">Master Thesis</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="studyType" id="otherSpecify" value="otherSpecify">
                    <label class="form-check-label" for="otherSpecify">Other (Specify)</label>
                  </div>
                  <div class="form-group" id="otherSpecifyInputContainer" style="display: none;">
                    <label for="otherSpecifyInput">Specify:</label>
                    <input type="text" class="form-control" id="otherSpecifyInput" name="otherSpecify">
                  </div>
                </fieldset>
              </form>

              <script>
                const otherSpecifyInput = document.getElementById('otherSpecifyInput');
                const otherSpecifyInputContainer = document.getElementById('otherSpecifyInputContainer');

                document.querySelectorAll('input[name="studyType"]').forEach((radio) => {
                  radio.addEventListener('change', function () {
                    if (this.value === 'otherSpecify') {
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
                    <select wire:model.live="advisor_title" class="form-select form-control"
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
                    <input wire:model.live='researcher_name' type="text" class="form-control" placeholder="">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Department:</label>
                    <input wire:model.live='researcher_department' type="text" class="form-control"
                        placeholder="">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Institute:</label>
                    <input wire:model.live='researcher_institution' type="text" class="form-control"
                        placeholder="">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Phone:</label>
                    <input wire:model.live='researcher_phone' type="text" class="form-control"
                        placeholder="+90**********">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Address:</label>
                    <textarea wire:model.live='researcher_address' type="text" class="form-control" placeholder="" rows="3"></textarea>
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    <label class="form-label-small headers">Email:</label>
                    <input wire:model.live='researcher_email' type="text" class="form-control"
                        placeholder="">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <!-- 4 -->
            <div class="mb-3 row" id="section-4">
                <label class="form-label">4. Other Researchers (if any)</label>
                <div class="col" style="margin: 10px">
                    <br>
                    <a wire:click.prevent="addResInput" class="btn btn-light w-25">Add</a>
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
                        <select wire:model.live="advisor_title" class="form-select form-control"
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
                        <input wire:model.live="advisor_name" type="text" class="form-control ">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">Department:</label>
                        <input wire:model.live="advisor_department" type="text" class="form-control">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>


                    <div class="col-md">
                        <label class="form-label-small headers">Phone:</label>
                        <input wire:model.live="advisor_phone" type="text" class="form-control"
                            placeholder="+90**********">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">Address:</label>
                        <input wire:model.live="advisor_address" type="text" class="form-control"
                            name="Address:">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <label class="form-label-small headers">E-mail:</label>
                        <input wire:model.live="advisor_email" type="text" class="form-control"
                            name="E-mail:" placeholder="example@gmail.com">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>


             <!--[if ENDBLOCK]><![endif]-->
            <!-- 6 -->


                <div class="form-label">6. Expected time frame of the study:</div>
                <p>
                    <span class="warnings">The start date of the study should be at least three weeks from your
                        date
                        of
                        application.</span>
                </p>
                <div class="row">
                <div class="col-md">
                    <label class="form-label-small">Start:</label>
                    <input id="expected_start" wire:model='expected_start' class="form-control"
                        type="date" min="2024-08-14">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>


                <div class="col-md">
                    <label class="form-label-small">End:</label>
                    <input id="expected_end" wire:model='expected_end' class="form-control" type="date">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            </div>

            </div>


            <!-- 7 -->
            <div class="mb-3 row">
                <label class="form-label">7. Organizations, institutions in which data collection is planned to
                    be
                    accomplished:</label>

                <div class="col" style="margin: 10px">
                    <br>
                    <a wire:click.prevent="addOrgInput" class="btn btn-light w-25">Add</a>
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
                    <input wire:model.live="question_8" value="no" class="form-check-input"
                        type="radio" wire:click="showOtherInput1">
                    <label class="form-label-small" for="flexCheckDefault1">No</label>
                </div>

                <div class="form-check col">
                    <input wire:model.live="question_8" value="yes" class="form-check-input"
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
                    <input wire:model.live='question_9' class="form-check-input" value="Supported"
                        type="radio">
                    <label class="form-label-small">Supported</label>
                </div>
                <div class="form-check">
                    <input wire:model.live='question_9' class="form-check-input" value="Not Supported"
                        type="radio">
                    <label class="form-label-small">Not Supported</label>
                </div>

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <br>

                <label for="" class="form-label">Will the ethical approval be used for a project
                    submission
                    (TUBITAK, EU
                    projects etc.)?</label>

                <div class="form-check row mb-3">
                    <input wire:click='showOtherInput3' wire:model.live='question_9_3'
                        class="form-check-input" type="radio" value="no">
                    <label class="form-label-small">No</label>

                <div class="form-check col">
                    <input wire:click='showOtherInput3' wire:model.live='question_9_3'
                        class="form-check-input" type="radio" value="yes">
                    <label class="form-label-small">Yes(specify)</label>
                </div>
            </div>

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


            </div>
            <!-- 10 -->
            <div class="mb-3 row">
                <div class="form-label">10. Status of the application:</div>
                <div class="form-check">
                    <input wire:click='showFields' wire:model.live='status' class="form-check-input"
                        value="New" type="radio">
                    <label class="form-label-small">New</label>
                </div>
                <div class="form-check">
                    <input wire:click='showFields' wire:model.live='status' class="form-check-input"
                        value="Revised" type="radio">
                    <label class="form-label-small">Revised</label>
                </div>


                <div class="form-check">
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





            <div class="mb-3 row">
                <label class="form-label" for="">I confirm that the information I have given above is
                    accurate
                    to the best of my knowledge</label>
                <!--[if BLOCK]><![endif]-->                            <!--Extra-->
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
