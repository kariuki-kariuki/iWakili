

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
        
        getHireDetails(name,telephone,location,date,topic)
    }

    let display = document.getElementById("display")

    let getHireDetails = function(topic){
        display.innerHTML = ""
        if(topic === "one"){
            display.innerHTML = `<p>Dear<strong>${nameData}</strong>, \n YOUR CASE WILL BE HANDLE BY<strong>Lorem Ipsum Advocates Company.</p>`

        }else if(topic === "two"){
            display.innerHTML = `<p>Dear<strong>${nameData}</strong>, \n YOUR CASE WILL BE HANDLE BY<strong>Ipsum Lorem Advocates Company.</p>`
        }
        unhideElement()

    }


    let hideElement = function(){
        var x = document.getElementById("hidden-display");
        x.style.display = "none";
    }

    let unhideElement = function() {
        var x = document.getElementById("hidden-display");
        x.style.display = "block";
    }

    let reset = function(){
        hideElement()
         // location.reload();
         
     }