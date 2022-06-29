 <div id="footer" class="fixed-bottom">
     <footer>
         <div class="container">
             <div class="row">
                 <div class="col-6 footer">
                     <h6>Desarrollado por <a href="https://indaga.me/" class="logo-indaga">Indaga</a></h6>
                 </div>
                 <div class="col-6 footer-01">
                     <a href="mailto:contacto@diagnosticochilesostenible.cl">contacto@diagnosticochilesostenible.cl</a>
                 </div>
             </div>
         </div>
     </footer>
 </div>

 <!-- Optional JavaScript; choose one -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

 <!-- Option 2: Separate Popper and Bootstrap JS -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <!-- Option 3: Other JS -->

 <script src="assets/js/control-select-1.js"></script>

 <script src="assets/js/condicional-1.js"></script>

 <script src="assets/js/condicional-2.js"></script>

 <script src="assets/js/condicional-3.js"></script>

 <script src="assets/js/tooltips.js"></script>
 <script type="text/javascript">
     <?php
        if (!isset($_GET['eid'])) {
            $_GET['eid'] = '';
        }
        ?>
     $(document).ready(function() {
         $('#saveclose').click(function() {
             window.location.href = "saveclose.php?eid=<?php echo $_GET['eid'] ?>";
         })
     });
 </script>

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-6NQBJ654YY"></script>
 <script>
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());

     gtag('config', 'G-6NQBJ654YY');
 </script>

 </body>

 </html>