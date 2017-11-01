function showOtherMajorField(name) {
    if(name == 'OtherOption')
        document.getElementById('Other-Text').innerHTML='<input id="Other" class="field-style" type="text" placeholder="Other" name="Other" required>';
    else
        document.getElementById('Other-Text').innerHTML='';
}