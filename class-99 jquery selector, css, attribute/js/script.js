// console.log("Script loaded");
// $("button").click(function(){
//     let inputValue = $("input").val();
//     $("h5").text(inputValue);
// });

// $("form").submit(function(e){
//     e.preventDefault();
//     let inputValue = $("input").val();
//     if(inputValue == ""){
//         $("small").text("Please enter a value").css("color", "red");
//     }else{
//         $("small").text("");
//         this.submit();
//         alert("Form submitted");
//     }
// });
$("form").on("submit", function(e){
    e.preventDefault();
    let inputValue = $("input").val();
    if(inputValue == ""){
        $("small").text("Please enter a value").css("color", "red");
    }else{
        $("small").text("");
        this.submit();
        alert("Form submitted");
    }
});

// $("selector").event(function(){});
// $("selector").on("event", function(){});