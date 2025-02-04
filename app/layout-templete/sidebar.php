<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Button to open sidebar -->
    <button class="toggle-btn" id="toggleBtn" onclick="toggleSidebar()">&#x276F;</button>
    <h2>Sidebar Content</h2>
    <p>This is your sidebar where you can add any content you like.</p>
</div>

<script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var button = document.getElementById("toggleBtn");

            sidebar.classList.toggle("active");

            // Change button text based on sidebar state
            if (sidebar.classList.contains("active")) {
                button.innerHTML = "&#x276E;"; // Change to "‹" (left arrow)
            } else {
                button.innerHTML = "&#x276F;"; // Change back to "›" (right arrow)
            }
        }
    </script>


<style>
        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            right: -100%; /* Initially hidden */
            max-width: 100px;
            width:90%;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.3);
            transition: right 0.3s ease-in-out;
            padding: 20px;
            z-index: 999999;
        }

        /* When sidebar is active */
        .sidebar.active {
            right: 0;
        }

        /* Toggle Button Styling */
        .toggle-btn {
            position: relative;
            top: 20px;
            right: -100%; /* Adjust position outside the sidebar */
            background-color: #ff1493;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px 0 0 5px;
            transition: right 0.3s ease-in-out;
            z-index: 999999;
        }

</style>