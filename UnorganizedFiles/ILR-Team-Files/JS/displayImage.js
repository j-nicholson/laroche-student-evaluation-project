function displayImage(input) {
    if(input.files && input.files[0]) {
        var f_reader = new FileReader();

        f_reader.onload = function(e){
            $('#profile-image')
                .attr('src', e.target.result)
                .width(200)
                .height(200);
        };
        f_reader.readAsDataURL(input.files[0]);
    }
}