<h2 style="margin-bottom:15px;">Frequently asked questions</h2>
    <p>Got a question? We might have answered it here. If not, feel free to get in touch with <span class="highlight">The Team</span>, we’re here to help!</p>

<div class="faq-container"> 
    <div class="tab-container">
        <!-- Left Side Tabs -->
        <div class="tab-menu">
            <?php
            $faq = [
                "How long will my print take to arrive?" => "Find out how quickly you can get your print by filling in your selected options in the product builder, and check out the delivery options at the bottom. You can also explore the available delivery options from your basket once you’ve added a product. You’ll notice that if you put multiple items into your basket, they may be sorted into 'delivery groups' based on delivery days, in order to help us ship your items as quickly and efficiently as possible. Find out more about delivery groups <a href='#'>here</a>.",
                "How do I set up my artwork for print?" => "Ensure your artwork meets the specific file requirements such as resolution, bleed, and file format. You can find detailed instructions and templates on our setup guide page.",
                "How to design a Leaflet or Flyer?" => "Use professional tools like Adobe Illustrator or Canva to create eye-catching designs. Follow our guidelines for size, bleed, and color profiles to ensure the best print quality.",
                "How much does it cost to print Leaflets or Flyers?" => "Pricing varies based on size, paper type, and quantity. Use our online calculator for an exact quote.",
                "What are Versions?" => "Versions allow you to print different designs within the same order. This is useful for businesses needing varied content in bulk.",
                "What is perforation?" => "Perforation is a series of small holes punched into the paper, allowing easy tearing of a section, such as for coupons or tickets.",
                "What is the standard Leaflet & Flyer Size?" => "Standard sizes include A4, A5, and DL. You can select custom dimensions during the order process.",
                "What is the difference between Leaflets & Flyers?" => "Flyers are typically single sheets, while leaflets may be folded. Both are effective marketing tools.",
                "What is a file copy?" => "A file copy is an extra copy of your print job kept on file for reordering purposes."
            ];

            $first = true;
            foreach ($faq as $question => $answer) {
                $activeClass = $first ? 'active' : '';
                echo "<button class='tab-link $activeClass' onclick=\"openTab(event, '".md5($question)."')\">$question</button>";
                $first = false;
            }
            ?>
        </div>

        <!-- Right Side Content -->
        <div class="tab-content-container">
            <?php
            $first = true;
            foreach ($faq as $question => $answer) {
                $displayStyle = $first ? 'style="display:block;"' : '';
                echo "<div id='".md5($question)."' class='tab-content' $displayStyle>
                        <p>$answer</p>
                      </div>";
                $first = false;
            }
            ?>
        </div>
    </div>
</div>

<script>
// JavaScript to handle tab switching
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>