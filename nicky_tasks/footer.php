   
   </main> 
   </div>
          <footer class="row d-flex justify-content-between align-items-center">
            
            <div class="col-md-4">&copy; Ni Xiong</div>

            <div class="col-md-4 text-center">Course: Web Programming</div>

            <div class="col-md-4 text-end">HAMK</div>


            <div class="col-md-6 mx-auto text-center">
              <?php
                //get the current file path
                $current_file = basename($_SERVER["SCRIPT_FILENAME"]);

                //get the last modified time
                $get_modi_time = filemtime($current_file);

                //convert the time format
                $last_modi_time = date("F d, Y H:i:s", $get_modi_time);

                //print the result
                echo $current_file." was last modified on ".$last_modi_time;
              ?>
            </div><!--text center-->

          </footer>

    </div> <!--container-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>