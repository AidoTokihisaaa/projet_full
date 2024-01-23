document.getElementById('loginForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value.trim();
    var password = document.getElementById('password').value.trim();

    if(username === "" || password === "") {
        event.preventDefault();
        alert("Veuillez remplir tous les champs.");
    }
});
