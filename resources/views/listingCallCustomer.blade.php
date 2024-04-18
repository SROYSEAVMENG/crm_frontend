
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listingCallCustomer.css">
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
        <div style="float: left;"><p class="nameList-call">Call</p></div>
        <div style="float:right;" >
        <a href="customer">
            <button class="btn-exit-call" >&nbsp;&nbsp;EXIT</button></a>
            <button class="btn-create-call" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;CALL</button>
          </div>
  </div> 
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
            <table>
            <table>
    <tr>
      <th>ID</th>
      <th>Date</th>
      <th>Call Type</th>
      <th>Status</th>
      <th>Create by</th>
      <th>Action</th>
    </tr>  
    <tr>
      <td>1</td>
      <td>28/03/2024</td>
      <td>Out going</td>
      <td>Under processing</td>
      <td>Pov sidanak</td>
      <td>
          <!-- <span>
              <button class="btn-crud-list-customer de-view-service" style="background-color: #423EFF; border-radius: 4px;">
              <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
            </span> -->
          <span>
              <button class="btn-crud-list-call edit-call" style="background-color: #67A7CC; border-radius: 4px;">
              <i style="color: white;" class="fa fa-pencil" aria-hidden="true"></i>            </button>
            </span>
            <span>
              <button class="btn-crud-list-call delete-call"style="background-color: #F60E0E;border-radius: 4px;">
              <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </span>
      </td>
    </tr>
</table>

</table>

<!------------------ End page of listing call -------------------------------------------------->
<!-------------------Start of popup create call -------------------------------------------------->
<div class="background-popup-create-call">
  <div class="popup-create-call">
  <div>
        <div class="a">
            <div class="name-new-new-call" style="float:left;">ADD CALL</div>
            <div class="icon-cancel-new-call" style="float:right;"><span><i class="fa fa-times-circle-o close-create-call" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-call" style="float:left; width:233px ">
            <label class="label" for="name-company">Date *</label>
            <input type="date" class="form-control-new-call" required>
        </div>
        <div class="form-group-new-call" style="float:right;width:230px">
            <label  class="label" for="input-by">Call Type *</label>
            <select name="input-by" class="form-control-new-call">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-call" style="float:left; ">
            <label class="label" for="email-company">Status *</label>
            <input type="text" class="form-control-new-call" required>
        </div>
        <div class="form-group-new-call" style="float:right;width:230px ">
            <label  class="label" for="input-by">Create by *</label>
            <select name="input-by" class="form-control-new-call">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-call" style="padding: 0px 0px 0px 335px;" >
            <button class="btn-save-call">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup create service -------------------------------------------------->
<!-------------------Start of popup edit service -------------------------------------------------->
<div class="background-popup-edit-call">
  <div class="popup-create-call">
  <div>
        <div class="a">
            <div class="name-edit-new-call" style="float:left;">EDIT CALL</div>
            <div class="icon-cancel-edit-call" style="float:right;"><span><i class="fa fa-times-circle-o close-edit-call" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-call" style="float:left; width:233px ">
            <label class="label" for="name-company">Date *</label>
            <input type="date" class="form-control-new-call" required>
        </div>
        <div class="form-group-new-call" style="float:right;width:230px">
            <label  class="label" for="input-by">Call Type *</label>
            <select name="input-by" class="form-control-new-call">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-call" style="float:left; ">
            <label class="label" for="email-company">Status *</label>
            <input type="text" class="form-control-new-call" required>
        </div>
        <div class="form-group-new-call" style="float:right;width:230px ">
            <label  class="label" for="input-by">Create by *</label>
            <select name="input-by" class="form-control-new-call">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-call" style="padding: 0px 0px 0px 335px;" >
            <button class="btn-update-call">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup edit service -------------------------------------------------->
        <!------------- Form delete service ------------>
  <div class="background-popup-delete-call">
    <div class="delete-dev-call">
        <div class="all-div-call" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-call" style="font-size: 20px;">Do you want to delete this call?</h2>
        <div class="btn-dev-call">
        <button class="btn-cancel-delete-call">Cancel</button>
        <button class="btn-confirm-delete-call">Delete</button>
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
    let pop_up001 = document.querySelector(".background-popup-create-call")
    let create_call_button = document.querySelector(".btn-create-call")
    let close_call_call = document.querySelector(".icon-cancel-new-call")

    create_call_button.onclick = () => {
      pop_up001.style.display = "block"
      close_call_call.onclick = () => pop_up001.style.display = "none"
    }

    let pop_up003 = document.querySelector(".background-popup-delete-call")
    let btn_delete_call = document.querySelector(".delete-call")
    let btn_cancel_delete_call = document.querySelector(".btn-cancel-delete-call")

    btn_delete_call.onclick = () => {
        pop_up003.style.display = "block"
        btn_cancel_delete_call.onclick = () => pop_up003.style.display = "none"
    }

    let pop_up002 = document.querySelector(".background-popup-edit-call ") 
    let btn_edit_call = document.querySelector(".edit-call ") 
    let btn_cancel_edit_call  = document.querySelector(".icon-cancel-edit-call ")

    btn_edit_call .onclick = () => {
        pop_up002.style.display = "block"
        btn_cancel_edit_call .onclick = () => pop_up002.style.display = "none"
    }

 
    </script>
</body>

</html>