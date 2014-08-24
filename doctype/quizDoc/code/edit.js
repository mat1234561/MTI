
function rename() {
    var namere = prompt("Rename your document:");
    
    if (namere != null) {
        document.getElementById("name").value = namere;
    }
}