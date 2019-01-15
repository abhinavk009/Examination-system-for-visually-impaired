<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


	<title>Questions</title>
    
    <style>
     body {
        background-image: url(BACK.jpg);
        font-size: 22px;
            
    }
    
    </style>
</head>

<body>

<!-- Page content -->
<div class="content">
  

<div id="coll">
<!-- Search Form -->

  
<form  method="post" action="response.php" >  
&nbsp;&nbsp;&nbsp;ENTER STUDENT'S NAME: &nbsp;&nbsp;<input type="text" name="std_name"/><br/><br/>
&nbsp;&nbsp;&nbsp;ENTER REGISTRATION NO: <input type="text" name="std_reg"/><br/>
  <br/><br/><br/><br/> 
        1. Where is India's First nuclear centre ?
     <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
        <input onclick='responsiveVoice.speak("1.Where is India First nuclear centre ?");' type='button' value='Play' />
         
        <input onclick="startDictation('transcript1')" type="button" value="response"/>
        <input type="text"name="qsn1" id="transcript1"/><br><br>
  
  
  
        2.Planning Commission was established by the Government of India in which year?
         <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
         <input onclick='responsiveVoice.speak("2.Planning Commission was established by the Government of India in which year?");' type='button' value='Play' />
        <input onclick="startDictation('transcript2')" type="button" value="response"/>
        <input type="text" name="qsn2" id="transcript2"/>
        <br/><br/>
     
     
        3. When was the first Parliamentary Forum on Children constituted?
         <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
          <input onclick='responsiveVoice.speak("3. When was the first Parliamentary Forum on Children constituted?");' type='button' value='Play' />
        <input onclick="startDictation('transcript3')" type="button" value="response"/> 
        <input type="text" name="qsn3" id="transcript3"/>
       <br/><br/>
  
     
    
        4. When was the first Parliamentary Forum on Global Warming and Climate Change constituted?
          <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
          <input onclick='responsiveVoice.speak("4. When was the first Parliamentary Forum on Global Warming and Climate Change constituted?");' type='button' value='Play' />
        <input onclick="startDictation('transcript4')" type="button" value="response"/> 
        <input type="text" name="qsn4" id="transcript4"/>
       <br/><br/>
  
        5. When was the first Parliamentary Forum on Youth constituted?
         <script src='https://code.responsivevoice.org/responsivevoice.js'></script>  
         <input onclick='responsiveVoice.speak("5. When was the first Parliamentary Forum on Youth constituted?");' type='button' value='Play' />
     <input onclick="startDictation('transcript5')" type="button" value="response"/>    
     <input type="text" name="qsn5" id="transcript5"/>
     <br/><br/><br/><br/>
        <center><input type="submit" value="SUBMIT"/></center>
        
     
        
</div>
</form>
</div>
<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation(idVal) {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById(idVal).value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
  
  
  
  
</script>
</div> 

    
  



</body>

</html>