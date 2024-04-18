
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/customer.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard Sidebar Menu</title>
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/deam.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="logo">CRM</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link drop-wrapper list_active" id="1">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Client</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-1" style="padding-left: 60px; display: none;">
                        <a href="lead" class="link1 ">Lead</a>
                        <a href="customer" class="link2 sub-list-active">Customer</a>
                        <a href="service" class="link2">Service</a>
                    </div>

                    <li class="nav-link drop-wrapper" id="2">
                        <a href="#">
                            <i class='bx bx-notepad icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Ticket</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-2" style="padding-left: 60px; display: none;">
                        <a href="atm" class="link1">Atm</a>
                        <a href="ticket" class="link2">Ticket</a>
                        <a href="ServiceRequest" class="link3">Service request</a>
                    </div>
                    
                    <li class="nav-link drop-wrapper" id="3">
                        <a href="#">
                            <i class='bx bxs-report icon' ></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Report</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-3" style="padding-left: 60px; display: none;">
                        <a href="sale" class="link1">Sale</a>
                        <a href="technical" class="link2">Technical</a>
                    </div>

                    <li class="nav-link drop-wrapper" id="4">
                        <a href="#">
                            <i class='bx bx-user-circle icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Staff</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-4" style="padding-left: 60px; display: none;">
                        <a href="staff" class="link1 text">Staff</a>
                        <a href="manage" class="link2">Role</a>
                        <a href="permission" class="link2">Permission</a>
                    </div>


                    <li class="nav-link">
                        <a href="calendar">
                            <i class='bx bx-calendar icon' ></i>
                            <span class="text nav-text">Calender</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home" >
        <div class="sidebar-on">
            <div>
                <div style="float: left;"> <p class="nameList">ABA Bank</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                    <div class="profile">
                      <img src="../image/staff.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div style="float: left;"><p class="nameList-service">Service</p></div>
        <div style="float:right;" >
        <a href="customer">
            <button class="btn-exit-service" >&nbsp;&nbsp;EXIT</button></a>
            <button class="btn-create-service" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;SERVICE</button>
          </div>
  </div> 
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
            <table>
            <table>
    <tr>
      <th>ID</th>
      <th>Service</th>
      <th>Create Date</th>
      <th>Action</th>
    </tr>  
    <tr>
      <td>1</td>
      <td>Core Banking</td>
      <td>28/03/2024</td>
      <td>
          <span>
              <button class="btn-crud-list-customer de-view-service" style="background-color: #423EFF; border-radius: 4px;">
              <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
            </span>
          <span>
              <button class="btn-crud-list-customer edit-pppservice" style="background-color: #67A7CC; border-radius: 4px;">
              <i style="color: white;" class="fa fa-pencil" aria-hidden="true"></i>            </button>
            </span>
            <span>
              <button class="btn-crud-list-customer delete-service"style="background-color: #F60E0E;border-radius: 4px;">
              <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </span>
      </td>
    </tr>
</table>

</table>

<!------------------ End page of listing service -------------------------------------------------->
<!-------------------Start of popup create service -------------------------------------------------->
<div class="background-popup-create-service">
  <div class="popup-create-service">
  <div>
        <div class="a">
            <div class="name-new-new-pservice" style="float:left;">ADD SERVICE</div>
            <div class="icon-cancel-new-pservice" style="float:right;"><span><i class="fa fa-times-circle-o close-create-lead" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-pservice" style="float:left; ">
            <label class="label" for="name-company">Service *</label>
            <input type="text" class="form-control-new-pservice" required>
        </div>
        <div class="form-group-new-pservice" style="float:right; ">
            <label class="label" for="email-company">Customer designation *</label>
            <input type="email" class="form-control-new-pservice" required>
        </div>
        <div class="form-group-new-pservice" style="float:left;">
            <label class="label" for="phone-number-company">Create Date *</label>
            <input type="date" class="form-control-new-pservice" style="width: 203px;">
        </div>
        <div class="form-group-new-pservice" style="float:right;">
            <label class="label" for="city-company">Description *</label>
            <input type="text" class="form-control-new-pservice" required>
        </div>
        <div class="form-group-new-pservice" style="float:left; width:235px;">
            <label  class="label" for="input-by">Create by *</label>
            <select name="input-by" class="form-control-new-pservice">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-pservice" style="padding: 20px 0px 0px 335px;" >
            <button class="btn-save-pservice">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup create service -------------------------------------------------->
