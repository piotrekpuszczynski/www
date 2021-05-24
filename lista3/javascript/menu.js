document.getElementById("menu").addEventListener("click", () => {
    let menuBar = document.getElementById("menuBar");
    
    if (menuBar.className === "menuBar active") menuBar.className = "menuBar";
    else menuBar.className = "menuBar active";
});
