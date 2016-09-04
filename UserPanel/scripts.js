     <!--Enabling perser button in find perfect car container -->
        <script type="text/javascript">
         function enablebtn()
            {
                
                if ((document.getElementById('price-choice').value!="")&&(document.getElementById('brand-choice').value!="")&&(document.getElementById('type-choice').value!=""))
                     document.getElementById("perser").disabled=false;
                else
                    document.getElementById("perser").disabled=true;


            }
        </script>


        <!--Ajax scripts for populating the car models dropdown lists
        get_data() populates the first box and get_data2() populates the second box --> 

        <!--Ajax script for populating the compare dropdown lists on find compare section-->
            <script type="text/javascript">


            function get_data()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("third-choice").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice").value+"&first-choice="+document.getElementById("first-choice").value, true);
                xhttp.send();


            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });

        </script>

        <script type="text/javascript">


            function get_data2()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("third-choice2").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice2").value+"&first-choice="+document.getElementById("first-choice2").value, true);
                xhttp.send();

                if ((document.getElementById('second-choice2').value!="")&&(document.getElementById('second-choice').value!="")&&(document.getElementById('first-choice').value!="")&&(document.getElementById('first-choice2').value!=""))
                     document.getElementById("submit").disabled=false;
                else
                    document.getElementById("submit").disabled=true;
            }
        </script>
            



         <!--Ajax script for populating the dealer dropdown list on find dealer section-->
            <script type="text/javascript">


            function get_data3()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("third-choice3").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "getter2.php?second-choice3="+document.getElementById("second-choice3").value+"&first-choice3="+document.getElementById("first-choice3").value, true);
                xhttp.send();

                if ((document.getElementById('second-choice3').value!="")&&(document.getElementById('first-choice3').value!=""))
                     document.getElementById("search").disabled=false;
                else
                    document.getElementById("search").disabled=true;


            }
        </script>

        <!--Ajax script for populating the car models dropdown list on get review section-->
        <script type="text/javascript">


            function get_data4()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("third-choice4").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice4").value+"&first-choice="+document.getElementById("first-choice4").value, true);
                xhttp.send();
                if ((document.getElementById('second-choice4').value!="")&&(document.getElementById('first-choice4').value!=""))
                     document.getElementById("review").disabled=false;
                else
                    document.getElementById("review").disabled=true;


            }
        </script>


        <script type="text/javascript">


            function get()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("second-choice4").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "get.php?first-choice="+document.getElementById("first-choice4").value, true);
                xhttp.send();
                


            }
        </script>

        <script type="text/javascript">


            function get2()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("second-choice").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "get.php?first-choice="+document.getElementById("first-choice").value, true);
                xhttp.send();
                


            }
        </script>

        <script type="text/javascript">


            function get3()
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200)
                    {
                        document.getElementById("second-choice2").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "get.php?first-choice="+document.getElementById("first-choice2").value, true);
                xhttp.send();
                


            }
        </script>