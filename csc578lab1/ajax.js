function showHint(str) 
{
  if (str.length == 0) {
    document.getElementById("txtHint1").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint1").innerHTML = this.responseText;
      }
    };
    showHint3(str);
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}

function showHint2(state, str)
{
  if (str.length == 0) 
  {
    document.getElementById("txtHint2").innerHTML = "";
    return;
  } 
  else 
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint2.php?q=" + state+";" +str, true);
    xmlhttp.send();
  }
}

  function showHint3(state)
  {
    if(state.length == "")
    {
      return;
    }
    else
    {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function()
      {
        if(this.readyState == 4 && this.status == 200)
        {
          document.getElementById("district").options.length = 0;

          var dropdown = document.getElementById("district");
          if(this.response != "")
          var data = JSON.parse(this.responseText);
          for(var i = 0 ; i < data.length ; i++)
          {
            var option = document.createElement("option");
            option.text = data[i];
            option.value = data[i];

            dropdown.options.add(option);
          }
        }
      };
        xmlhttp.open("GET","gethint2.php?q=" + state,true);
        xmlhttp.send();
    }
    
  }
  
    
  
