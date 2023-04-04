// search result
function getResult(){
    const valueSearch = document.getElementById("search-text").value;
    return valueSearch
}
document.getElementById("search-btn").addEventListener("click", function(){
    document.getElementById("result-final").innerHTML = getResult();
})