function imgclick(obj)
{
	window.open(obj.src,'_blank');
}

function save(){
    if(pfurl)
    {
        $.post("ad_insert.php",
        {
            pfurl:pfurl
        },
        function(data, status){
            alert('광고 추가가 완료되었습니다.');
            pfurl='';
            location.reload();
        });   

    }else{
        alert('광고 사진을 선택해주세요.');
    }
}