      // Start pf dropdown 
      const dropWrapper = document.querySelectorAll('.drop-wrapper')
      dropWrapper.forEach((element) => {
          const dropElementId = 'drop-container-' + element.getAttribute('id').toString()
          const dropElement = document.getElementById(dropElementId)
          element.addEventListener('click', function () {
              dropElement.classList.toggle('show');
          });
      })  //End dropdown pf
      function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
      }