<!-------------------Start of popup edit service -------------------------------------------------->
<div class="background-popup-edit-service">
  <div class="popup-create-service">
  <div>
        <div class="a">
            <div class="name-edit-new-pservice" style="float:left;">EDIT SERVICE</div>
            <div class="icon-cancel-edit-pservice" style="float:right;"><span><i class="fa fa-times-circle-o close-edit-pservice" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-edit-pservice" style="float:left; ">
            <label class="label" for="name-company">Service *</label>
            <input type="text" class="form-control-edit-pservice" required>
        </div>
        <div class="form-group-edit-pservice" style="float:right; ">
            <label class="label" for="email-company">Customer designation *</label>
            <input type="email" class="form-control-edit-pservice" required>
        </div>
        <div class="form-group-edit-pservice" style="float:left;">
            <label class="label" for="phone-number-company">Create Date *</label>
            <input type="date" class="form-control-edit-pservice" style="width: 203px;">
        </div>
        <div class="form-group-edit-pservice" style="float:right;">
            <label class="label" for="city-company">Description *</label>
            <input type="text" class="form-control-edit-pservice" required>
        </div>
        <div class="form-group-edit-pservice" style="float:left; width:235px;">
            <label  class="label" for="input-by">Create by *</label>
            <select name="input-by" class="form-control-edit-pservice">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-edit-pservice" style="padding: 20px 0px 0px 335px;" >
            <button class="btn-save-pservice-edit">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup edit service -------------------------------------------------->
        <!------------ start of view service ----------------->
        <div class="background-popup-view-service" >
        <div class="col-lg-4 contain-service-view "  >
          <div class="card mb-4">
              <div class="detail"><p class="p-detail">SERVICE DETAILS</p></div>         
            <div class="card-body text-center">
                <div class="card-body form-view">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Service</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Core Banking</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Customer designation</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Pov sidanak</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Create date</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">23/03/2024</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Description</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Core Banking....</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Create By</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Sophart Chordaphea</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="">
              <button type="button" class="btn-exit-service-view">Exit</button>
            </div>
          </div>
        </div>
      </div>
        <!------------ end of view service ----------------->
        <!------------- Form delete service ------------>
  <div class="background-popup-delete-service">
    <div class="delete-dev-service">
        <div class="all-div-service" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-service" style="font-size: 20px;">Do you want to delete this service?</h2>
        <div class="btn-dev-service">
        <button class="btn-cancel-delete-service">Cancel</button>
        <button class="btn-confirm-delete-service">Delete</button>
        </div>
        </div>
    </div>  
  </div>
        <!------------ end of delete service ----------------->
            </div>
            </div>
        </nav>
    </section>
    <script>

        const dropWrapper = document.querySelectorAll('.drop-wrapper')
        dropWrapper.forEach((element) => {
            const dropElementId = 'drop-container-' + element.getAttribute('id').toString()
            const dropElement = document.getElementById(dropElementId)
            element.addEventListener('click', function () {
                dropElement.classList.toggle('show');
            });
        })
        // start sidebar
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })
        searchBtn.addEventListener("click" , () =>{
            sidebar.classList.remove("close");
        })
        modeSwitch.addEventListener("click" , () =>{
            body.classList.toggle("dark");
            
            if(body.classList.contains("dark")){
                modeText.innerText = "Light mode";
            }else{
                modeText.innerText = "Dark mode";
            }
        });
        // end sidebar
    let pop_up0 = document.querySelector(".background-popup-create-service")
    let create_service_button = document.querySelector(".btn-create-service")
    let close_service_customer = document.querySelector(".icon-cancel-new-pservice")

    create_service_button.onclick = () => {
      pop_up0.style.display = "block"
      close_service_customer.onclick = () => pop_up0.style.display = "none"
    }

    let pop_up00 = document.querySelector(".background-popup-delete-service")
    let btn_delete_service = document.querySelector(".delete-service")
    let btn_cancel_delete_service = document.querySelector(".btn-cancel-delete-service")

    btn_delete_service.onclick = () => {
        pop_up00.style.display = "block"
        btn_cancel_delete_service.onclick = () => pop_up00.style.display = "none"
    }

    let pop_up01 = document.querySelector(".background-popup-edit-service") 
    let btn_edit_service = document.querySelector(".edit-pppservice") 
    let btn_cancel_edit_service = document.querySelector(".icon-cancel-edit-pservice")

    btn_edit_service.onclick = () => {
        pop_up01.style.display = "block"
        btn_cancel_edit_service.onclick = () => pop_up01.style.display = "none"
    }

    let pop_up02 = document.querySelector(".background-popup-view-service")
    let btn_view_service = document.querySelector(".de-view-service")
    let btn_cancel_view_service = document.querySelector(".btn-exit-service-view")

    btn_view_service.onclick = () => {
        pop_up02.style.display = "block"
        btn_cancel_view_service.onclick = () => pop_up02.style.display = "none"
    }
 
    </script>
</body>

</html>