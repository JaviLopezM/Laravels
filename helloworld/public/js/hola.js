function hello(){
console.info("hola mon!");
}

function bye(){
    console.info("bye mon!");
}

$(function (sayhello){
    $("#helloworld").show();
    // console.debug("Prova");
    // alert("Hola!!");
});
$(function(){
    $("#sayHello").click(sayhello());
    
});