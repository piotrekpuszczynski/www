let db = document.getElementById("db");
let checkers = document.getElementById("checkers");

db.addEventListener("click", () => {

    if (db.className === "active") db.className = "";
    else {
        db.className = "active";
        checkers.className = "";
    }
});

checkers.addEventListener("click", () => {

    if (checkers.className === "active") checkers.className = "";
    else {
        checkers.className = "active";
        db.className = "";
    }
});