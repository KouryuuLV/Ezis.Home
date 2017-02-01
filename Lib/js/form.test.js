

function isEmail(emailFieldMsg, findField, exceptField){
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");
        
        errorResult = $(this).val().match(/[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+dateFieldMsg+"</li>");
        }
        else{
            
        }   
    });
}

function isEmpty(emptyFieldMsg, findField, exceptField){
    
    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+':not('+exceptField+')').each(function(){
        var fieldNameText = $("label[for='"+this.id+"']");
        
        if($(this).val() == ""){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emptyFieldMsg+"</li>");
        }
        else{
            
        }       
    });

}

function onlyText(letterFieldMsg, findField, exceptField) {
    //each cikls ir atsevišķi lai varētu atdalīt konkrētos laukus.
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");
        
        errorResult = $(this).val().match(/^[a-zēūīāšķļņA-ZĒŪĪĀŠĶĻŅ\s]*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+letterFieldMsg+"</li>");
        }
        else{
            
        }   
    });
}


function isTime(timeFieldMsg, findField, exceptField){
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");
        
        errorResult = $(this).val().match(/^[0-9][0-9]:[0-9][0-9]*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+timeFieldMsg+"</li>");
        }
        else{
            
        }   
    });
}

function isDate(dateFieldMsg, findField, exceptField){
    $(''+findField+':not('+exceptField+')').each(function(){
        //only letters and space
        var fieldNameText = $("label[for='"+this.id+"']");
        
        errorResult = $(this).val().match(/^([0-9]{4})-([0-9]{2})-([0-9]{2})*$/);
        if(errorResult == null){
            $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+dateFieldMsg+"</li>");
        }
        else
        {
            
        }   
    });
}


function isChecked(checkBoxMsg, findField, fieldNameText){
    var radioButtom = $(''+findField+'').is(":checked");

    if(radioButtom == false){
        $(".waringMsg").append("<li><b>"+fieldNameText+" </b>"+checkBoxMsg+"</li>");
    }
    else{
        
    }
}

function resetFields(){
    $("input:radio").attr("checked", false);
    $("input:text").val("");    
}







