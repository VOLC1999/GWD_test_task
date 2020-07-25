<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Golden Web Digital - Test</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- toastr -->
    <link href="plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

</head>

<body class="sidebar-noneoverflow">

<!--  BEGIN NAVBAR  -->
<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="index.html"><img alt="logo" src="assets/img/90x90.jpg"> <span class="navbar-brand-name">Golden Web Digital - Test</span></a>
        </div>


    </header>
</div>
<!--  END NAVBAR  -->
<!--  BEGIN CONTENT AREA  -->
<div id="" class="">

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-4"><p>Ім'я</p><input id="Add_name" class="form-control"></div>
                        <div class="col-4"><p>Вік.</p><input id="Add_age" type="number" min="0" class="form-control"></div>
                        <div class="col-4"><button style="width: 100%;height: 100%" class="btn btn-success B_POST_ADD">Додасти</button> </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4" id="basic_table">
                        <table id="zero-config" class="table table-hover" style="width:100%">

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 VOLCUA, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="plugins/table/datatable/datatables.js"></script>

<script>


    //update table

    var Up_table=function()
    {
        document.getElementById("basic_table").innerHTML="                        <table id=\"zero-config\" class=\"table table-hover\" style=\"width:100%\">\n" +
            "\n" +
            "                        </table>";
        //get json
        $.getJSON('https://ufdub.com/GDW/?PAGE=API&API=POST_GET', function(data) {
            console.dir(data);

            //clear old TB
            document.getElementById('zero-config').innerHTML="";
            //set top
            content="                            <thead>\n" +
                "                            <tr>\n" +
                "                                <th>ID</th>\n" +
                "                                <th>Ім'я</th>\n" +
                "                                <th>вік</th>\n" +
                "                                <th class=\"no-content\"></th>\n" +
                "                            </tr>\n" +
                "                            </thead>\n" +
                "                            <tbody>";

            for(var i=0;data.length>i;i++)
            {
                content=content+"                            <tr id=\"ROW"+data[i].ID+"\">\n" +
            "                                <td>"+data[i].ID+"</td>\n" +
            "                                <td>"+data[i].Name_user+"</td>\n" +
            "                                <td>"+data[i].Age+"</td>\n" +
            "                                <td><button data-id=\""+data[i].ID+"\" class='B_POST_DEL btn btn-danger'>Delete</button> </td>\n" +
            "                            </tr>";
            }


            content=content+"</tbody>\n" +
                "                            <tfoot>\n" +
                "                            <tr>\n" +
                "                                <th>ID</th>\n" +
                "                                <th>Ім'я</th>\n" +
                "                                <th>вік</th>\n" +
                "                                <th class=\"no-content\"></th>\n" +
                "                            </tr>\n" +
                "                            </tfoot>";


            document.getElementById('zero-config').innerHTML=content;

            $('#zero-config').DataTable({
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [5],
                "pageLength": 5
            });

            //del row
            $('.B_POST_DEL').click(function() {
                $.post
                (
                    'https://ufdub.com/GDW/?PAGE=API&API=POST_DELETE',
                    {
                        ID:$(this).attr("data-id")
                    },
                    function (result) {
                        //alert("TEST");
                        Snackbar.show({
                            text: 'Видалено',
                            pos: 'top-center',
                            actionTextColor: '#fff',
                            backgroundColor: '#e72242'
                        });
                        Up_table();
                        //$('#ROW' + $(this).attr("data-id")).remove();
                        if(result==="success")
                        {


                        }
                        else
                        {

                        }
                    }
                );
            });

        });

    };
    Up_table();



    //add new row
    $('.B_POST_ADD').click(function() {
        $.post
        (
            'https://ufdub.com/GDW/?PAGE=API&API=POST_ADD',
            {
                Name:$('#Add_name').val(),
                Age:$('#Add_age').val()
            },
            function (result) {

                if(result==="success")
                {
                    $("#Add_name").val("");
                    $("#Add_age").val("");
                    Snackbar.show({
                        text: 'Було додано',
                        pos: 'top-center',
                        actionTextColor: '#fff',
                        backgroundColor: '#8dbf42'
                    });
                    Up_table();
                }
                else
                {
                    alert(result);
                }
            }
        );
    });



</script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/js/scrollspyNav.js"></script>
<!-- toastr -->
<script src="plugins/notification/snackbar/snackbar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="assets/js/components/notification/custom-snackbar.js"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<script>
    // Get the Toast button
    var toastButton = document.getElementById("toast-btn");
    // Get the Toast element
    var toastElement = document.getElementsByClassName("toast")[0];

    toastButton.onclick = function() {
        $('.toast').toast('show');
    }


</script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>