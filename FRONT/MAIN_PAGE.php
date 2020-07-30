<!DOCTYPE html>
<html lang="en" style="overflow-y: scroll;">
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
                        <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="zero-config" class="table table-hover dataTable" style="width:100%" role="grid" aria-describedby="zero-config_info">                            <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" style="width: 49px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Ім'я: activate to sort column ascending" style="width: 105px;">Ім'я</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="вік: activate to sort column ascending" style="width: 110px;">вік</th>
                                            <th class="no-content sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 124px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>                                                                                                                                                                                                                                                                                        <tr id="ROW25" role="row">
                                            <td class="sorting_1">25</td>
                                            <td>кеп</td>
                                            <td>54</td>
                                            <td><button data-id="25" class="B_POST_DEL btn btn-danger">Delete</button> </td>
                                        </tr><tr id="ROW26" role="row">
                                            <td class="sorting_1">26</td>
                                            <td>керке</td>
                                            <td>5464</td>
                                            <td><button data-id="26" class="B_POST_DEL btn btn-danger">Delete</button> </td>
                                        </tr><tr id="ROW27" role="row">
                                            <td class="sorting_1">27</td>
                                            <td>керкер</td>
                                            <td>4646</td>
                                            <td><button data-id="27" class="B_POST_DEL btn btn-danger">Delete</button> </td>
                                        </tr><tr id="ROW28" role="row">
                                            <td class="sorting_1">28</td>
                                            <td>керкер</td>
                                            <td>46</td>
                                            <td><button data-id="28" class="B_POST_DEL btn btn-danger">Delete</button> </td>
                                        </tr><tr id="ROW29" role="row">
                                            <td class="sorting_1">29</td>
                                            <td>werwerwer</td>
                                            <td>234</td>
                                            <td><button data-id="29" class="B_POST_DEL btn btn-danger">Delete</button> </td>
                                        </tr></tbody>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Ім'я</th><th rowspan="1" colspan="1">вік</th><th class="no-content" rowspan="1" colspan="1"></th></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row" id="page_num">
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="zero-config_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="zero-config_previous">
                                                <a href="#" aria-controls="zero-config" data-dt-idx="0" tabindex="0" class="page-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="zero-config" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>

                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="zero-config" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="zero-config_next">
                                                <a href="#" aria-controls="zero-config" data-dt-idx="3" tabindex="0" class="page-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script>

    var Page_now=1;
    var Page_count=0;

    //update table by PageNum
    var Update_T =function(numPage)
    {

        //Set Pre Page
        if(numPage==-1)
        {
            numPage=Page_now-1;
        }
        //Set next Page
        else if(numPage==-2)
        {
            numPage=Page_now+1;
        }
        //console.log(numPage);

        if(numPage>0){
        $.post
        (
            'https://ufdub.com/GDW/?PAGE=API&API=POST_GET',
            {
                PageNow: numPage
            },
            function (result) {

                    var content = "";
                //step 1 Get info from server
                //alert (result);
                arreyGET = JSON.parse(result);
                var arrayP_Page_nav = arreyGET[0];
                var arrayP_Page_tab = arreyGET[1];
                //console.dir(arrayP_Page_nav);
                //console.dir(arrayP_Page_tab);
                if(numPage==0)
                {

                    Update_T(1);
                }
                else if (numPage>arrayP_Page_nav.PageCount)
                {
                    Update_T(arrayP_Page_nav.PageCount);
                }
                else
                {
                //step 2 rebuild table

                document.getElementById('zero-config').innerHTML = "";
                //set top
                content = "                            <thead>\n" +
                    "                            <tr>\n" +
                    "                                <th>ID</th>\n" +
                    "                                <th>Ім'я</th>\n" +
                    "                                <th>вік</th>\n" +
                    "                                <th class=\"no-content\"></th>\n" +
                    "                            </tr>\n" +
                    "                            </thead>\n" +
                    "                            <tbody>";

                for (var i = 0; arrayP_Page_tab.length > i; i++) {
                    content = content + "                            <tr id=\"ROW" + arrayP_Page_tab[i].ID + "\">\n" +
                        "                                <td>" + arrayP_Page_tab[i].ID + "</td>\n" +
                        "                                <td>" + arrayP_Page_tab[i].Name_user + "</td>\n" +
                        "                                <td>" + arrayP_Page_tab[i].Age + "</td>\n" +
                        "                                <td><button data-id=\"" + arrayP_Page_tab[i].ID + "\" class='B_POST_DEL btn btn-danger'>Delete</button> </td>\n" +
                        "                            </tr>";
                }


                content = content + "</tbody>\n" +
                    "                            <tfoot>\n" +
                    "                            <tr>\n" +
                    "                                <th>ID</th>\n" +
                    "                                <th>Ім'я</th>\n" +
                    "                                <th>вік</th>\n" +
                    "                                <th class=\"no-content\"></th>\n" +
                    "                            </tr>\n" +
                    "                            </tfoot>";


                document.getElementById('zero-config').innerHTML = content;

                //del row
                $('.B_POST_DEL').click(function () {
                    $.post
                    (
                        'https://ufdub.com/GDW/?PAGE=API&API=POST_DELETE',
                        {
                            ID: $(this).attr("data-id")
                        },
                        function (result) {
                            //alert("TEST");
                            Snackbar.show({
                                text: 'Видалено',
                                pos: 'top-center',
                                actionTextColor: '#fff',
                                backgroundColor: '#e72242'
                            });
                            Update_T(Page_now);
                            //$('#ROW' + $(this).attr("data-id")).remove();
                            if (result === "success") {


                            } else {

                            }
                        }
                    );
                });

                //step 3 rebuild page nav

                if (Page_count !== arrayP_Page_nav.PageCount) {
                    Page_count = arrayP_Page_nav.PageCount;
                    content = "<ul class=\"pagination\">";
                    content = content + "<li class=\"paginate_button page-item previous disabled\" id=\"zero-config_previous\">\n" +
                        "                                                <a href=\"#\" aria-controls=\"zero-config\"  data-dt-idx=\"-1\" tabindex=\"0\" class=\"page-link\">\n" +
                        "                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-left\">\n" +
                        "                                                        <line x1=\"19\" y1=\"12\" x2=\"5\" y2=\"12\"></line>\n" +
                        "                                                        <polyline points=\"12 19 5 12 12 5\"></polyline>\n" +
                        "                                                    </svg>\n" +
                        "                                                </a>\n" +
                        "                                            </li>";


                    for (var i = 1; i < Page_count + 1; i++) {
                        content = content + "<li class=\"paginate_button page-item \" id=\"Page_b_" + i + "\">\n" +
                            "                                                <a href=\"#\" aria-controls=\"zero-config\" data-dt-idx=\"" + i + "\" tabindex=\"0\" class=\"page-link\" id=\"Page_b_" + i + "_L\">" + i + "</a>\n" +
                            "                                            </li>";
                    }

                    content = content + "<li class=\"paginate_button page-item next\" id=\"zero-config_next\">\n" +
                        "                                                <a href=\"#\" aria-controls=\"zero-config\" data-dt-idx=\"-2\" tabindex=\"0\" class=\"page-link\">\n" +
                        "                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-right\">\n" +
                        "                                                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>\n" +
                        "                                                        <polyline points=\"12 5 19 12 12 19\"></polyline>\n" +
                        "                                                    </svg>\n" +
                        "                                                </a>\n" +
                        "                                            </li>";
                    document.getElementById("zero-config_paginate").innerHTML=content;
                    //Set event on click
                    $('.page-link').click(function () {
                        Update_T(parseInt($(this).attr("data-dt-idx")));
                    });


                }
                // set active page
                    try {
                        document.getElementById("Page_b_" + Page_now).className = document.getElementById("Page_b_" + Page_now).className.replace("active", "");

                    } catch (e) {

                    }
                try {
                    document.getElementById("Page_b_" + numPage).className = document.getElementById("Page_b_" + numPage).className + " active";
                } catch (e) {

                }


                if(arrayP_Page_nav.PageCount===numPage)
                {
                    document.getElementById("zero-config_previous" ).className = document.getElementById("zero-config_previous").className.replace("disabled", "");
                    document.getElementById("zero-config_next" ).className = document.getElementById("zero-config_next").className+" disabled";
                }
                else if(1===numPage)
                    {
                        document.getElementById("zero-config_previous" ).className = document.getElementById("zero-config_previous").className+" disabled";
                        document.getElementById("zero-config_next" ).className = document.getElementById("zero-config_next").className.replace("disabled", "");
                    }
                else
                    {
                        document.getElementById("zero-config_previous" ).className = document.getElementById("zero-config_previous").className.replace("disabled", "");
                        document.getElementById("zero-config_next" ).className = document.getElementById("zero-config_next").className.replace("disabled", "");
                    }
                    Page_now=numPage;
                }

            }
        );

        }
    };


    //update table
    Update_T(1);






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
                    Update_T(1);
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


<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>