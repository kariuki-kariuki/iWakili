function hidethis(param) {

    $("#" + param).hide("slow");
}

function showthis(param2) {
    console.log(param2)
    $("#btn" + param2).click(() => {
        console.log("Btn clicked" + param2)
        $("#" + param2).empty();
        $("#" + param2).hide();
    })
    $(".apend-here"+ param2).append(

        '<form class="container-fluid pb-5" id="form'+ param2 +'" method="post">' +
            '<p> Answering for</p>'+
            '<select name="q_id" class="d-none">'+
                '<option value="' + param2 + '">question</option>'+
            '</select>'+
            '<input type="text" name="answer" class="w3-input" required>'+
            '<br><br>'+
            '<button type="submit" class="btn btn-primary">Submit</button>'+
        '</form>'
    );
    $("#" + param2).show();
    $("#form" + param2).submit(() =>  {
        $("#apend-here" + param2).empty();
        $("#" + param2).hide("slow");
    })

   

}

