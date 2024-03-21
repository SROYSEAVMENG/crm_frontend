
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="../../public/css/style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/customer.css">
    <link rel="stylesheet" href="../css/atm.css">
    <link rel="stylesheet" href="../css/ticket.css">
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
                    <li class="nav-link drop-wrapper" id="1">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Customer</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-1" style="padding-left: 60px; display: none;">
                        <a href="lead" class="link1 ">Lead</a>
                        <a href="customer" class="link2">Customer</a>
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
                        <a href="manage" class="link2">Manage</a>
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
                <div style="float: left;"> <p class="nameList">TICKET</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-new-ticket" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;TICKET</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    

            <table>
  <tr>
    <th>ID</th>
    <th>Name Company</th>
    <th>Ticket</th>
    <th>Input by</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Prince Bank</td>
    <td>Core Banking</td>
    <td>Sale A</td>
    <td>Request</td>
    <td>
        <span>
            <button class="btn-crud-list-ticket " style="background-color: #423EFF;">
            <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
            </button>
          </span>
        <span>
            <button class="btn-crud-list-ticket " style="background-color: #67A7CC; ">
            <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>            </button>
            </button>
          </span>
          <span>
            <button class="btn-crud-list-ticket btn-delete-ticket"style="background-color: #F60E0E;">
            <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </button>
          </span>
    </td>

</table>
    <!-- create -->
<div class="content-create-new-ticket">
    <div>
        <div class="a">
            <div class="name-new-new-ticket" style="float:left;">NEW TICKET</div>
            <div class="icon-cancel-new-ticket" style="float:right;"><span><i class="fa fa-times-circle-o close-create-customer" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-ticket" style="float:left; width: 50%; ">
            <label class="label" for="ATM ID">ATM ID</label>
            <input type="text" class="form-control-new-ticket" placeholder="ATM ID" required>
        </div>
        <div class="form-group-new-ticket" style="float:right; width: 50%; ">
            <label class="label" for="Source">Source</label>
            <input type="email" class="form-control-new-ticket" placeholder="Source" required>
        </div>
        <div class="form-group-new-ticket" style="float:left; width: 50%;">
            <label class="label" for="phone-number-company">Phone Number</label>
            <input type="number" class="form-control-new-ticket" placeholder="Phone Number" required>
        </div>
        <div class="form-group-new-ticket" style="float:right; width: 50%;">
            <label  class="label" for="Call Type">Call Type</label>
            <select name="Call Type" class="form-control-new-ticket">
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-ticket" style="float:left;  width:  50%;">
            <label class="label" for="Call Date">Call Date</label>
            <input type="date" class="form-control-new-ticket" placeholder="Call Date" required>
        </div>
        <div class="form-group-new-ticket" style="float:right; width: 50%;">
            <label class="label" for="Status">Status</label>
            <input type="text" class="form-control-new-ticket" placeholder="Status" required>
        </div>
        <div class="form-group-new-ticket" style="float:left; width: 50%;">
            <label class="label" for="Address">Address</label>
            <input type="text" class="form-control-new-ticket" placeholder="Address" required>
        </div>
        <div class="form-group-new-ticket" style="float:right; width:  50%;">
            <label  class="label" for="City">City</label>
            <select name="input-by" class="form-control-new-ticket">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-ticket" style="float:left; width:  50%;">
                <label  class="label" for="Sub Call Type">Sub Call Type</label>
                <select name="Sub Call Type" class="form-control-new-ticket">
                  <option value=""></option>
                  <option value="Sale A">Sale A</option>
                  <option value="Sale B">Sale B</option>
                  <option value="Sale C">Sale C</option>
                </select></div>    
        <div class="form-group-new-ticket" style="float:right; width: 50%;">
            <label class="label" for="Diagnoise">Diagnoise</label>
            <input type="text" class="form-control-new-ticket" placeholder="Diagnoise" required>
        </div>
        <div class="form-group-new-ticket" style="float:left; width:  50%;">
            <label  class="label" for="Vendor">Vendor</label>
            <select name="Vendor" class="form-control-new-ticket">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>

        <div class="form-group-new-ticket" style="float:right; width:  50%;">
            <label  class="label" for="input-by">Input by</label>
            <select name="input-by" class="form-control-new-ticket">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-ticket" style="padding: 10px 0px 0px 335px;">
            <button class="btn-create-new-ticket">SUBMIT</button>
        </div>

    </form>
</div>
        <!------------- Form delete ticket ------------>

        <div class="delete-dev-ticket">
        <div class="all-div-ticket" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-ticket" style="font-size: 20px;">Do you want to delete this ticket?</h2>
        <div class="btn-dev-ticket">
        <button class="btn-cancel-delete-ticket">Cancel</button>
        <button class="btn-confirm-delete-ticket">Delete</button>
        </div>
        </div>
    </div>  

        <!------------ end of delete ticket ----------------->



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
        let pop_up1111 = document.querySelector(".content-create-new-ticket")
    let create_ticket_button = document.querySelector(".btn-create-new-ticket")
    let close_create_ticket = document.querySelector(".icon-cancel-new-ticket")

    create_ticket_button.onclick = () => {
      pop_up1111.style.display = "block"
      close_create_ticket.onclick = () => pop_up1111.style.display = "none"
    }

    let pop_up2222 = document.querySelector(".delete-dev-ticket")
    let btn_delete_ticket = document.querySelector(".btn-delete-ticket")
    let btn_cancel_delete_ticket = document.querySelector(".btn-cancel-delete-ticket")

    btn_delete_ticket.onclick = () => {
        pop_up2222.style.display = "block"
        btn_cancel_delete_ticket.onclick = () => pop_up2222.style.display = "none"
    }

    </script>
</body>

</html>