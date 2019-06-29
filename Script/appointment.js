function on_date (value, doc) {
    var date = document.getElementById("0");
                
    check.addEventListener("change", date(event, doc));

    function date (event, doc) {
        fetch("index.php?page=available&doc="+doc+"&fct=date" , {method: "GET"});
    }
}