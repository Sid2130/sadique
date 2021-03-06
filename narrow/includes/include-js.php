<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
<script src="js/responsive-nav.min.js"></script>
<script src="js/clamp.min.js"></script>

<script>
    var nav = responsiveNav(".nav-collapse", { // Selector
        animate: true, // Boolean: Use CSS3 transitions, true or false
        transition: 500, // Integer: Speed of the transition, in milliseconds
        label: "<i class='fa fa-bars fa-lg'></i>", // String: Label for the navigation toggle
        insert: "before", // String: Insert the toggle before or after the navigation
        customToggle: "", // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative", // String: Position of the opened nav, relative or static
        navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active", // String: Class that is added to <html> element when nav is active
        jsClass: "js", // String: 'JS enabled' class which is added to <html> element
        init: function(){}, // Function: Init callback
        open: function(){}, // Function: Open callback
        close: function(){} // Function: Close callback
    });

   
    $('.widgets-container .widgets .description').each(function() {
        $clamp(this, { clamp:'auto' });
    });
</script>