function showOtherInternationalField(name) {
    if(name == 'Yes')
        document.getElementById('otherInternationalText').innerHTML='If yes, your home country: <input id="OtherInternational" class="field-style" type="text" name="OtherInternational" required>';
    else
        document.getElementById('otherInternationalText').innerHTML='';
}
