$(document).ready(function () {

    // autocomplete student name
    $("#search_name").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action_search_name.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-name").html(response);
          },
        });
      } else {
        $("#show-list-name").html("");
      }
    });

    // to print selected STUDENT NAME into the input field
    $("#show-list-name").on("click", "a", function () {
      $("#search_name").val($(this).text());
      $("#show-list-name").html("");
    });

    // autocomplete id
    $("#search_id").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action_search_id.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-id").html(response);
          },
        });
      } else {
        $("#show-list-id").html("");    
      }
    });

    // to print selected STUDENT ID into the input field
    $("#show-list-id").on("click", "a", function () {
      $("#search_id").val($(this).text());
      $("#show-list-id").html("");
    });

    // autocomplete sv name
    $("#search_sv_name").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action_search_lect_name.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-sv-name").html(response);
          },
        });
      } else {
        $("#show-list-sv-name").html("");
      }
    });

    // to print selected SUPERVISOR NAME into the input field
    $("#show-list-sv-name").on("click", "a", function () {
      $("#search_sv_name").val($(this).text());
      $("#show-list-sv-name").html("");
    });

      // autocomplete ex name
      $("#search_ex_name").keyup(function () {
         let searchText = $(this).val();
        if (searchText != "") {
          $.ajax({
             url: "action_search_lect_name.php",
            method: "post",
            data: {
               query: searchText,
            },
            success: function (response) {
               $("#show-list-ex-name").html(response);
            },
          });
        } else {
          $("#show-list-ex-name").html("");
        }
       });
       // to print selected EXAMINER NAME into the input field
       $("#show-list-ex-name").on("click", "a", function () {
         $("#search_ex_name").val($(this).text());
         $("#show-list-ex-name").html("");
       });
});

function getID(str) { 
        
  if (str.length == 0) { 
      document.getElementById("search_name").value = "";
      return; 
  } 

  else { 
      // Creates a new XMLHttpRequest object 
      var xmlhttp = new XMLHttpRequest(); 

      // alert("created xmlhttp");

      xmlhttp.onreadystatechange = function () { 
          // Defines a function to be called when the readyState property changes                         

          if (this.readyState == 4 && this.status == 200) { 
              // Typical action to be performed when the document is ready 
              var myObj = JSON.parse(this.responseText); 

              alert("object created");

              // Returns the response data as a string and store this array 
              // in a variable assign the value received to first name input field 
              document.getElementById("search_id").value = myObj[0]; 

              alert("Student ID returned: " + myObj[0]);
          }
          // else 
          //     alert("readyState: " + this.readyState + " - status: " + this.status);
      };

      // xhttp.open("GET", "filename", true); 
      xmlhttp.open("GET", "get_id_by_name.php?search_name=" + str, true); 

      // alert("opened xmlhttp");

      // Sends the request to the server 
      xmlhttp.send(); 

      // alert("sent xmlhttp to server");
  }
} 

function getName(str) { 
  
  if (str.length == 0) { 
      document.getElementById("search_id").value = "";
      return; 
  } 

  else { 
      // Creates a new XMLHttpRequest object 
      var xmlhttp = new XMLHttpRequest(); 

      xmlhttp.onreadystatechange = function () { 
          // Defines a function to be called when the readyState property changes 

          if (this.readyState == 4 && this.status == 200) { 
              // Typical action to be performed when the document is ready 
              var myObj = JSON.parse(this.responseText); 

              alert("object created");

              // Returns the response data as a string and store this array 
              // in a variable assign the value received to first name input field 
              document.getElementById("search_name").value = myObj[0]; 

              alert("Student Name returned: " + myObj[0]);
          }
          // else 
          //     alert("readyState: " + this.readyState + " - status: " + this.status);
      };

      // xhttp.open("GET", "filename", true); 
      xmlhttp.open("GET", "get_name_by_id.php?search_id=" + str, true); 

      // Sends the request to the server 
      xmlhttp.send(); 
  }
}




 

  
  



