@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/main.js"></script>


    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.7/b-3.0.2/fh-4.0.1/r-3.0.2/sp-2.3.1/datatables.min.css"
        rel="stylesheet">

    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.7/b-3.0.2/fh-4.0.1/r-3.0.2/sp-2.3.1/datatables.min.js"></script>




</head>

<body>
    <main class="d-flex flex-nowrap">


        <div class="container">
        <div class="larg">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h1> APPLICATION FORMS</h1>
                    <div class="accordion-header" id="flush-headingOne">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                            <h3> ETHICS COMMITTEE APPLICATION FORM</h3>

                        </button>
                    </div>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Studies conducted in Final International University (FIU) and/or
                            studies
                            conducted by FIU
                            personnel/students, which involve collecting data from human participants, are subject to
                            review
                            by the
                            FIU Ethics Committee (EC). Applicants should submit this application form to the FIU EC
                            along
                            with
                            the other required documents (see the Application Check List). Approval of the EC is
                            required
                            before the
                            start of data collection from human participants.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="flush-headingTwo">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <h3>ETHICS COMMITTEE INFORMED CONSENT FORM </h3>
                        </button>
                    </div>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                            nesciunt. Aut deleniti odit soluta quisquam veniam nobis quis repudiandae sed!.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" id="flush-headingThree">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <h3>ETHICS COMMITTEE PROJECT INFORMATION FORM</h3>
                        </button>
                    </div>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> A standardized document used in research and academic institutions,
                            healthcare organizations, and other settings where research or projects involving human
                            participants are conducted. This form serves as a structured template for collecting
                            essential
                            information about a proposed research study or project that requires ethical review and
                            approval
                            from an ethics committee or review board.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header" id="flush-headingFour">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            <h3>ETHICS COMMITTEE APPLICATION CHECKLIST</h3>
                        </button>
                    </div>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> Researchers applying to the Final International University (FIU)
                            Ethics
                            Committee to conduct a research
                            that requires data collection from people must have completed all the documents listed in
                            the
                            Application
                            Checklist. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </main>


    <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=c4077c56"   data-csrf="qcMCer5gMO4lj3E7tfQpoW0TymTApli4bU6FkLSc" data-uri="/livewire/update" data-navigate-once="true"></script>

</body>

</html>
@stop

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    html,
    body {
        height: 100%;
        font-family: 'Poppins';

    }

    main {
        height: 100%;
        overflow-y: auto;
    }

    .sidebar,
    .sidebar .card {
        background-color: #fff;
        height: 100%;
    }


    #page-content-wrapper {
        width: 100%;
        height: 100%;
    }

    #toggle #arrow-icon {
        transition: 0.5s;
    }

    #toggle:not(.collapsed) #arrow-icon {
        transform: rotate(-180deg);
    }

    #toggle.collapsed #arrow-icon {
        transform: rotate(0deg);
    }
</style>
@stop


