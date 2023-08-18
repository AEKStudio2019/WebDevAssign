        <footer>
            <span>Copyright © 
                <?php 
                    $year = date("Y");
                    echo $year; 
                ?>  
                <a href="https://www.github.com/AEKStudio2019" target="_blank">AEK</a>. All rights reserved.
            </span>
        </footer>
    </body>

    <script>
        $(document).ready(
        function() 
        {
            $("[href]").each(
            function() 
            {
                if (this.href == window.location.href) 
                {
                    $(this).addClass("active");
                }
            }
            );
        }
        );
    </script>
</html>