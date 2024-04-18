
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listingQuotationCustomer.css">
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
        <div style="float: left;"><p class="nameList-qu">Quotation</p></div>
        <div style="float:right;" >
        <a href="customer">
            <button class="btn-exit-qu" >&nbsp;&nbsp;EXIT</button></a>
            <button class="btn-create-qu" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;QUOTATION</button>
          </div>
  </div> 
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
            <table>
            <table>
    <tr>
      <th>ID</th>
      <th>File Name</th>
      <th>Size</th>
      <th>Date Uploaded</th>
      <th>Upload Status</th>
      <th>Customer Note</th>
      <th>Action</th>
    </tr>  
    <tr>
      <td>1</td>
      <td>Sample.pdf</td>
      <td>28.78MB</td>
      <td>12/03/2024</td>
      <td>Done</td>
      <td>Lastest log</td>
      <td>
          <!-- <span>
              <button class="btn-crud-list-app dee-view-app" style="background-color: #423EFF; border-radius: 4px;">
              <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
            </span> -->
          <span>
          <a href="path/to/your/file.pdf" download="filename.pdf">
              <button class="btn-crud-list-qu download-qu" style="background-color: #67A7CC; border-radius: 4px;">
              <i style="color: white;" class='bx bxs-download' aria-hidden="true"></i>           </button></a>
            </span>
            <span>
              <button class="btn-crud-list-qu delete-qu"style="background-color: #F60E0E;border-radius: 4px;">
              <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </span>
      </td>
    </tr>
</table>

</table>

<!------------------ End page of listing do -------------------------------------------------->
<!-------------------Start of popup create do-------------------------------------------------->
<div class="background-popup-create-qu">
  <div class="popup-create-qu">
  <div>
        <div class="a">
            <div class="name-new-new-qu" style="float:left;">ADD QUOTATION</div>
            <div class="icon-cancel-new-qu" style="float:right;"><span><i class="fa fa-times-circle-o close-create-qu" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-qu" style="float:left; width:230px ">
            <label class="label" for="name-company">File Name *</label>
            <input type="file" class="form-control-new-qu" required>
        </div>
        <div class="form-group-new-qu" style="float:right;width:230px  ">
            <label class="label" for="name-company">Date Uploaded *</label>
            <input type="date" class="form-control-new-qu" required>
        </div>
        <div class="form-group-new-qu" style="float:left; ">
            <label class="label" for="name-company">Upload Status *</label>
            <input type="text" class="form-control-new-qu" required>
        </div>
        <div class="form-group-new-qu" style="float:right; ">
            <label class="label" for="name-company">Customer Note *</label>
            <input type="text" class="form-control-new-qu" required>
        </div>
        <div class="form-group-new-qu" style="padding: 0px 0px 0px 335px;" >
            <button class="btn-save-qu">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup create do -------------------------------------------------->
        <!------------- Form delete service ------------>
  <div class="background-popup-delete-qu">
    <div class="delete-dev-qu">
        <div class="all-div-qu" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-qu" style="font-size: 20px;">Do you want to delete this qoutation?</h2>
        <div class="btn-dev-qu">
        <button class="btn-cancel-delete-qu">Cancel</button>
        <button class="btn-confirm-delete-qu">Delete</button>
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
    let pop_up000001 = document.querySelector(".background-popup-create-qu")
    let create_qu_button = document.querySelector(".btn-create-qu")
    let close_qu_button = document.querySelector(".icon-cancel-new-qu")

    create_qu_button.onclick = () => {
      pop_up000001.style.display = "block"
      close_qu_button.onclick = () => pop_up000001.style.display = "none"
    }

    let pop_up000002 = document.querySelector(".background-popup-delete-qu")
    let btn_delete_qu = document.querySelector(".delete-qu")
    let btn_cancel_delete_qu = document.querySelector(".btn-cancel-delete-qu")

    btn_delete_qu.onclick = () => {
        pop_up000002.style.display = "block"
        btn_cancel_delete_qu.onclick = () => pop_up000002.style.display = "none"
    }

 
    </script>
</body>

</html>