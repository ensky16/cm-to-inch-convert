<script>

      function convertInchToCm_single(length) 
      {
        var num =length*0.39;
        num = num.toFixed(2); 
        document.getElementById("inchIputHolder").value=num;
    }


          function convertCmToInch_single(length) {
        var num =length*2.54;
        num = num.toFixed(2); 
        document.getElementById("cmInputHolder").value=num;
   }

 
      function convertInchToCm(length) 
      {
        var num =length*0.39;
        num = num.toFixed(2); 
        document.getElementById("inchToCmResult").value=num;
    }
   
 
      function convertCmToInch(length) {
        var num =length*2.54;
        num = num.toFixed(2); 
        document.getElementById("cmToInchResult").value=num;
   }
   
</script>




