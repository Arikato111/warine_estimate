function openMenu(value){
    let getMemu = document.getElementById("head");
    if(value){
        getMemu.style.width = "250px";
    } else {
        getMemu.style.width = "0";
    }
}