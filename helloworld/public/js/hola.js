function hello(){
console.info("hola mon!");
}

function bye(){
    console.info("bye mon!");
}

$(function(){

    $("#sayHello").click(function(){
        // console.debug("Prova");
        // alert("Hola!!");
        $("#helloworld").show();
    });
});