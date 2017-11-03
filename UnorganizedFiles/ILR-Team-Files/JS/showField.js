function showfield(name) {
    if(name == 'OtherOp')
        document.getElementById('other-text1').innerHTML='<input id="Other" class="field-style" type="text" placeholder="Other" name="Other" required>';
    else
        document.getElementById('other-text1').innerHTML='';
}