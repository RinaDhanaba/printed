<!-- Sidebar -->
<button class="openbtn" onclick="toggleNav()">☰ Open Sidebar</button>

<div id="mySidenav" class="sidenav">
    <button class="closebtn" onclick="toggleNav()">×</button>
    <h2>Sidebar Content</h2>
    <a href="#">Home</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</div>


<script>
function toggleNav() {
    var sidebar = document.getElementById("mySidenav");
    if (sidebar.style.width === "1000px") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "1000px";
    }
}

    </script>


<style>
        /* Sidebar styling */
        .openbtn {
    font-size: 18px;
    cursor: pointer;
    background-color: #111;
    color: white;
    border: none;
    padding: 10px 15px;
    position: fixed;
    right: 20px;
    top: 20px;
    z-index: 1000;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    right: 0;
    background-color: #333;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 60px;
    max-width: 95%;
    width: 1000px;
}

.sidenav a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    background-color: #575757;
}

.sidenav .closebtn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
}

</style>