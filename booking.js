
function book(){
    if(document.getElementById('name').value=="" || document.getElementById('email').value=="" ||document.getElementById('date').value=="" ||document.getElementById('slot').value=="" ||document.getElementById('mobile').value=="" )
    {
        alert("Please fill required fields.");

    }

    else{
    console.log("book");
    var data= new FormData();
    data.append('send','send');
    data.append('name',document.getElementById('name').value);
    data.append('email',document.getElementById('email').value);
    data.append('mobile',document.getElementById('mobile').value);
    var d= new Date(document.getElementById('date').value);
    data.append('date',d.toISOString());
    data.append('slot',document.getElementById('slot').value);
    data.append('ppl',document.getElementById('people').value);
    
  
    var xmlHttp = new XMLHttpRequest();                                                      //initialize AJAX request
    xmlHttp.onreadystatechange = function(){                                                 //shoot when ready
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
             alert(xmlHttp.responseText); 
  
          }
  }
    xmlHttp.open("post", "handler.php");
    xmlHttp.send(data);
    alert("Please wait. Do not close or refresh the window."); 


}
  }