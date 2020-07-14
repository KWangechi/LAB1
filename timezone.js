
$(document).ready(function(){

    //Returns the number of minutes ahead or behind the greenwich Meridian
    var offSet = new Date().getTimezoneOffset();

    //Returns the number of seconds since 1970
    var timestamp = new Date().getTime();

    //converts the time to UTC 
    var my_timestamp = timestamp + (60000 * offSet);

    $('#time_offset').val(offSet);
    $('#utc_timestamp').val(my_timestamp);

    /*Explanation for what is happening in line 12 and 13.
    /We are fetching the names of the placeholders on inputs in lab1.php and assigning
    them to the new variables we have created
*/


});


