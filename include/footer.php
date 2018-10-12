<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 9/21/18
 * Time: 1:36 PM
 */?>
<footer>
<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10 offset-1">
            <p class="text-center">
             © 2018 Annual International Conference on Information Technology for Development. All rights reserved.
            </p>
        </div>
    </div>
</div>
</footer>


<script>
    $(document).ready(function($) {
        var winWidth = $(window).width();
        var maxWidth = 1200;
        if (winWidth < maxWidth) {
            $("#content-navbar").addClass("collapse");
            $("#nav").css("background-color","white");
            $(".page").css("color","black");
            $(".social").css("color","#0f5288");

        }
        $(window).resize(function () {

            var winWidth = $(window).width();

            var maxWidth = 1200;

            if (winWidth < maxWidth) {
                $("#content-navbar").addClass("collapse");
                $("#nav").css("background-color","white");
                $(".page").css("color","black");
                $(".social").css("color","#0f5288");
            }
            else {
                $("#content-navbar").removeClass("collapse");
                $("#nav").css("background-color","transparent");
                $(".page").css("color","white");
                $(".social").css("color","white");

            }
        });

        $(window).onscroll(function () {


        });
    });

</script>

<script>
    window.onscroll = function() {
        changeColor()
    };

    function changeColor() {
        var Header = document.getElementById("nav");
        var Navbar = document.getElementsByClassName("page");
        var Social = document.getElementsByClassName("social");
        if (document.body.scrollTop > 2 || document.documentElement.scrollTop > 2) {
            Header.style.backgroundColor = "white";
            for (var i = 0; i < Navbar.length; i++) {
                Navbar[i].style.color = 'black';
            }
            for (var i = 0; i < Social.length; i++) {
                Social[i].style.color = '#0f5288';
            }
        } else {
                Header.style.backgroundColor = "transparent";
                for (var i = 0; i < Navbar.length; i++) {
                    Navbar[i].style.color = 'white';
                }
                for (var i = 0; i < Social.length; i++) {
                    Social[i].style.color = "white";
                }
        }
    }
</script>
<script>
    var i=0;
    setInterval(function() {
        i++;
        if(i==7){i=1;}
        showSlides(i);
    }, 2000);
    function showSlides(i){
        var slides = document.getElementById("slideshow-container");
        slides.style.backgroundImage = "url('/it4d/images/"+i+".jpg')";
    }


</script>
</body>
</html>
