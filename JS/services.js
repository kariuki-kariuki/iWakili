$(document).ready(function(){
let h5=$(".bt h5")
h5.hover(function(){
    $(this).closest(".bt").find("p").show()
}, function(){
    $(this).closest(".bt").find("p").hide()
})

})

