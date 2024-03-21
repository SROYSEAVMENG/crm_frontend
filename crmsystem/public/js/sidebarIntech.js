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

var button = document.getElementById("btn-list-rep-pm");

// Add click event listener to the button
button.addEventListener("click", function() {
    // Change the page URL
    window.location.href = "/listreport"; // Replace "newpage.html" with the desired destination URL
});

var button = document.getElementById("back-page1");

// Add click event listener to the button
button.addEventListener("click", function() {
    // Change the page URL
    window.location.href = "/technical"; // Replace "newpage.html" with the desired destination URL
});
