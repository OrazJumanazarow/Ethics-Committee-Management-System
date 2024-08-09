@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1> INFORMED CONSENT FORM</h1>
@stop

@section('content')
<section class="content ml-4">
    <div class="container-fluid">
        <form wire:submit='createConsentForm' id="main" action="">
            <div class="main">
                <div class="d-flex justify-content-center">
                    <img style="width: 15%" src="img\logo6.png" alt="">
                </div>


                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label warnings">Please select your Ethics Committee Application Form that you
                        want to attach before
                        filling out the Informed Consent Form.</p>
                    <select style="width: 50%"
                        class="form-select form-select-lg"- aria-label=".form-select-lg">
                        <option value="" hidden>Select a Form</option>
                        <!--[if BLOCK]><![endif]-->                                    <option value="128">
                                <span>№324</span>
                                <span> - </span>
                                <span>test</span>
                            </option>
                                                            <option value="148">
                                <span>№349</span>
                                <span> - </span>
                                <span>test</span>
                            </option>
                                                            <option value="149">
                                <span>№350</span>
                                <span> - </span>
                                <span>Gen Alpha</span>
                            </option>
                                                            <option value="151">
                                <span>№354</span>
                                <span> - </span>
                                <span>/////////</span>
                            </option>
                                                            <option value="153">
                                <span>№356</span>
                                <span> - </span>
                                <span>Banks Newton Plc</span>
                            </option>
                                                            <option value="154">
                                <span>№357</span>
                                <span> - </span>
                                <span>Banks Newton Plc</span>
                            </option>
                                                            <option value="155">
                                <span>№358</span>
                                <span> - </span>
                                <span>Banks Newton Plc</span>
                            </option>
                                                            <option value="156">
                                <span>№359</span>
                                <span> - </span>
                                <span>Banks Newton Plc</span>
                            </option>
                                                            <option value="158">
                                <span>№366</span>
                                <span> - </span>
                                <span>testt</span>
                            </option>
                                                            <option value="159">
                                <span>№367</span>
                                <span> - </span>
                                <span>testt</span>
                            </option>
                                                            <option value="160">
                                <span>№368</span>
                                <span> - </span>
                                <span>testt</span>
                            </option>
                         <!--[if ENDBLOCK]><![endif]-->


                    </select>
                </div>
                <br />
                <br />
                <br />
                <p class="form-label consent-text">Dear Participant, </p>



                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text">This research project is being conducted by </p>
                    <input  value="" class="form-control"
                        type="text" readonly>
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text">of</p>
                    <input  value=""
                        class="form-control" type="text" readonly>
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text">This research project aims
                        to investigate</p>
                    <input name="aims_to_investigate" class="form-control" type="text">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text"> This survey is intended for people <span
                            style="font-style: italic; text-decoration:underline">18
                            years or older</span>
                        The proposed study is entitled</p>
                    <input  value="" class="form-control"
                        type="text" readonly>
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text"> You will be a participant of the project if
                        you read and approve this informed consent form. The survey link will be active between
                    </p>

                </div>

                <div class="row consent-row justify-content-md-center">
                    <div class="col">
                        <input name='start_time' class="form-control" type="date">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <p class="col-md-auto form-label consent-text"> and</p>
                    <div class="col">
                        <input name='end_time' class=" col form-control" type="date">
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>

                </div>

                <div class="">
                    <p class="form-label consent-text"> You are expected to participate in this survey study
                        only
                        once. The survey will be</p>
                    <div class="col"> <select  style="width: 25%;"
                            class="form-select-lg" id="">
                            <option hidden>Select</option>
                            <option value="Online">Online</option>
                            <option value="Face to face">Face to face</option>
                            <option value="Both">Both</option>
                        </select> <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <p class="form-label consent-text">This survey is anonymous. Other than being anonymous, no information
                        is required to
                        identify you and you cannot be identified by the answers you supply. Information to be
                        obtained
                        within the scope of this study will only be shared in scientific publications,
                        presentations
                        and
                        online environments for educational purposes by the researcher. The data collected is
                        anonymous
                        and will be kept safely in an encrypted file on a computer. In our research, we
                        accept
                        and apply the basic principles</p>

                    <textarea name="survey_is_anonyms" style="margin: 5px 0" class="form-control" id=""
                        rows="3"></textarea>

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <p class="form-label consent-text">Participation in this study is voluntary. Your participation in this project can
                        contribute
                        to
                        your knowledge about
                    </p>
                    <input name="partification_explain" class="form-control" type="text">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text"> and can support you in </p>
                    <input name="can_support_explain" class="form-control" type="text">
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <p class="form-label consent-text">
                        None of
                        the steps in the survey can cause personal discomfort. However, if you feel
                        uncomfortable
                        for
                        any reason, you are free to quit the survey and leave the research without explaining
                        the
                        reason. In such a case, the information you provide will only be used by the researcher
                        with
                        your consent.

                        Thank you in advance for participating in this study. If you need any further
                        information
                        about
                        the study or if you have any question you would like to ask you can contact me on </p>

                </div>

                <div class="row consent-row justify-content-md-center">

                    <input value=""
                        class="col form-control" type="email" placeholder="email:" readonly>
                    <p class="col-md-auto form-label consent-text"></p>
                    <input value=""
                        class="col form-control" type="phone" placeholder="phone:" readonly>

                </div>
                <p class="form-label consent-text"> Thank you, </p>

                <div class="button d-flex flex-row align-items-center justify-content-end">
                    <button type="submit" class="btn submit btn-primary">Submit</button>
                </div>
                <br />
                <div class="row consent-row justify-content-center">
                    <p class="col">I accept to participate in this research.</p>
                    <p class="col">Yes / No</p>

                </div>
                <div class="row consent-row justify-content-center">
                    <p class="col">I allow research use of my photos and videos</p>
                    <p class="col">Yes / No</p>
                </div>
                <div class="row consent-row justify-content-center">
                    <p class="col">I allow my photos and videos to be used in the following: </p>
                </div>

                <div class="row consent-row justify-content-center">
                    <p class="col-5">Online Education environments</p>
                    <p class="col-5">Yes / No</p>
                </div>
                <div class="row consent-row justify-content-center">
                    <p class="col-5">Visual and written materials such as reports, articles, related news.</p>
                    <p class="col-5">Yes / No</p>
                </div>

                <p>Name and Surname of the participant:</p>
                <p>Signature:</p>
                <p>Date:</p>

                <p style="font-style: italic; margin-top: 30px">If you have questions about your participation
                    in the research and
                    the protection of your rights,
                    or if you believe that you are at risk or will be exposed to stress in any way, you can
                    contact
                    Final International University Ethics Committee (0392-6506666) by phone or via email
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a535b5f517a5c534f145f5e4f144e48">[email&#160;protected]</a></p>
<div class="mb-3 row">
            <div class="col-md">
                <label class="form-label">Code:FRM-ETK-004</label>
            </div>
            <div class="col-md">
                <label class="form-label">Rev. No. / Date: 00 Y. </label>
            </div>
             <div class="col-md">
                <label class="form-label">Date: 25.07.2024</label>
            </div>

</div>
            </div>

        </form>
</div>
</section>
@stop
