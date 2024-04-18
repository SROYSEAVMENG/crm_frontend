
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listingDocumentCustomer.css">
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
        <div style="float: left;"><p class="nameList-do">Document</p></div>
        <div style="float:right;" >
        <a href="customer">
            <button class="btn-exit-do" >&nbsp;&nbsp;EXIT</button></a>
            <button class="btn-create-do" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;DOCUMENT</button>
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
              <button class="btn-crud-list-do download-do" style="background-color: #67A7CC; border-radius: 4px;">
              <i style="color: white;" class='bx bxs-download' aria-hidden="true"></i>           </button></a>
            </span>
            <span>
              <button class="btn-crud-list-do delete-do"style="background-color: #F60E0E;border-radius: 4px;">
              <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </span>
      </td>
    </tr>
</table>

</table>

<!------------------ End page of listing do -------------------------------------------------->
<!-------------------Start of popup create do-------------------------------------------------->
<div class="background-popup-create-do">
  <div class="popup-create-do">
  <div>
        <div class="a">
            <div class="name-new-new-do" style="float:left;">ADD DOCUMENT</div>
            <div class="icon-cancel-new-do" style="float:right;"><span><i class="fa fa-times-circle-o close-create-do" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-do" style="float:left; width:230px ">
            <label class="label" for="name-company">File Name *</label>
            <input type="file" class="form-control-new-do" required>
        </div>
        <div class="form-group-new-do" style="float:right;width:230px  ">
            <label class="label" for="name-company">Date Uploaded *</label>
            <input type="date" class="form-control-new-do" required>
        </div>
        <div class="form-group-new-do" style="float:left; ">
            <label class="label" for="name-company">Upload Status *</label>
            <input type="text" class="form-control-new-do" required>
        </div>
        <div class="form-group-new-do" style="float:right; ">
            <label class="label" for="name-company">Customer Note *</label>
            <input type="text" class="form-control-new-do" required>
        </div>
        <div class="form-group-new-do" style="padding: 0px 0px 0px 335px;" >
            <button class="btn-save-do">SAVE </button>
        </div>

    </form>

</div>
</div>
<!------------------ End of popup create do -------------------------------------------------->
        <!------------- Form delete service ------------>
  <div class="background-popup-delete-do">
    <div class="delete-dev-do">
        <div class="all-div-do" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-do" style="font-size: 20px;">Do you want to delete this document?</h2>
        <div class="btn-dev-do">
        <button class="btn-cancel-delete-do">Cancel</button>
        <button class="btn-confirm-delete-do">Delete</button>
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
    let pop_up00001 = document.querySelector(".background-popup-create-do")
    let create_do_button = document.querySelector(".btn-create-do")
    let close_do_button = document.querySelector(".icon-cancel-new-do")

    create_do_button.onclick = () => {
      pop_up00001.style.display = "block"
      close_do_button.onclick = () => pop_up00001.style.display = "none"
    }

    let pop_up00002 = document.querySelector(".background-popup-delete-do")
    let btn_delete_do = document.querySelector(".delete-do")
    let btn_cancel_delete_do = document.querySelector(".btn-cancel-delete-do")

    btn_delete_do.onclick = () => {
        pop_up00002.style.display = "block"
        btn_cancel_delete_do.onclick = () => pop_up00002.style.display = "none"
    }

 
    </script>
</body>

</html>