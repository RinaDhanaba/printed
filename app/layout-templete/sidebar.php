<!-- Sidebar -->

<!-- Button to open sidebar -->
<button class="toggle-btn" onclick="toggleSidebar()">☰ Open Sidebar</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <button class="close-btn" onclick="toggleSidebar()">✖ Close</button>
    <h2>Sidebar Content</h2>
    <p>This is your sidebar where you can add any content you like.</p>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }
</script>


<style>
        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            right: -300px; /* Initially hidden */
            width: 300px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.3);
            transition: right 0.3s ease-in-out;
            padding: 20px;
        }

        /* When sidebar is active */
        .sidebar.active {
            right: 0;
        }

        /* Button styling */
        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #ff1493;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        /* Close button inside sidebar */
        .close-btn {
            background-color: #ff1493;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
        }
</style>