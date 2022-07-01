$('#fotoId').on('change', function(){
    var reader = new FileReader();


    var svgTag = document.getElementsByTagName('svg')[0];
    if(svgTag != null) {
        imgTag.setAttribute('id', 'avatarId');
        svgTag.parentNode.replaceChild(imgTag, svgTag);
    }
    var imgTag = document.createElement('img');
    reader.onloadend = function () {
        $('#avatarId').attr('src', reader.result)
    }
    reader.readAsDataURL(this.files[0]);

});