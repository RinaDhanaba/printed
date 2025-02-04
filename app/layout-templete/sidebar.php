<!-- Sidebar -->


<div id="mySidenav" class="sidenav">
<button class="openbtn" onclick="toggleNav()">☰</button>
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
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 10px 15px;
    position: relative;
    left: -45px;
    top: 0px;
    z-index: 999999;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    right: 0;
    background-color: var(--white);
    transition: 0.3s;
    padding-top: 60px;
    width: 95%;
    max-width:1000px;
    z-index: 999999;
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