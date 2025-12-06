 // selector and a `content` prop:
      tippy('.ilw-auth-pop', {
        content: 'My tooltip!',
        placement: 'top',
		followCursor: true,
		allowHTML: true,
		theme: 'light-border',
		interactive: true,
      });



 // Function to add a class to the iframe when the page loads
    window.onload = function() {
        // Get the iframe element by its ID
        //alert('ggg');

        adjustIframeHeight();
     
    };

       // Function to adjust the height of the iframe
    function adjustIframeHeight() {
      //alert('ddd');
      var jobifrmae = document.getElementById("jobifrmae");
      if(jobifrmae){
          var iframe = jobifrmae.getElementsByTagName("iframe")[0];
          iframe.classList.add("jjjjjjjjjjjjjjj");
          var height = 10500;
          console.log('================================');
          console.log(height);
          console.log('================================');
          iframe.style.height = height + "px";
      }
    }



    