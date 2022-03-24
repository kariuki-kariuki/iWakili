// // Business Logic
function Hire (username,telephone,location,date,topic) {
    this.username = inputUsername;
    this.topic = inputTopic
}

function resetFields() {
    var inputtedLocation = $("#inputLocation").val("");
    var inputtedDate= $("#inputDate").val("");
    var inputtedTopic = $("#inputTopic").val("");
}

function genRandId(){
    var rand = Math.floor(Math.random() * 88)
    return `P${rand}-U`
}
function genOrderId(){
    var rand = Math.floor(Math.random() * 77)
    return `P${rand}-P`
}

var reset = function(){
    location.reload();
} 



// USER INTERFACE LOGIC


function formValidation(){
    hideElement();
    let nameData = document.forms["form"]["name"].value
    let telephoneData = document.forms["form"]["telephone"].value
    let locationData = document.forms["form"]["location"].value
    let dateData = document.forms["form"]["date"].value
    let topicData = document.forms["form"]["topic"].value

    if(nameData == "" || telephoneData == "" || locationData == "" || dateData == "" || topicData == ""){
        unhideElement();
        alert("Enter valid information!")
        return false;
    }else{
        getUserDetails();
    }
}

    let getUserDetails = function(){
        let name = document.getElementById("name").value;
        let telephone = document.getElementById("telephone").value;
        let location = document.getElementById("location").value;
        let date = document.getElementById("date").value;
        let topic = document.getElementById("topic").value;
        
    }

    let display = document.getElementById("display")

    let reset = function(){
         location.reload();
         
     }