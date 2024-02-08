<?php 
$title ="Web Programming-aboutus";
include'header.php'; 
?>
<h2>About Us</h2>

<script>
    //this is a comment
    document.write("Hello World")

    //triggering an alaert box
    window.alert("This is an alert box")
</script>

<noscript>
    If javascript is not enabled this will be displayed so users know they need to enable js.
</noscript>

<script>
    //document.write but after loading the page
    function hello(){
        document.write("This is after the page has loaded")
    }

</script>

<button onclick="document.write('This is something')"> Click me </button>

<?php include'footer.php'; ?>